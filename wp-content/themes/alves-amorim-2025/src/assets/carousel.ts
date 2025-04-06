import SwiperCore from 'swiper/core'; // or from 'swiper' depending on version
import 'swiper/css';
import 'swiper/css/navigation';
import { Swiper, SwiperOptions } from 'swiper/types';

/**
 * @function swiperFactory swiper generator
 * @param selector HTML Element wrapper to start swiper instance
 * @param options  Swiper options (must include `modules` array if using modular build)
 * @returns Swiper instance and options object.
*/
export const swiperFactory = (
  selector: string | HTMLElement,
  options: SwiperOptions
): { instance: Swiper, options: SwiperOptions } => {
  const SwiperClass = (options.modules?.length ? options.modules.reduce((S, mod) => {
    S.use([mod]);
    return S;
  }, SwiperCore) : SwiperCore);

  const instance = new SwiperClass(selector, options);
  return { instance, options };
};
