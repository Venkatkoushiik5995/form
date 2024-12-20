$(document).ready(function () {
    // Real-time email validation
    $("#email").on("input", function () {
        const email = $(this).val();
        const pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!email.match(pattern)) {
            $(this).css("border", "1px solid red");
        } else {
            $(this).css("border", "1px solid green");
        }
    });

    // Phone number validation
    $("#phone").on("input", function () {
        const phone = $(this).val();
        const pattern = /^[0-9]{10}$/;
        if (!phone.match(pattern)) {
            $(this).css("border", "1px solid red");
        } else {
            $(this).css("border", "1px solid green");
        }
    });

    // Form submission confirmation
    $("#registrationForm").on("submit", function () {
        alert("Form submitted successfully!");
    });
});
