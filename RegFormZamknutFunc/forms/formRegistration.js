(function() {
    App.generateRegForm =
        function generateRegForm() {
            let form = App.ObjectForm;                                                                                  // создаем переменную куда закидываем тело страницы
            form.addDivRowHeader();
            form.addDivHeader();
            form.addRowBody();
            form.addInputToForm('text', 'username', "Username");
            form.addDivErrorsToForm('error_username');                                                        //создаем форму ошибки имени
            form.addInputToForm('password', 'password', 'Password');
            form.addInputToForm('password', 'confirmPass', 'Confirm password');
            form.addDivErrorsToForm('error_password');                                                        //создаем форму ошибки для пароля
            form.addInputToForm('email', 'email', 'Email');
            form.addDivErrorsToForm('error_email');                                                           //создаем форму ошибки дл e-mail
            form.addDivSuccess('success');
            form.addButton('Register', "register", App.registrationAjax);
            form.addRowFooter();
            form.addDivFooter();
            form.addFormToPage(".contBody");                                                                     //добавление формы на страницу, т.е. закидывается по классу который прописан в register.php
        }
})();