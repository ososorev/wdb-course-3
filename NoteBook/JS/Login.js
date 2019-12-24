function start() {
    let Container = document.createElement("div");
    document.body.append(Container);

    forms.frame("header", "SUPER NOTEBOOK", Container);

    let elementContent = document.createElement("div");
    Container.append(elementContent);

    let form = document.createElement("form");
    elementContent.append(form);

    forms.inputElement("Username","user","name",form);
    forms.inputElement("Password","psw","password",form);

    forms.buttonElement("Submit","Login",send,form);
    forms.buttonElement("Button","Registration",registr,form);

    forms.frame("footer", "Copyright by ..., 2016", Container);
};
