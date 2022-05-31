// BANNER DE SLIDE
var classBanner = document.querySelectorAll('.swiper').length;
if (classBanner) {
    var slideBanner = new Swiper(".swiper", {
        loop: true,
    });
}
// BANNER DE SLIDE
var classBrochure = document.querySelectorAll('.swiper-brochure').length;
if (classBrochure) {
    var slideBrochure = new Swiper(".swiper-brochure", {
        loop: false,
    });
}

// BANNER DE OFERTAS
var classOffersBanners = document.querySelectorAll('.swiper-offers').length;
if (classOffersBanners) {
    var slideOffers = new Swiper(".swiper-offers", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        breakpoints: {
            320: { slidesPerView: 1, spaceBetween: 15 }, 
            480: { slidesPerView: 2, spaceBetween: 15 },
            640: { slidesPerView: 3, spaceBetween: 20 },
            768: { slidesPerView: 4, spaceBetween: 30 }
        }
    });
}

// VERIFICAÇÃO DE COOKIES
var validadeContinue = document.getElementById('validateContinue');
if (validadeContinue) {
    validadeContinue.addEventListener('click', function () {
        const form = new FormData();
        form.append('action', 'cookie');
        form.append('make', 'save');
        const params = new URLSearchParams(form);

        fetch(search_object.location, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'Cache-Control': 'no-cache',
            },
            body: params
        }).then(function (responseCookie) {
            responseCookie.json().then((responseDataCookie) => {
                console.log(responseDataCookie.status);
                if (responseDataCookie.status == true) {
                    document.getElementById('cookie-alert').remove();
                }
            });
        }).catch();
    });
}


// FUNCIONAMENTO DO MENU
function toggleMenu () {
    document.querySelector('.hamburger').classList.toggle('is-active');
    document.getElementById('header-bar-mobile').classList.toggle('-right-full');
    document.getElementById('header-bar-mobile').classList.toggle('right-0');
}
var buttonMenu = document.getElementById("mobile-menu-hamburger");
if (buttonMenu) {
    buttonMenu.addEventListener('click', function () {
        toggleMenu();
    });
}
var buttonMenu = document.getElementById("header-bar-mobile-close");
if (buttonMenu) {
    buttonMenu.addEventListener('click', function () {
        toggleMenu();
    });
}