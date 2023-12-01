document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const slides = document.querySelectorAll('.image-slider img');
    const slider = document.querySelector('.image-slider');
    const header = document.querySelector('header');
    const footer = document.querySelector('footer');
    const parallaxSlider = document.querySelectorAll('.parallaxSlider');
    const parallaxMain = document.querySelectorAll('.parallaxMain');
    const headercontent = document.querySelector('.header-content');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

<<<<<<< HEAD
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
=======
    function ParallaxSlider() {
    parallaxSlider.forEach(function(element) {
        const speed = 1;
        const headerHeight = header.offsetHeight;
        const scrollY = window.scrollY;

        // Vérifier si le scrollY est supérieur à une certaine valeur (par exemple, 200 pixels)
        if (0.2*scrollY < headerHeight) {
            const yPos = scrollY * speed;
>>>>>>> 2a7f613fd4418339c00a7d720a7bedb5abcc1380
            element.style.transform = 'translateY(' + yPos + 'px)';
        } else {
            // Réinitialiser la transformation si le scrollY est inférieur à la valeur souhaitée
            element.style.transform = 'translateY(' + yPos + 'px)';
        }
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
        const headerHeight = header.offsetHeight;

        if (window.innerHeight < 450) {
            header.style.display = 'none'; // Cacher le header
            footer.style.display = 'none';
        } else {
            header.style.display = 'block'; // Afficher le header (ou utilisez 'flex' ou 'inline', selon la propriété de votre header)
            footer.style.display = 'block';
        }
        

    // Calculer la nouvelle position en tenant compte des limites
    const newTop = Math.max(-0.4 * scrollY, -headerHeight);

    header.style.top = `${newTop}px`;
}


    // Appel initial pour commencer le défilement immédiatement
    nextSlide();

    setInterval(nextSlide, 2500); // Change slide every 2.5 seconds

    // Réagir aux changements de taille de la fenêtre
    window.addEventListener('resize', function() {
        adjustHeaderPosition();
    });

 

    // Ajout de l'écouteur d'événements pour l'effet de parallaxe
    window.addEventListener('scroll', function() {
        ParallaxSlider();
        ParallaxMain()
        adjustHeaderPosition();
    });
});
