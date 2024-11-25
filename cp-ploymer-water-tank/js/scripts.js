// Smooth scroll for internal links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Example: Form validation function
function validateContactForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (name === "" || email === "" || message === "") {
        alert("All fields are required!");
        return false;
    }

    if (!email.includes('@') || !email.includes('.')) {
        alert("Please enter a valid email address!");
        return false;
    }

    return true;
}

// Attach validation to the contact form submit
const contactForm = document.querySelector('form[action="contact-us.php"]');
if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
        if (!validateContactForm()) {
            e.preventDefault();
        }
    });
}
