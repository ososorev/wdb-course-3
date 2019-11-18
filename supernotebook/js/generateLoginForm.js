let form = ObjectForm;

form.addClassToForm("login_form flexContainer column")
form.addInputToForm('text', 'username', "Username");
form.addDivErrorsToForm('error_username');
form.addInputToForm('password', 'password', 'Password');
form.addDivErrorsToForm('error_password');
form.addButton('Login', 'login', sendLoginFormAjax);
form.addFormToPage(".login");

