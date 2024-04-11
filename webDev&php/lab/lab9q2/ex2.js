
let name = document.getElementById("name");
let dob = document.getElementById("dob");


// Function to check if a string is empty
function isEmpty(str) {
  return !str.trim();
}



const form = document.getElementById('form');

function validateForm() {


    if (isEmpty(name.value)) {

        window.alert("Name cannot be empty");
    } 

    if (isEmpty(dob.value)) {

        window.alert("Date of Birth cannot be empty");
    }




}

submit.addEventListener('click', (event) => {



    if (validateForm()) {

        event.preventDefault();
        console.log("has empty fields");
    }
});