document.addEventListener('DOMContentLoaded', function() {
    const btnAbrirMenu = document.querySelector('.btn-abrir-menu');
    const btnFecharMenu = document.querySelector('.btn-fechar');
    const menuMobile = document.querySelector('.menu-mobile');
    const overlayMenu = document.querySelector('.overlay-menu');

    btnAbrirMenu.addEventListener('click', function() {
        menuMobile.classList.add('abrir-menu');
        overlayMenu.classList.add('abrir-menu');
    });

    btnFecharMenu.addEventListener('click', function() {
        menuMobile.classList.remove('abrir-menu');
        overlayMenu.classList.remove('abrir-menu');
    });

    overlayMenu.addEventListener('click', function() {
        menuMobile.classList.remove('abrir-menu');
        overlayMenu.classList.remove('abrir-menu');
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
