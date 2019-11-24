(function(){
    App.startCreatePage=startCreatePage;
    function startCreatePage() {
        forms.divElement("container", document.body);
        forms.headerOrFooterElement("", "SUPER NOTEBOOK", elementContainer);
        forms.divElement("content", elementContainer);
        forms.formElement(elementContent);

        forms.inputElement("Username", "inputUsername", "text", form);
        forms.inputElement("Password", "inputPassword", "password", form);
        forms.inputElement("Confirm password", "inputConfirmPassword", "password", form);
        forms.inputElement("EMail", "inputEMail", "text", form);

        forms.buttonElement(form);

        forms.divElement("output", elementContainer);

        forms.headerOrFooterElement("footer", "Copyright by ..., 2016", elementContainer);
    }
})();