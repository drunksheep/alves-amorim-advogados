export function toggleHeader() {

    const isHome = window.helpers.is_home;

    let yOffset = pageYOffset;
    let masthead = document.getElementById('masthead');
    let logo = document.getElementById('header-logo') as HTMLImageElement;


    if (!masthead || isHome === '' || !logo ) return

    if (yOffset > 75 && isHome !== '') {
        masthead?.classList.add('scrolled');
        logo.src = `${window.helpers.theme_image_dir}/logo-black.svg`;
    } else {
        masthead.classList.remove('scrolled');
        logo.src = `${window.helpers.theme_image_dir}/logo.svg`;
    }
}
