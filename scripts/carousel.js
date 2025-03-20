const carousels = document.querySelectorAll('.carousel-container');

carousels.forEach(carousel => {
    const track = carousel.querySelector('.carousel-track');
    const slides = Array.from(carousel.querySelectorAll('.carousel-slide'));
    const nextButton = carousel.querySelector('.next');
    const prevButton = carousel.querySelector('.prev');

    let currentSlide = 0;

    function updateCarousel() {
        const slideWidth = slides[0].offsetWidth;
        track.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }

    nextButton.addEventListener('click', () => {
        if (currentSlide < slides.length - 1) {
            currentSlide++;
            updateCarousel();
        }
    });

    prevButton.addEventListener('click', () => {
        if (currentSlide > 0) {
            currentSlide--;
            updateCarousel();
        }
    });

    // Responsive handling
    window.addEventListener('resize', updateCarousel);
});