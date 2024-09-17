/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/JavaScript.js to edit this template
 */


function validateForm() {
    const bookName = document.getElementById('book_name').value;
    const author = document.getElementById('author').value;
    const publisher = document.getElementById('publisher').value;
    const price = document.getElementById('price').value;
    const category = document.getElementById('category').value;

    if (bookName.length < 3) {
        alert("Book name must be at least 3 characters long.");
        return false;
    }
    if (author === "" || publisher === "") {
        alert("Author and Publisher are required.");
        return false;
    }
    if (price <= 0) {
        alert("Price must be a positive number.");
        return false;
    }
    if (category === "") {
        alert("Category is required.");
        return false;
    }
    return true;
}
function showForm(formId) {
    // Hide the main menu
    document.getElementById('main-menu').style.display = 'none';
    document.getElementById('about').style.display = 'none';

    // Hide all form containers
    let forms = document.querySelectorAll('.form-container');
    forms.forEach(form => {
        form.style.display = 'none';
    });

    // Hide the bookList div if it's visible
    let bookList = document.getElementById('bookList');
    bookList.style.display = 'none'; // Ensure bookList is hidden
    bookList.innerHTML = ''; // Clear previous content (optional)

    // Show the selected form if it's not the display form
    if (formId === 'displayForm') {
        displayBooks(); // Fetch and display new data
    } else {
        document.getElementById(formId).style.display = 'block'; // Show the selected form
    }
}


// Function to go back to the main menu
function goBackToMenu() {
    // Hide all forms
    let forms = document.querySelectorAll('.form-container');
    forms.forEach(form => {
        form.style.display = 'none';
    });

    // Show the main menu
    document.getElementById('main-menu').style.display = 'flex';
    
    document.getElementById('about').style.display = 'block';

    // Clear the display books content when going back to menu
    document.getElementById('bookList').innerHTML = '';
}

// Function to make an AJAX call to fetch and display books
function displayBooks() {
        
    document.getElementById('main-menu').style.display = 'none';
    document.getElementById('about').style.display = 'none';
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "BookServlet", true); // Assuming you're using BookServlet to handle this
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    let forms = document.querySelectorAll('.form-container');
    forms.forEach(form => {
        form.style.display = 'none'; // Hide each form
    });

    xhr.onload = function () {
        if (xhr.status === 200) {
            // Update the bookList div with the response from the server
            let bookList = document.getElementById('bookList');
            bookList.innerHTML = xhr.responseText;

            // Create a "Back to Menu" button and append it to the bookList div
            let backButton = document.createElement('button');
            backButton.textContent = "Back";
            backButton.onclick = goBackToMenu;
            backButton.className="bbutton";

            // Append the back button to the bookList
            bookList.appendChild(backButton);
            
            // Ensure the book list is visible
            bookList.style.display = 'block';
        } else {
            alert("Error fetching book list. Status: " + xhr.status);
        }
    };

    // Send the request with action=display
    xhr.send("action=display");
}
