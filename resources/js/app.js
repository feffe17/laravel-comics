import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const navBtn = document.getElementById("navBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    navBtn.addEventListener("click", function () {
        mobileMenu.classList.toggle("active");
    });

    // Chiudere il menu quando si clicca fuori o su un elemento
    mobileMenu.addEventListener("click", function (event) {
        if (event.target.tagName === "LI" || event.target === mobileMenu) {
            mobileMenu.classList.remove("active");
        }
    });
});