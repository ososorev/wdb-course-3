(function() {
    App.sendRegFormAjax =
        function sendRegFormAjax(event) {
            event.preventDefault();
            removeErrors();
            fetch("php/getFormData.php", {method: "POST", body: new FormData(document.querySelector('.registration__form'))})
               .then(response => response.json())
               .then(errors => {
                   if(!errors.error){
                       document.querySelector('.registration__ok').innerHTML = "Регистрация прошла успешно! Вы будете перенаправлены на страницу авторизации";
                       setTimeout('location.replace("index.php")', 3000);
                   }
                   else {
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
