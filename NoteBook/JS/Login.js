function start() {
    forms.header("header", "header", "header","header","SUPER NOTEBOOK");
    

    forms.formElement("class1", "class2", header,"form");


    forms.inputElement("Username","user","name","input","z",'z',form);


    forms.inputElement("Password","psw","password","input","z",'z',form);

    forms.buttonElement("Submit","Login",send,form,'Login');
    Login.classList.add("register");

    forms.buttonElement("Button","Registration",registr,form,'Registr');
    Registr.classList.add("register");

    forms.footer("footer","mt-auto","py-3",'footer', "Copyright by ..., 2016");
};
