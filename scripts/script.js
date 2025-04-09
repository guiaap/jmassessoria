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