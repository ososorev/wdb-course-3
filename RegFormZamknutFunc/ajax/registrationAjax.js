(function() {
    App.registrationAjax = function registrationAjax(event) {
        event.preventDefault();
        errors();
        fetch("validationForm/checkConnectRegistration.php", {
            method: "POST", body: new FormData(document.querySelector('.registration_form'))
        })
            .then(response => response.json())
            .then(errors => {
                if (!errors.error) {
                    document.querySelector('.registration_result').innerHTML = "Вы зарегестрированы!";
                    setTimeout('location.replace("login.php")', 3000);
                } else {
                    if (errors.error_username) {
                        document.querySelector('.error_username').innerHTML = errors.error_username
                    }
                    if (errors.error_password) {
                        document.querySelector('.error_password').innerHTML = errors.error_password
                    }
                    if (errors.error_email) {
                        document.querySelector('.error_email').innerHTML = errors.error_email
                    }
                }
            });
    }
})();