let form={};
let formFieldset={};
let fieldsetLegend={};
let inputEmailWrapper={};
let inputEmail={};
let inputEmailValidate={};
let formButton={};
let signInOffer={};
let signInOfferReference={};

function createFormResetPassword(event){
    event.preventDefault();
    clearMain();
    // main.append(createForm());
    form.create(document.querySelector("main"));
    formFieldset.create(document.querySelector("form"));
    fieldsetLegend.create(document.querySelector("fieldset"));
    inputEmailWrapper.create(document.querySelector("fieldset"));
    inputEmail.create(document.querySelector(".emailWrapper"));
    inputEmailValidate.create(document.querySelector(".emailWrapper"));
    formButton.create(document.querySelector("fieldset"));
    signInOffer.create(document.querySelector("form"));
    signInOfferReference.create(document.querySelector(".signInOffer"));
    
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms,resetPasswordSubmitClickHandler);
}

function resetPasswordSubmitClickHandler(form){
    form.addEventListener('submit', function(event){
        event.preventDefault();
        if (form.checkValidity() === false) {
              event.stopPropagation();
            }
        else{
            var formData = new FormData(form);
            var myInit = {
                method: 'POST',
                body: formData
            }
            fetch('../php/signUp.php', myInit)
                .then(function(response){return response.text();})
                .then(function(result){document.getElementsByTagName('body')[0].innerHTML = result;});
        }
        form.classList.add('was-validated');
    }, false);
}

(function (module) {
    module.create = create;
    
    function create(target) {
        let content = create_markup();
        append_styles(content);
        target.append(content);
    }
    
    function create_markup() {
        return document.createElement("form");
    }
    
    function append_styles(content) {
        content.classList.add("mx-auto","py-4","mb-4","bg-white","shadow-sm","rounded","needs-validation");
        content.style="max-width:700px";
        content.noValidate="true";
        content.action="";
        content.method="post";
    }
} (form));

(function (module) {
    module.create = create;
    
    function create(target) {
        let content = create_markup();
        append_styles(content);
        target.append(content);
    }
    
    function create_markup() {
        return document.createElement("fieldset");
    }
    
    function append_styles(content) {
        content.classList.add("mb-4","mx-auto","text-center");
        content.style="max-width:300px";
    }
} (formFieldset));

(function (module) {
    module.create = create;
    
    function create(target) {
        let content = create_markup();
        content.innerHTML="Восстановление пароля";
        append_styles(content);
        target.append(content);
    }
    
    function create_markup() {
        return document.createElement("legend");
    }
    
    function append_styles(content) {
        content.classList.add("mb-4");
    }
} (fieldsetLegend));

(function (module) {
    module.create = create;
    
    function create(target) {
        let content = create_markup();
        append_styles(content);
        target.append(content);
    }
    
    function create_markup() {
        return document.createElement("div");
    }
    
    function append_styles(content) {
        content.classList.add("form-group","emailWrapper");
    }
} (inputEmailWrapper));

(function (module){
    module.create=create;

    function create(target){
        let content=create_markup();
        append_styles(content);
        target.append(content);
    }

    function create_markup(){
        return document.createElement("input");
    }

    function append_styles(content){
        content.classList.add("form-control")
        content.type="email";
        content.placeholder="Email";
        content.id="email";
        content.name="email";
        content.required="true";
    }
}(inputEmail));

(function (module){
    module.create=create;

    function create(target){
        let content=create_markup();
        content.innerHTML = "Введите email";
        append_styles(content);
        target.append(content);
    }

    function create_markup(){
        return document.createElement("div");
    }

    function append_styles(content){
        content.classList.add("invalid-feedback","text-left")
    }
}(inputEmailValidate));

(function (module){
    module.create=create;

    function create(target){
        let content=create_markup();
        content.innerHTML = "Сбросить пароль";
        append_styles(content);
        target.append(content);
    }

    function create_markup(){
        return document.createElement("button");
    }

    function append_styles(content){
        content.classList.add("btn","btn-block","btn-custom-primary","mb-3")
        content.type="submit";
    }
}(formButton));

(function (module){
    module.create=create;

    function create(target){
        let content=create_markup();
        content.innerHTML = "Уже имеете аккаунт? ";
        append_styles(content);
        target.append(content);
    }

    function create_markup(){
        return document.createElement("div");
    }

    function append_styles(content){
        content.classList.add("text-center","signInOffer");
    }
}(signInOffer));

(function (module){
    module.create=create;

    function create(target){
        let content=create_markup();
        content.innerHTML = "Выполните вход";
        append_styles(content);
        target.append(content);
    }

    function create_markup(){
        return document.createElement("a");
    }

    function append_styles(content){
        content.classList.add("text-custom-primary");
        content.href="../html/signIn.html";
    }
}(signInOfferReference));
