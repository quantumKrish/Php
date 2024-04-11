

let email = document.getElementById("email");
let password = document.getElementById("password");




// Function to check if a string is empty
function isEmpty(str) {
  return !str.trim();
}



const form = document.getElementById('form');

function validateLoginForm() {


    if (email) { // Check if email element exists
        if (isEmpty(email.value)) {
          console.log("Email cannot be empty");
          window.alert("Email cannot be empty");
        }
    }
    
    if (password) { // Check if password element exists
        if (isEmpty(password.value)) {
          console.log("Password cannot be empty");
          window.alert("Password cannot be empty");
        }
    }
    
}


submit.addEventListener('click', (event) => {

    if (validateLoginForm()) {
        console.log("Form ====");

        event.preventDefault();
    }
});



function clearForm() {
  document.getElementById("form").reset();
}
