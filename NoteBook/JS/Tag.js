
let forms = {};

(function(){
    forms.divElement=divElement;
    function divElement(value, class1,class2,parent,id) {
        let elementDiv = document.createElement("div");
        elementDiv.innerText = value;
        elementDiv.classList.add(class1);
        elementDiv.classList.add(class2);
        elementDiv.id=id;
        parent.append(elementDiv);
    }
    
    forms.formElement=formElement;
    function formElement(class1, class2, parent, id) {
        let form = document.createElement("form");
        form.id=id;
        form.classList.add(class1);
        form.classList.add(class2);
        form.id=id;
        parent.after(form);
    }
    
    forms.inputElement=inputElement;
    function inputElement(placeholder,name, type,class1,parent) {
        let elementInput = document.createElement("input");
        elementInput.placeholder = placeholder;
        elementInput.name = name;
        elementInput.type = type;
        elementInput.classList.add(class1);
        parent.append(elementInput);
    }


    forms.TextElement=TextElement;
    function TextElement(placeholder,name,Text,class1,parent) {
        let elementText = document.createElement("Textarea");
        elementText.placeholder = placeholder;
        elementText.name = name;
        elementText.classList.add(class1);
        elementText.innerText=Text;
        parent.append(elementText);
    }


    forms.buttonElement=buttonElement;
    function buttonElement(type,value,click,parent,id) {
        let button = document.createElement("button");
        button.type = type;
        button.innerText = value;
        button.id = id;
        button.onclick = click;
        parent.append(button);
    }

    forms.header=header;
    function header(class1,value) {
        let header = document.createElement("header");
        header.classList.add(class1);
        header.innerText = value;
        document.body.prepend(header);
    }



    forms.footer=footer;
    function footer(class1,value) {
        let footer = document.createElement("footer");
        footer.classList.add(class1);
        footer.innerText = value;
        document.body.append(footer);
    }


    forms.img=img;
    function img(src, class1, click, parent) {
	    let Img= document.createElement("Img");
			Img.src=src;
			Img.classList.add(class1);
			Img.onclick=click;
            parent.append(Img);
    }        
    forms.p=p;
    function p(value, class1, parent) {
	    let p= document.createElement("p");
            p.classList.add(class1);
            p.innerText = value;
            parent.append(p);
    } 


})();