let slider = document.querySelector(".slider");
let slide = document.querySelectorAll(".slide");

// Iniciar el slider
let currentSlide = 1;
let slideWidth = slide[0].clientWidth;
slider.style.transform = `translateX(-${slideWidth}px)`;

setInterval(function () {
  slider.style.transition = "transform 0.5s ease-in-out";
  slider.style.transform = `translateX(-${slideWidth * (currentSlide + 1)}px)`;

  setTimeout(function () {
    slider.style.transition = "none";
    slider.style.transform = `translateX(-${slideWidth}px)`;
  }, 500);

  currentSlide++;
  if (currentSlide === slide.length - 1) {
    currentSlide = 1;
  }
}, 3000);
