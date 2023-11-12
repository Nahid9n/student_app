// Swiper js section Start here

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    loop: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        autoplay:1000,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

var swiper = new Swiper(".mySwiper1", {
    effect: "coverflow",
    loop: true,
    centeredSlides: true,
    autoplay:true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        autoplay:1000,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

// Swiper js Slider End here
