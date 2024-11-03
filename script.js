function validateEmail() {
    const emailInput = document.getElementById('email').value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!emailPattern.test(emailInput)) {
        alert("Please enter a valid email address.");
    } else {
        alert("Thank you for providing a valid email!");
    }
}