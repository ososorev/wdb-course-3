let form = App.ObjectForm;

form.addClassToForm("registration__form flexContainer column")
form.addInputToForm('text', 'username', "Username");
form.addDivErrorsToForm('error_username');
form.addInputToForm('password', 'password', 'Password');
form.addInputToForm('password', 'confirmPass', 'Confirm password');
form.addDivErrorsToForm('error_password');
form.addInputToForm('email', 'email', 'Email');
form.addDivErrorsToForm('error_email');
form.addButton('Register', "register", sendRegFormAjax);
form.addFormToPage(".registration");

