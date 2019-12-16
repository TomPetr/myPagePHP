function columnHeightFx() {
    var posts = document.getElementById("posts-wrapper");
    var columns = posts.querySelector("article");
    var columnsH = [];
    var heights;
    var maxH;

    for (var i = 0; i < columns.length; ++i) {
        heights = codesPosts[i].getBoundingClientRect().height;
        columnsH.push(heights); // storing the height of all columnts in the array postH
    }
    // What is the maximum height?
    maxH = (Math.max.apply(null, postH)) + ("px"); // http://www.jstips.co/en/javascript/calculate-the-max-min-value-from-an-array/
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