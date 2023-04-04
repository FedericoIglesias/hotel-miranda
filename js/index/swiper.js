const swiperRoom = new Swiper('.swiperRoom', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    edgeSwipeDetection: false,
    effect: 'coverflow',


    // Navigation arrows
    navigation: {
        nextEl: '.room-next',
        prevEl: '.room-prev',
    },

});


const swiperMenu = new Swiper('.swiperMenu', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 0,
            createElement: false,
        },
    },

    // Navigation arrows
    navigation: {
        nextEl: '.menu-next',
        prevEl: '.menu-prev',
    },

});

const swiperFacilities = new Swiper('.swiperFacilities', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    edgeSwipeDetection: false,


    breakpoints: {
        1000: {
            slidesPerView: 6,
            spaceBetween: 0,
            createElement: false,
        },
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

});

const swiperImg = new Swiper('.swiperImg', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    edgeSwipeDetection: false,


    breakpoints: {
        1000: {
            slidesPerView: 3,
            spaceBetween: 0,
            createElement: false,
        },
    },

    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

