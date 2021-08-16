$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayHoverPause: true,
    autoplayTimeout:2000,
    nav:false,
    dots:false,
    items:4,
    responsive:{
        0:{
            items:1
        },
        720:{
            items:2
        }
    }
})