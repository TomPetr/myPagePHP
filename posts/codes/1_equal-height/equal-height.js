function columnHeightFx() {
    var posts = document.getElementById("app");
    var columns = posts.querySelectorAll("article");
    var columnsH = [];
    var heights;
    var maxH = "auto";
    // resets height of each culumn to its auto height
    postStyles(columns, maxH);

    for (var i = 0; i < columns.length; ++i) {
        heights = columns[i].getBoundingClientRect().height;
        columnsH.push(heights); // storing the height of all columnts in the array postH
    }
    // What is the maximum height?
    // http: //www.jstips.co/en/javascript/calculate-the-max-min-value-from-an-array/
    maxH = (Math.max.apply(null, columnsH)) + ("px");
    // sets each column's height to the height of tallest column
    postStyles(columns, maxH);
}
// setting the same height for each column     
function postStyles(columns, maxH) {
    for (var j = 0; j < columns.length; ++j) {
        columns[j].style.height = maxH;
    }
}
window.addEventListener('load', columnHeightFx, false);
window.addEventListener('resize', columnHeightFx, false);