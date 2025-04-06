import { swiperFactory } from './carousel';
import { mobileHeader, toggleHeader } from './header';
import buildHeadingList from './images/toc';
import './style.css';

window.addEventListener('load', function () {
    const wpVars = window.helpers;

    wpVars &&
        console.log(wpVars);


        
    mobileHeader();

    const customerSwiper = this.document.querySelector('.customer-swiper') as HTMLElement;

    customerSwiper &&
        swiperFactory(customerSwiper, {
            loop: false,
            slidesPerView: 1.2,
            spaceBetween: "10px",
            breakpoints: {
                1025: {
                    slidesPerView: 3.3,
                    spaceBetween: "32px",
                }
            }
        })

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