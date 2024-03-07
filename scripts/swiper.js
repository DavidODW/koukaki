//le carrousel des personnages réalisé avec swiper
document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper('.swiper', {  
        grabCursor: true, 
        centeredSlides: true, 
        centeredSlides: true,
        centeredSlidesBounds:'true',
        effect: 'coverflow',
        coverflowEffect: {
            rotate: 50, 
            scale: 1.1,
            slideShadows: false, 
        },
        loop:true,
        slidesPerView: 'auto',
    });
});