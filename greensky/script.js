document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const slides = document.querySelectorAll('.image-slider img');
    const footer = document.querySelector('footer');
    const header = document.querySelector('header');
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

    function Parallax() {
        // Ajouter main à la liste des éléments à traiter
        const parallaxElements = document.querySelectorAll('.parallax');
    
        parallaxElements.forEach(function(element) {
            const speed = 1;
            const headerHeight = header.offsetHeight;
            const scrollY = window.scrollY;
    
            // Vérifier si le scrollY est supérieur à une certaine valeur (par exemple, 200 pixels)
            if (0.25 * scrollY < headerHeight) {
                const yPos = scrollY * speed;
                element.style.transform = 'translateY(' + yPos + 'px)';
            } else {
                
                element.style.transform = 'translateY(' + 0 + 'px)';
            }
        });
    }




    function adjustHeader() {
        const scrollY = window.scrollY;
        const headerHeight = header.offsetHeight;

        if (window.innerHeight < 450 || window.innerWidth < 300) {
            header.style.display = 'none'; // Cacher le header
        } else {
            header.style.display = 'block'; // Afficher le header (ou utilisez 'flex' ou 'inline', selon la propriété de votre header)
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
        adjustHeader();
    });

 

    // Ajout de l'écouteur d'événements pour l'effet de parallaxe
    window.addEventListener('scroll', function() {
        Parallax();
        adjustHeader();
    });
});
