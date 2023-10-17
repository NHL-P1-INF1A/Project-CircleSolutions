const root = document.querySelector(':root');

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
    '--header-background': 'linear-gradient(rgba(121, 157, 171, 0.5), rgba(28, 28, 28, 1), rgba(28, 28, 28, 1)), url("/img/headerbackgroundcircles.svg")',
    '--text-color': '#FFFFFF',
    '--white': '#000000',
    '--black': '#FFFFFF',
};

var darkmodeButton = document.querySelector('#darkmode_button');
var isDarkmode = false;

darkmodeButton.addEventListener('change', () => {
    isDarkmode = !isDarkmode;
    if(isDarkmode){
        Object.entries(darkmodeColors).forEach(color => {
            root.style.setProperty(color[0], color[1]); 
        });
    }
    else{
        Object.entries(basicColors).forEach(color => {
            root.style.setProperty(color[0], color[1]);
        });
    }
});