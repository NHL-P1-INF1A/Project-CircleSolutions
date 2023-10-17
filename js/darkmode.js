const root = document.querySelector(':root');

const basicColors = {
    '--dark-blue': '#799dab',
    '--normal-blue': '#c7eaf8',
    '--light-blue': '#dcf1f9',
    '--light-background': '#EFEFF1',
    '--dark-background': '#1C1C1C',
    '--text-color': '#3C3C43',
    '--white': '#FFFFFF',
    '--black': '#000',
};
  
const darkmodeColors = {
    '--dark-blue': '#000000',
    '--normal-blue': '#000000',
    '--light-blue': '#000000',
    '--light-background': '#000000',
    '--dark-background': '#000000',
    '--text-color': '#000000',
    '--white': '#000000',
    '--black': '#000',
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