//<----- HEADER CHANGE COLOR  ----->//

window.addEventListener('scroll', function () {
    let header = document.getElementById('header');
    header.classList.toggle('sticky', window.scrollY > 0);
})

//<----- HEADER MENU TOGGLE ----->//

function menuToggle() {
    // Vars //
    let hamburgerMenu = document.getElementById('hamburger');
    let header = document.getElementById('header');
    let navbar = document.getElementById('navbar');
    // Toggle Class List + Add Class List //
    hamburgerMenu.classList.toggle('active');
    header.classList.toggle('clicked');
    navbar.classList.toggle('move-in');
    navbar.classList.add('move-out');
}


