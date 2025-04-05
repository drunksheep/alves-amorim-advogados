import { Autoplay } from 'swiper/modules';
import { swiperFactory } from './carousel';
import './style.css';


window.addEventListener('load', function () {
    const wpVars = window.helpers;

    wpVars &&
        console.log(wpVars);

    const customerSwiper = this.document.querySelector('.customer-swiper') as HTMLElement;

    customerSwiper &&
        swiperFactory(customerSwiper, {
            loop: false,
            spaceBetween: "32px",
            slidesPerView: 3.3,
        })

    const brandSwiper = this.document.querySelector('.brand-swiper') as HTMLElement;

    brandSwiper &&
        swiperFactory('.brand-swiper', {
            loop: true,
            slidesPerView: 'auto',
            centeredSlides: false,
            spaceBetween: 20,
            speed: 6000, // long duration for slow movement
            autoplay: {
              delay: 0, // no delay between transitions
              disableOnInteraction: false,
              pauseOnMouseEnter: false,
            },
            allowTouchMove: false, // optional: disable user dragging
            modules: [Autoplay],
        });

})

