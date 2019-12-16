var imgObj = JSON.parse(imgGal); // creating an object out of 'JSON' string


var app = document.getElementById('app');


generateGal = () => {
    imgObj["images"].forEach((element) => { // creates HTML structure for each img element in an object



        var article = document.createElement('article');

        var img = document.createElement('img');
        img.src = `../../../images/${element["img"]}`; // adding path to src of each img


        article.appendChild(img);

        app.appendChild(article);
    });
    // waiting for all imgs to be loaded to the page
    window.onload = () => { //https://developer.mozilla.org/en-US/docs/Web/API/Window/load_event
        stylingFx(); // when all imgs are loaded, 'stylingFx' can be ran
    };

}




stylingFx = () => {
    var getArt = document.querySelectorAll("article");
    var getImg = document.querySelectorAll("article>img");
    var imgWidth;
    var imgHeight;
    // "getImg" is not an array but a HTMLCollection, therefore forEach loop cannot be called on it

    for (var i = 0; i < getImg.length; i++) { // deciding whether an img is lanscape, porstrait or square, and then aplying the right CSS
        imgWidth = getImg[i].naturalWidth;
        imgHeight = getImg[i].naturalHeight;
        var appWidth = app.getBoundingClientRect().width;

        if (appWidth < 400) {
            getArt[i].style.flex = `0 0 ${appWidth-6}px`;
            getArt[i].style.height = `${appWidth-6}px`;
            getArt[i].style.lineHeight = `${appWidth-6}px`;
            if (imgWidth > imgHeight) { // landscape
                getImg[i].style.width = `${appWidth-6}px`;
                getImg[i].style.height = 'auto';
            } else { // portrait or square
                getImg[i].style.width = 'auto';
                getImg[i].style.height = `${appWidth-6}px`;

            }

        } else {
            if (imgWidth > imgHeight) { // landscape
                getImg[i].style.width = '100%';
                getImg[i].style.height = 'auto';
            } else { // portrait or square
                getImg[i].style.width = 'auto';
                getImg[i].style.height = '400px';

            }

        }
    }
}


generateGal();



window.addEventListener('resize', () => {
    stylingFx()
});