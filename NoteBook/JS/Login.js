function start() {
    forms.header("header","SUPER NOTEBOOK");
    document.querySelector('.header').id = 'header';	
    

    forms.formElement("class1", "class2", header,"form");


    forms.inputElement("Username","user","name","input",form);


    forms.inputElement("Password","psw","password","input",form);

    forms.buttonElement("Submit","Login",send,form,'Login');
    Login.classList.add("register");

    forms.buttonElement("Button","Registration",registr,form,'Registr');
    Registr.classList.add("register");

    forms.footer("footer","Copyright by ..., 2016");
    document.querySelector('.footer').id = 'footer';
    footer.classList.add('mt-auto');
    footer.classList.add('py-3');
   
};
