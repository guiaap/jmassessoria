<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    $para = "guilherme.pedroso@tecniwerservice.com.br";  
    $assunto = "Nova mensagem do site";
    $corpo = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";

    $headers = "From: $email";

    if (mail($para, $assunto, $corpo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>
