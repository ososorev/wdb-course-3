function start() {

    forms.header("header","SUPER NOTEBOOK");
    document.querySelector('.header').id = 'header';	

    forms.formElement("class1", "class2", header,"form");

    forms.inputElement("Username","user","text","input",form);
    forms.inputElement("Password","Password","password","input",form);
    forms.inputElement("Pass_con","Pass_con","password","input",form);
    forms.inputElement("Email", "Email", "Email","input",form);

    forms.buttonElement("Submit","Login",send,form,'Login');
    Login.classList.add("register");

    forms.footer("footer","Copyright by ..., 2016");
    document.querySelector('.footer').id = 'footer';
    footer.classList.add('mt-auto');
    footer.classList.add('py-3');

};