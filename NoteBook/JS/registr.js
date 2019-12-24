function start() {
    let Container = document.createElement("div");
    Container.classList.add("d-flex");
    Container.classList.add("flex-column");
    Container.classList.add("ch-100");
    document.body.append(Container);

    forms.frame("header", "SUPER NOTEBOOK", Container);

    let elementContent = document.createElement("div");
    Container.append(elementContent);

    let form = document.createElement("form");
    elementContent.append(form);

    forms.inputElement("Username","user","text",form);
    forms.inputElement("Password","Password","password",form);
    forms.inputElement("Pass_con","Pass_con","password",form);
    forms.inputElement("Email", "Email", "Email", form);

    forms.buttonElement("Submit","Login",send,form);

    forms.frame("footer", "Copyright by ..., 2016", Container);
};