// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } 
    else {
    navbar.classList.remove("sticky");
  }
}

//Responsive navigation function
function navFunction(){
    
  var signup = document.getElementById("signup");
  var x = document.getElementById("topnav");
    
    if(x.className === "navigation"){
        x.className += " responsive";
        signup.float = "left";
    }
    else{
        x.className = "navigation";
    }
}

// Get the modal
var signup = document.getElementById('id01');
var login = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == signup) {
        modal.style.display = "none";
    }
    else if (event.target == login) {
        modal.style.display = "none";
    }
}