var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    conteredSlides:true,
    loop:true,
    spaceBetween: 30,
    grabCursor: true,
    drag: true,
    navigation:{
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    breakpoints : {
        991: {
            slidesPerView: 3
        }
    }
});
