function sendToServer(event) {
    event.preventDefault();
    removeErrors();
    fetch("getFormData.php", {method: "POST", body: new FormData(document.forms[0])})
       .then(response => response.json())
       .then(errors => {
           if(!errors.error){
               document.querySelector('.registration__ok').innerHTML = "Регистрация прошла успешно!";
               document.querySelector('.registration__form').reset();
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
