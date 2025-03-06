let currentIndex = 0;
const slides = document.querySelectorAll(".skills-slide");
const totalSlides = slides.length;

function updateCarousel() {
    const offset = -currentIndex * 100;
    document.querySelector(".skills-carousel").style.transform = `translateX(${offset}%)`;
}

document.getElementById("nextBtn").addEventListener("click", () => {
    if (currentIndex < totalSlides - 1) {
        currentIndex++;
        updateCarousel();
    }
});

document.getElementById("prevBtn").addEventListener("click", () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
    }
});
