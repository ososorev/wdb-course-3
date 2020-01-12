function start() {

    forms.header("header", "header", "header","header","SUPER NOTEBOOK");

    forms.formElement("class1", "class2", header,"form");

    forms.inputElement("Username","user","text","input","input",'user',form);
    forms.inputElement("Password","Password","password","input","input",'password',form);
    forms.inputElement("Pass_con","Pass_con","password","input","input",'pass_con',form);
    forms.inputElement("Email", "Email", "Email","input","input",'Email',form);

    forms.buttonElement("Submit","Login",send,"register","register",form,'');

    forms.footer("footer","mt-auto","py-3", "Copyright by ..., 2016");
};