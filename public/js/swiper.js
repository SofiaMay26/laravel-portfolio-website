new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

//  Contact Swiper

const contactSwiper = new Swiper(".contactSwiper", {
    loop: true,
    spaceBetween: 30,

    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".contactSwiper .swiper-pagination",
        clickable: true,
    },

    navigation: {
        nextEl: ".contactSwiper .swiper-button-next",
        prevEl: ".contactSwiper .swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
    },
});
