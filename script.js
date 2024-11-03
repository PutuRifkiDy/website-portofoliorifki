function validateEmail() {
    const emailInput = document.getElementById('email').value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!emailPattern.test(emailInput)) {
        alert("Please enter a valid email address.");
    } else {
        alert("Thank you for providing a valid email!");
    }
}

// fungsi untuk navbar saat tampilan mobile
document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.getElementById("hamburger");
    const navbar = document.querySelectorAll(".nav");

    hamburger.addEventListener("click", function() {
        navbar.forEach(nav => {
            nav.classList.toggle("active");
        });
    });
});