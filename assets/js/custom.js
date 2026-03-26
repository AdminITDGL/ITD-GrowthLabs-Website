/**
 * Resolves contactMail.php / thankyou.php to the site root from any folder
 * (industries/, services/, lp/, uae/, etc.).
 */
function getSiteRootFileUrl(filename) {
    var baseEl = document.getElementsByTagName("base")[0];
    if (baseEl && baseEl.href) {
        try {
            return new URL(filename, baseEl.href).href;
        } catch (e) {}
    }
    var parts = window.location.pathname.split("/").filter(Boolean);
    var idx = parts.lastIndexOf("GROWTHLAB_STATIC");
    if (idx !== -1) {
        return (
            window.location.origin +
            "/" +
            parts.slice(0, idx + 1).join("/") +
            "/" +
            filename
        );
    }
    var si = parts.indexOf("services");
    if (si !== -1) {
        var prefix = parts.slice(0, si).join("/");
        return (
            window.location.origin +
            (prefix ? "/" + prefix : "") +
            "/" +
            filename
        );
    }
    try {
        var depth = Math.max(0, parts.length - 1);
        var up = "";
        for (var i = 0; i < depth; i++) {
            up += "../";
        }
        return new URL(up + filename, window.location.href).href;
    } catch (e2) {
        return filename;
    }
}

window.getSiteRootFileUrl = getSiteRootFileUrl;

document.addEventListener("DOMContentLoaded", function () {
    toastr.options = {
        positionClass: "toast-top-right",
        closeButton: true,
        progressBar: true,
    };
    var form = document.getElementById("contactMail");
    if (!form) {
        return;
    }
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        grecaptcha.ready(function () {
            grecaptcha
                .execute("6Lcm0hosAAAAAPFeuKRDfgGF4Ajr9bcCCbD7LR-3", {
                    action: "contact_form",
                })
                .then(function (token) {
                    var recaptchaField = document.getElementById("g-recaptcha-response");
                    if (recaptchaField) {
                        recaptchaField.value = token;
                    }

                    var formData = new FormData(form);
                    var mailUrl = getSiteRootFileUrl("contactMail.php");
                    fetch(mailUrl, {
                        method: "POST",
                        body: formData,
                    })
                        .then(function (res) {
                            return res.json();
                        })
                        .then(function (data) {
                            if (data.status === "success") {
                                toastr.success("Your enquiry has been sent successfully!");
                                form.reset();
                                setTimeout(function () {
                                    window.location.href = getSiteRootFileUrl("thankyou.php");
                                }, 1500);
                            } else {
                                toastr.error(data.message || "Something went wrong!");
                            }
                        })
                        .catch(function () {
                            toastr.error("Network error!");
                        });
                });
        });
    });
});
