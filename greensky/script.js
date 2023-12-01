document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const slides = document.querySelectorAll('.image-slider img');
    const slider = document.querySelector('.image-slider');
    const header = document.querySelector('header');
    const parallaxSlider = document.querySelectorAll('.parallaxSlider');
    const parallaxMain = document.querySelectorAll('.parallaxMain');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function adjustSliderHeight() {
        const newHeight = window.innerHeight * 0.5; // 60% of viewport height
        slider.style.maxHeight = `${newHeight}px`;

        // Ajuster la hauteur des images pour correspondre à la nouvelle hauteur du slider
        slides.forEach((slide) => {
            slide.style.maxHeight = `${newHeight}px`;
        });
    }

    function ParallaxSlider() {
        parallaxSlider.forEach(function(element) {
            const speed = 0.8;
            const yPos = window.scrollY * speed;
            element.style.transform = 'translateY(' + yPos + 'px)';
        });
    }
    function ParallaxMain() {
        parallaxMain.forEach(function(element) {
            const speed = 0.95;
            const yPos = window.scrollY * speed;
            element.style.transform = 'translateY(' + yPos + 'px)';
        });
    }

    function adjustHeaderPosition() {
        const scrollY = window.scrollY;
        const newTop = 0.4*scrollY;

        header.style.top = `-${newTop}px`;
    }

    // Appel initial pour commencer le défilement immédiatement
    nextSlide();

    setInterval(nextSlide, 2500); // Change slide every 2.5 seconds

    // Réagir aux changements de taille de la fenêtre
    window.addEventListener('resize', function() {
        adjustSliderHeight();
        adjustHeaderPosition();
    });

    // Appel initial pour ajuster la hauteur au chargement de la page
    adjustSliderHeight();

    // Ajout de l'écouteur d'événements pour l'effet de parallaxe
    window.addEventListener('scroll', function() {
        ParallaxSlider();
        ParallaxMain();
        adjustHeaderPosition();
    });
});
