var app = document.getElementById('app');
var viewer = document.getElementById('viewer');

var deck = app.querySelectorAll('#app>article');

var clickedImg;

// **** on LOAD event **** 
loadFx = (ev) => {
    stylingFx();
    viewerSizeFx();
    viewer.querySelector('img').src = deck[0].querySelector('img').src;
    trimViewer(ev);

}
// **** on CLICK event **** 
clickFx = (ev) => {
    clickedThumbFx(ev);
    viewerSizeFx();
    trimViewer(ev);

}
// **** on RESIZE event **** 
resizeFx = (ev) => {

    viewerSizeFx();
    trimViewer(ev);

}

// 

// **** styles each thumb **** 
stylingFx = () => {

    var getImg = document.querySelectorAll("article>img");
    var imgWidth;
    var imgHeight;
    // "getImg" is not an array but a HTMLCollection, therefore forEach loop cannot be called on it
    for (var i = 0; i < getImg.length; i++) { // determining whether an img is lanscape, porstrait or square, and then aplying the right CSS
        imgWidth = getImg[i].naturalWidth;
        imgHeight = getImg[i].naturalHeight;
        if (imgWidth > imgHeight) { // landscape
            getImg[i].style.width = '100%';
            getImg[i].style.height = 'auto';
        } else { // portrait
            getImg[i].style.width = 'auto';
            getImg[i].style.height = '150px';

        }
    }

}




// ****  When user clicks on the thumb  ****
function clickedThumbFx(ev) {
    // determines what "img" was clicked on => which img to place to the viewer
    if (event.target.parentElement.tagName == "FIGURE") {
        return; // terminate function if img in the viewer was clicked
    } else if ((ev.target.tagName == "ARTICLE") || (ev.target.tagName == "IMG")) {
        // continuue function only if clicked on "article" or "img" elements
        // determining if "article" elemnt what clicked on
        // and placing it to the viewer
        if (ev.target.tagName == "ARTICLE") {
            clickedImg = ev.target.querySelector('img').src;
        } else {
            clickedImg = ev.target.src;
        }
        // place  clicked img to the viewer


        viewer.querySelector('img').src = clickedImg;

    } else {
        return; // terminate function if click occures happens outside of "article" or "img" elements
    }
}


// ****IMAGE VIEWER- sizing of main cotainer ****
function viewerSizeFx() { // determines viewer's height based on browser window sizes 
    var viewerHeight;
    var viewPortHeight;
    if (screen.height <= 700 || screen.width <= 500) { // Viewer should take more space on small screen
        viewPortHeight = screen.height; // 'screen.height' on tablets doesn't change when scrolling, 'window.innerHeight' does.
        viewerHeight = Math.floor(viewPortHeight * 0.7); // Viewer's height 
    } else {
        viewPortHeight = window.innerHeight; // Viewer should take less space on bigger screen
        viewerHeight = Math.floor(viewPortHeight * 0.6); // Viewer's height 
    }

    viewer.style.height = viewerHeight + "px";



}

// **** trimming the Viever **** 
function trimViewer(ev) { // determines right CSS properties for displayed img based on its and viewer window's propoetions
    // if (ev.type == 'resize') { // upon resizing, the viewport changes => viewer window sizes have to be recalculated

    //     viewerSizeFx();
    // }
    var viewImg = document.querySelector('#viewer>img'); // grabbing img's element displayed in the viewer


    var imgNatW = viewImg.naturalWidth;
    var imgNatH = viewImg.naturalHeight;
    var viewerWidth = viewer.getBoundingClientRect().width; // getting viewer's <figure>'s dimensions
    var viewerHeight = viewer.getBoundingClientRect().height;
    // determing right CSS values for displayed image, depending on img's and viewer's proportions
    var viewerProportions = viewerWidth / viewerHeight;
    var imgProportions = imgNatW / imgNatH;
    if (viewerProportions < 1) { // portrait viewer window
        if (imgProportions < viewerProportions) {
            viewImg.style.width = "auto";
            viewImg.style.height = "100%";
        } else if (imgProportions > viewerProportions) {

            viewImg.style.width = "100%";
            viewImg.style.height = "auto";
            viewer.style.height = viewImg.height + "px";
            // not letting viewer's img to overflow (9.6px = 2 x 0.3rem)  [1rem = 16px] padding on each side = 0.3rem


            var newImgH = Math.floor(viewImg.height - 9.6);
            // img's styles have to be reset
            viewImg.style.height = newImgH + "px";
            viewImg.style.width = "auto";

        } else { // both viewer & image have the same width / height ratio
            viewImg.style.width = "100%";
            viewImg.style.height = "auto";
        }
    }
    if (viewerProportions > 1) // landscape viewer window
        if (imgProportions < viewerProportions) {
            viewImg.style.width = "auto";
            viewImg.style.height = "100%";
        }
    else if (imgProportions > viewerProportions) {
        viewImg.style.width = "100%";
        viewImg.style.height = "auto";

        viewer.style.height = viewImg.height + "px";
        // not letting viewer's img to overflow (9.6px = 2 x 0.3rem)  [1rem = 16px] padding on each side = 0.3rem


        var newImgH = Math.floor(viewImg.height - 9.6);
        // img's styles have to be reset
        viewImg.style.height = newImgH + "px";
        viewImg.style.width = "auto";





    } else { // both viewer & image have the same width / height ratio
        viewImg.style.width = "100%";
        viewImg.style.height = "auto";

    }
    if (viewerProportions == 1) { // square viewer window

        if (imgProportions > 1) {

            viewImg.style.width = "100%";
            viewImg.style.height = "auto";
            viewer.style.height = viewImg.height + "px";
            // not letting viewer's img to overflow (9.6px = 2 x 0.3rem)  [1rem = 16px] padding on each side = 0.3rem


            var newImgH = Math.floor(viewImg.height - 9.6);
            // img's styles have to be reset
            viewImg.style.height = newImgH + "px";
            viewImg.style.width = "auto";
        } else if (imgProportions < 1) {

            viewImg.style.width = "auto";
            viewImg.style.height = "100%";

        } else { // both viewer & image have the same width / height ratio

            viewImg.style.width = "100%";
            viewImg.style.height = "auto";
            viewer.style.height = viewImg.height + "px";
            // not letting viewer's img to overflow (9.6px = 2 x 0.3rem)  [1rem = 16px] padding on each side = 0.3rem


            var newImgH = Math.floor(viewImg.height - 9.6);
            // img's styles have to be reset
            viewImg.style.height = newImgH + "px";
            viewImg.style.width = "auto";





        }
    }
}

app.addEventListener('click', (event) => {
    clickFx(event);
}, false);

window.addEventListener('load', (event) => {
    loadFx(event);
}, false);
window.addEventListener('resize', (event) => {
    resizeFx(event);
})