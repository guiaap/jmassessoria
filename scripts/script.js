const observador = new IntersectionObserver((entradas) => {
    entradas.forEach((entrada) => {
      if (entrada.isIntersecting) {
        entrada.target.classList.add('aparecendo');
        // opcional: parar de observar depois de aparecer
        observador.unobserve(entrada.target);
      }
    });
  });

  document.querySelectorAll('.fade-in').forEach((el) => {
    observador.observe(el);
  });

  function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if(menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "imagens/menu.png";
    } else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "imagens/close_icon.png";
    }
}

function toggleCard(card) {
  card.classList.toggle("open");

  const btnImg = card.querySelector(".btn-vermais-img");

  if (card.classList.contains("open")) {
    btnImg.src = "imagens/up.png"; // Mostrar seta para cima ao abrir
  } else {
    btnImg.src = "imagens/more.png"; // Voltar para seta para baixo
  }
}