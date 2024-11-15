// Navbar Fixed
const menu = document.getElementById("menu");
const faBars = document.querySelector(".fa-bars");
const navMobile = document.getElementById("navMobile");

menu.addEventListener("click", function (e) {
    faBars.classList.toggle("fa-x");
    navMobile.classList.toggle("hidden");
});
