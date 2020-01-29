function start() {

    forms.header("header", "z", "z","header","SUPER NOTEBOOK");

    forms.formElement("class1", "class2", header,"form");

    forms.inputElement("Username","user","text","input","z",'z',form);
    forms.inputElement("Password","Password","password","input","z",'z',form);
    forms.inputElement("Pass_con","Pass_con","password","input","z",'z',form);
    forms.inputElement("Email", "Email", "Email","input","z",'z',form);

    forms.buttonElement("Submit","Login",send,form,'Login');
    Login.classList.add("register");

    forms.footer("footer","mt-auto","py-3",'footer', "Copyright by ..., 2016");

};