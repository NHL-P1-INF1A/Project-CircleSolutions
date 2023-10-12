document.addEventListener('scroll', () => {
    const nav = document.querySelector('nav');
    
        nav.classList.add('scrolled');
        nav.style.position = "relative";
})