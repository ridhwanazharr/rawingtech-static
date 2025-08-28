$(document).ready(function () {
    $("#contactForm").on("submit", function (e) {
        e.preventDefault(); // prevent reload

        var form = $(this);
        var formData = form.serialize(); // serialize input values
        var dialog = $("#form-dialog");

        dialog.html(`<div class="message-container"><div class="loading-spinner"></div></div>`);

        setTimeout(function() { 
            $.ajax({
                url: "submit.php",
                type: "POST",
                data: formData,
                success: function (response) {
                    dialog.html(`${response}`);
                    form[0].reset(); // reset form
                },
                error: function () {
                    dialog.html(`<div class="alert error">Something went wrong. Try again.</div>`);
                }
            });
        }, 5000);
    });
});
