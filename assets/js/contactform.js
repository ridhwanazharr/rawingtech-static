document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const form = this;
    const btn = form.querySelector("button[type=submit]");
    btn.disabled = true;
    btn.innerText = "Sending...";

    // Honeypot check
    if (form.website.value) {
        return;
    }

    emailjs.sendForm("service_1hgbjkr", "template_68ac4om", {
        name: this.name.value,
        email: this.email.value,
        message: this.message.value,
        time_sent: new Date().toLocaleString()
    })
    .then(function() {
        form.innerHTML = `
            <div class="message-container">
                <div class="alert success">
                    Thank you <strong>${form.name.value}</strong>! I'll reply to your message as soon as possible.
                </div>
            </div>`;
    }, function(error) {
        console.error("Failed...", error);
        form.innerHTML = `
            <div class="message-container">
                <div class="alert error">
                    Message not sent, please try again later.
                </div>
            </div>`;
        // Re-enable button in case of retry
    });
});
