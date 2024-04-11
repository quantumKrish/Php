
let fname = document.getElementById("fname");
let sname = document.getElementById("sname");
let email = document.getElementById("email");
let password = document.getElementById("password");
let cpassword = document.getElementById("cpassword");



// Function to check if a string is empty
function isEmpty(str) {
  return !str.trim();
}



const form = document.getElementById('form');

function validateForm() {

    if (fname) { // Check if fname element exists
        if (isEmpty(fname.value)) {
          console.log("First Name cannot be empty");
          window.alert("First Name cannot be empty");
        }
    }

    if (sname) { // Check if sname element exists
        if (isEmpty(sname.value)) {
          console.log("Second Name cannot be empty");
          window.alert("Second Name cannot be empty");
        }
    }

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


    if (cpassword) { // Check if cpassword element exists
        if (isEmpty(cpassword.value)) {
          console.log("Confirm Password cannot be empty");
          window.alert("Confirm Password cannot be empty");
        }
    }

    if (password && cpassword) { // Check if password and cpassword elements exist
        if (password.value != cpassword.value) {
            console.log("Passwords do not match");
            window.alert("Passwords do not match");
        }
    }
}

submit.addEventListener('click', (event) => {

    if (validateForm()) {
        console.log("Form submitted");

        event.preventDefault();
    }
});