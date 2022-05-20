load_template = () => {
    var template = window.localStorage.getItem('template');
    if (template === null){
    }else if(template === "light-theme") {
        document.querySelector('body').setAttribute("class", template);
        document.querySelector('.toggle-theme').checked = false;
    }else if(template === "dark-theme") {
        document.querySelector('body').setAttribute("class", template);
        document.querySelector('.toggle-theme').checked = true;
    }
};
load_template();

// Toggle template
const themeSwitch = document.querySelector('.toggle-theme');
const body = document.querySelector('body');
var theme = body.getAttribute("class");
themeSwitch.addEventListener('change', () => {
if (theme === "dark-theme"){
    theme = "light-theme";
    body.setAttribute("class", theme);
    window.localStorage.setItem('template', theme);
}else{
    theme = "dark-theme";
    window.localStorage.setItem('template', theme);
    body.setAttribute("class", theme);
}
});

// Toggle Hamburger
function menuOnClick() {
    document.getElementById("menu-bar").classList.toggle("change");
    document.getElementById("nav").classList.toggle("change");
    document.getElementById("menu-bg").classList.toggle("change-bg");
  }