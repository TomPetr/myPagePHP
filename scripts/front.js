let main = document.getElementById('main');
let bars = document.getElementById('bars');
let menu = document.getElementById('menu');
menu.style.display = "none";
hero.style.height = "100vh";

function menuFx() {

    if (menu.style.display == "none") {
        menu.style.display = "block"; // menu becomes visible
        hero.style.height = "auto"; // hero takes over as much space as needed
        if (window.innerWidth >= "912") {
            hero.style.height = "100vh"; // hero stays in the center of viewport- overwriting CSS
        }
    } else {

        menu.style.display = "none"; // menu becomes invisible
        hero.style.height = "100vh"; // hero mover back to the center of viewport

    }

}

function windowResizedFx() {
    if (menu.style.display == "block" && window.innerWidth >= "912") { // when menu is visible && ...
        hero.style.height = "100vh"; // hero moves to the center of viewport when window expadeds from width < 912px to >= 912px
    } else if (menu.style.display == "block" && window.innerWidth < "912") {
        hero.style.height = "auto";
        // hero takes over all needed space in the window when window shrinks from width >= 912px to > 912px
    } else {
        return // exit the function with no action
    }

}
// when clicked on the bars
bars.addEventListener('click', menuFx);
// when the window is resized
window.onresize = windowResizedFx;