stylingFx = () => {

    var getImg = document.getElementsByClassName('not-crop');
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
window.addEventListener('load', stylingFx, false);