window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");

  if (window.scrollY > 50) {
    navbar.classList.add("navbar-scrolled");
  } else {
    navbar.classList.remove("navbar-scrolled");
  }
});
 //scroll reveal
 ScrollReveal().reveal('.estatistica', {
    duration: 1000,      // duração da animação (ms)
    origin: 'bottom',    // direção da animação ('top', 'bottom', 'left', 'right')
    distance: '50px',    // distância de deslocamento do elemento
    delay: 100,          // atraso em ms
    reset: false 
 });