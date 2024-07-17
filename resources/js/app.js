import './bootstrap';





const toggleButton = document.getElementById('toggleButton');
const contactForm = document.getElementById('contactForm');
const closeForm = document.getElementById('closeForm');

toggleButton.addEventListener('click', () => {
    contactForm.classList.toggle('hidden-form');
});

closeForm.addEventListener('click', () => {
    contactForm.classList.add('hidden-form');
});














    document.addEventListener('DOMContentLoaded', function() {
        // Selecciona todos los botones de preguntas frecuentes
        var faqButtons = document.querySelectorAll('.faq-button');

        // Agrega un event listener a cada botón
        faqButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Encuentra el div de respuesta correspondiente
                var answerDiv = this.nextElementSibling;

                // Alterna la clase 'hidden' en el div de respuesta
                answerDiv.classList.toggle('hidden');
            });
        });
    });


    document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper', {
        // Opciones de Swiper
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    
        },
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
    });
    });


    document.addEventListener('DOMContentLoaded', function() {
        var video = document.querySelector('.video-background');
        if (video) {
            video.play();
        }
    });