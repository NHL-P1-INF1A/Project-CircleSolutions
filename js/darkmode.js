const root = document.querySelector(':root');
const darkmodeButtons = document.querySelectorAll('.darkmode_button');

const basicColors = {
    '--dark-blue': '#799dab',
    '--normal-blue': '#c7eaf8',
    '--light-blue': '#dcf1f9',
    '--background': '#EFEFF1',
    '--background-reverse': '#1C1C1C',
    '--about-us-background': '#c7eaf8',
    '--header-background': 'url("../img/headerbackgroundcircles.svg"), linear-gradient(rgba(121, 157, 171, 1), rgba(239, 239, 241, 1), rgba(239, 239, 241, 1))',
    '--text-color': '#3C3C43',
    '--white': '#FFFFFF',
    '--black': '#000000',
};

const darkmodeColors = {
    '--dark-blue': '#799dab',
    '--normal-blue': '#c7eaf8',
    '--light-blue': '#dcf1f9',
    '--background': '#1C1C1C',
    '--background-reverse': '#EFEFF1',
    '--about-us-background': '#799dab',
    '--header-background': 'linear-gradient(rgba(121, 157, 171, 0.5), rgba(28, 28, 28, 1), rgba(28, 28, 28, 1)), url("../img/headerbackgroundcircles.svg")',
    '--text-color': '#FFFFFF',
    '--white': '#000000',
    '--black': '#FFFFFF',
};

function enableDarkMode() {
    Object.entries(darkmodeColors).forEach(color => {
        root.style.setProperty(color[0], color[1]);
    });
    darkmodeButtons.forEach(button => (button.checked = true)); // Sync checkboxes
    localStorage.setItem('darkmode', 'enabled');
}


function disableDarkMode() {
    Object.entries(basicColors).forEach(color => {
        root.style.setProperty(color[0], color[1]);
    });
    darkmodeButtons.forEach(button => (button.checked = false)); // Sync checkboxes
    localStorage.setItem('darkmode', 'disabled');
}

function setDarkModeStatus() {
    const darkModeStatus = localStorage.getItem('darkmode');
    if (darkModeStatus === 'enabled') {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
}

darkmodeButtons.forEach(button => {
    button.addEventListener('change', () => {
        if (button.checked) {
            enableDarkMode();
        } else {
            disableDarkMode();
        }
    });
});

setDarkModeStatus();
