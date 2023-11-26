document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const slides = document.querySelectorAll('.image-slider img');
    const slider = document.querySelector('.image-slider');


    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    // Appel initial pour commencer le défilement immédiatement
    nextSlide();

    setInterval(nextSlide, 2500); // Change slide every 2.5 seconds

    // Réagir aux changements de taille de la fenêtre
    window.addEventListener('resize', adjustSliderHeight);

    // Appel initial pour ajuster la hauteur au chargement de la page
    adjustSliderHeight();
});
