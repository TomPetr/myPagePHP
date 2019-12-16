// ***** CONTACT FORM VALIDATION *****

function validateFormFx(event) {
    // ***** CONTACT FORM VALIDATION *****

    // ** 1) this block of code gets ahold of all form's input elements which are rquired to be filled in
    // These elements have CSS class "req" and the code is testing each form's element for this CSS class
    var formName = event.target.name;

    console.log(formName);



    var allElements = document.forms[formName]['elements']; // HTMLFormControlsCollection of all form's elements
    var allElArray = Array.from(allElements); // converting this collection to an Array
    console.log(allElArray);

    // filtering out all the required elements and saving then in new HTMLcollection object variable
    var reqElements = allElArray.filter(reqEl => {
        // "classList" variable holds array-like object "DOMTokenList", named "classList", list  of all CSS class names of given
        // "reqEl" element
        var classList = reqEl["classList"];

        console.log(classList);
        // looping through all CSS class properties of this "DOMTokenList"
        for (var i = 0; i < classList.length; i++) {
            // if there is a CSS class named 'req' add the element which the class belongns to the "reqElements" array
            if (classList[i] == 'req') {
                return classList;
            }
        }
    });
    console.log(reqElements);
    // ** 2) This part of "validateFormFx" function validates the form if all required fields are filled in & handles the CSS
    // decoration
    // depending on fields's status, if they are filled in or not
    reqElements.forEach((el, index) => {
        // if the required input element has the empty value
        if (el['value'] == "") {
            el.classList.add("req-field"); // adds the red border
            reqElements[index].nextElementSibling.innerHTML = '*'; // place " * " next to that
            reqElements[index].nextElementSibling.style =
                'color: #d50505; vertical-align: top'; // and set its color as red and moves it vertically


            // prevents the page  to be reloaded if any required field is  empty
            event.preventDefault();

            // prevents the form being submitted if any required field is  empty
            return false;
        } else {
            el.classList.remove("req-field"); // // removes the red border
            reqElements[index].nextElementSibling.innerHTML =
                '&#10004;'; // replaces " * " with a check mark
            reqElements[index].nextElementSibling.style =
                'color: green; vertical-align: bottom'; // and set its color as green and moves it vertically


            // it's OK the form is being submitted now
            return true;
        }
    })
}