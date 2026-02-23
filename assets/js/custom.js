document.addEventListener("DOMContentLoaded", function() {
    toastr.options = {
        positionClass: "toast-top-right",
        closeButton: true,
        progressBar: true,
    };
    const form = document.getElementById("contactMail");
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lcm0hosAAAAAPFeuKRDfgGF4Ajr9bcCCbD7LR-3', {
                action: 'contact_form'
            }).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;

                const formData = new FormData(form);
                fetch("contactMail.php", {
                        method: "POST",
                        body: formData,
                    })
                    .then((res) => res.json())
                    .then((data) => {
                        if (data.status === "success") {
                            toastr.success("Your enquiry has been sent successfully!");
                            form.reset();
                            setTimeout(() => {
                                window.location.href = "thankyou.php";
                            }, 1500);
                        } else {
                            toastr.error(data.message || "Something went wrong!");
                        }
                    })
                    .catch((err) => {
                        toastr.error("Network error!");
                    });
            });
        });
    });
});