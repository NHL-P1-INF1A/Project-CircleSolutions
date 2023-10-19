document.addEventListener('scroll', () => {
    const bannerArrowDown = document.querySelector('.banner_arrow_down');
    if (window.scrollY > 0) {
        bannerArrowDown.classList.add('scrolled');
    } else {
        bannerArrowDown.classList.remove('scrolled');
    }
})