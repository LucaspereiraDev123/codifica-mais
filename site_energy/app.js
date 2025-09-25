let index = 0;
const slides = document.querySelectorAll(".slides img");

function mostrarSlide(n) {
    index += n;
    if (index < 0) index = slides.length - 1;
    if (index >= slides.length) index = 0;
    slides.forEach(img => img.classList.remove("active"));
    slides[index].classList.add("active");
}
function mudarSlide(n) {
    mostrarSlide(n);
}