let title = document.getElementById("title");
let content = document.getElementById("content");

// Function to check if a string is empty
function isEmpty(str) {
  return !str.trim();
}

const form = document.getElementById('form');

function validateAddPostForm() {
    let isValid = true;

    if (title && isEmpty(title.value)) { // Check if title element exists and is empty
      console.log("title cannot be empty");
      window.alert("Title cannot be empty");
      title.classList.add('highlight'); // Add highlight class to the empty title field
      isValid = false;
  } else {
      title.classList.remove('highlight'); // Remove highlight class if title is not empty
  }
  
  if (content && isEmpty(content.value)) { // Check if content element exists and is empty
      console.log("Content cannot be empty");
      window.alert("Content cannot be empty");
      content.classList.add('highlight'); // Add highlight class to the empty content field
      isValid = false;
  } else {
      content.classList.remove('highlight'); // Remove highlight class if content is not empty
  }

    return isValid;
}

form.addEventListener('submit', (event) => {
    if (!validateAddPostForm()) {
        event.preventDefault(); // Prevent form submission if validation fails
    }
});

function clearForm() {
    document.getElementById("form").reset();
}

let clearButton = document.getElementById("clearButton");

// Add event listener to the button
clearButton.addEventListener("click", function() {
    clearForm();
});


let previewButton = document.getElementById("previewButton");

// Add event listener to the button
previewButton.addEventListener("click", function() {
    previewPost();
});

function previewPost() {

    console.log("Previewing post");

    // Validate the form
    if (validateAddPostForm()) {

            // Get the values of title and content
            var title = document.getElementById('title').value;
            var content = document.getElementById('content').value;
        
            // Set the values in the hidden form fields
            document.getElementById('previewTitle').value = title;
            document.getElementById('previewContent').value = content;
        
            // Submit the form
            document.getElementById('previewForm').submit();
            
    } else {
        console.log("Form validation failed");
    }
}

