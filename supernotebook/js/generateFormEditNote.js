/**
 * Created by olga.mikhaylova on 23.11.2019.
 */

(function() {
    App.generateFotmEditNote =
        function generateFotmEditNote() {
            let form = App.ObjectForm;
            form.addClassToForm("note_form flexContainer column");
            form.addInputToForm('text', 'note_name', "Note_name");
            form.addInputToForm('text', 'password', 'Password');
            form.addInputToForm('password', 'confirmPass', 'Confirm password');
            form.addDivErrorsToForm('error_password');
            form.addInputToForm('email', 'email', 'Email');
            form.addDivErrorsToForm('error_email');
            form.addButton('Register', "register", App.sendRegFormAjax);
            form.addFormToPage(".registration");
        }
})();