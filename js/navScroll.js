document.addEventListener('scroll', () => {
    const bannerArrowDown = document.querySelector('.banner_arrow_down');
    const nav = document.querySelector('nav');
    if (window.scrollY > 0) {
        bannerArrowDown.classList.add('scrolled');
        nav.classList.add('scrolled');
    } else {
        bannerArrowDown.classList.remove('scrolled');
        nav.classList.remove('scrolled');
    }
})