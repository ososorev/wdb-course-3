(function() {
    App.generateLogin =
        function generateLogin() {
            let form = App.ObjectForm;                                                                                  // создаем переменную куда закидываем тело страницы
            form.addDivRowHeader();
            form.addDivHeader();
            form.addRowBody();
            form.addInputToForm('text', 'username', "Username");
            form.addDivErrorsToForm('error_username');                                                        //создаем форму ошибки имени
            form.addInputToForm('password', 'password', 'Password');
            form.addDivErrorsToForm('error_password');                                                        //создаем форму ошибки для пароля
            form.addDivSuccess('success');
            form.addButton('Login', "login", App.loginAjax);
            form.addRowFooter();
            form.addDivFooter();
            form.addFormToPage(".contBody");                                                                     //добавление формы на страницу, т.е. закидывается по классу который прописан в register.php
        }
})();