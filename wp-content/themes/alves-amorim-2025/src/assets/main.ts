import { Autoplay } from 'swiper/modules';
import { swiperFactory } from './carousel';
import { toggleHeader } from './header';
import buildHeadingList from './images/toc';
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

    this.addEventListener('scroll', toggleHeader);

    const container = document.querySelector('#single-content') as HTMLElement;
    const sidebar = document.querySelector('#sidebar')


    if (container && sidebar) {
        const toc = buildHeadingList(container);

        const sharer = sidebar.querySelector('.sharer');
        if (sharer) {
          sharer.before(toc);
        } else {
          sidebar.appendChild(toc); // fallback
        }
        

        const tocLinks = sidebar.querySelectorAll('li[data-id]');

        // Observer for scroll-based activation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const id = entry.target.id;
                tocLinks.forEach(li => {
                    if (li.getAttribute('data-id') === id) {
                        li.setAttribute('data-active', entry.isIntersecting ? 'true' : 'false');
                    } else if (entry.isIntersecting) {
                        li.removeAttribute('data-active');
                    }
                });
            });
        }, { rootMargin: '240px 0px -80% 0px', threshold: 1.0 });

        container.querySelectorAll('h1, h2, h3, h4, h5, h6').forEach(heading => observer.observe(heading));

        // Click to set active manually
        tocLinks.forEach(li => {
            li.addEventListener('click', () => {
                tocLinks.forEach(l => l.removeAttribute('data-active'));
                li.setAttribute('data-active', 'true');
            });
        });
    }

});