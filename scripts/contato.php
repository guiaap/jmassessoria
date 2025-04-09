<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $mensagem = htmlspecialchars($_POST['mensagem'] ?? '');

    if ($email) {
        $para = "joelmamatias@gmail.com";
        $assunto = "Nova mensagem de $nome";
        $corpo = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";

        // Cabeçalhos do e-mail
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($para, $assunto, $corpo, $headers)) {
            echo "Mensagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar mensagem.";
        }
    } else {
        echo "E-mail inválido.";
    }
}
?>
