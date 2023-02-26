window.addEventListener('DOMContentLoaded', function () {

    //hamburger trigger
    try {
        let hamburger = document.getElementById('hamburgerTrigger');
        if(hamburger) {
            let span = hamburger.querySelector('span');

            hamburger.addEventListener('click', function () {
                let hamburgerStatus = hamburger.getAttribute('aria-expanded');
                if(hamburgerStatus == 'false') {
                    span.innerHTML = '☰';
                    span.style.fontSize = '';

                } else {
                    span.innerHTML = '&times;';
                    span.style.fontSize = '16px';
                    span.style.lineHeight = '100%';
                }
            })
        }
    } catch (e) {
        console.log('hamburger error ', e);
    }

    try {
        //testimonials swiper
        let pageSwiperTestimonials = document.querySelector('.hb-swiper-testimonials');
        if (pageSwiperTestimonials) {
            const swiper = new Swiper('.hb-swiper-testimonials', {
                // Optional parameters
                loop: true,
                clickable: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            });
        }
    } catch (e) {
        console.log('testimonials swiper error ', e);
    }

    try {
        //featured products swiper
        let featuredProductsSwiper = document.querySelector('.hb-swiper-featured-products');
        if (featuredProductsSwiper) {
            const swiper = new Swiper('.hb-swiper-featured-products', {
                // Optional parameters
                clickable: true,
                slidesPerView: 5,
                spaceBetween: 15,

                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 1,
                        // spaceBetween: 20
                    },
                    // when window width is >= 480px
                    480: {
                        slidesPerView: 2,
                        // spaceBetween: 20
                    },
                    // when window width is >= 640px
                    640: {
                        slidesPerView: 3,
                        // spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 4
                        // spaceBetween: 20
                    }
                },

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            });
        }
    } catch (e) {
        console.log('featured products swiper error ', e);
    }
});