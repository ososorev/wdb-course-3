function sendLoginFormAjax(event) {
    event.preventDefault();
    removeLoginErrors();
    fetch("getLoginData.php", {method: "POST", body: new FormData(document.querySelector('.login_form')), credentials: 'include'})
        .then(response => response.json())
        .then(errors => {
            if(!errors.error){
                location.replace("notebook.php")
            }
            else {
                if (errors.error_username) {
                    document.querySelector('.error_username').innerHTML = errors.error_username
                }
                if (errors.error_password) {
                    document.querySelector('.error_password').innerHTML = errors.error_password
                }
            }
        });
}
