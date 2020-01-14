
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
    function inputElement(placeholder,name, type,class1,class2,id,parent) {
        let elementInput = document.createElement("input");
        elementInput.placeholder = placeholder;
        elementInput.id = id;
        elementInput.name = name;
        elementInput.type = type;
        elementInput.classList.add(class1);
        elementInput.classList.add(class2);
        parent.append(elementInput);
    }


    forms.TextElement=TextElement;
    function TextElement(placeholder,name,Text,class1,class2,id,parent) {
        let elementText = document.createElement("Textarea");
        elementText.placeholder = placeholder;
        elementText.name = name;
        elementText.id = id;
        elementText.classList.add(class1);
        elementText.classList.add(class2);
        elementText.innerText=Text;
        parent.append(elementText);
    }


    forms.buttonElement=buttonElement;
    function buttonElement(type,value,click,class1,class2,parent,id) {
        let button = document.createElement("button");
        button.type = type;
        button.innerText = value;
        button.id = id;
        button.onclick = click;
        button.classList.add(class1);
        button.classList.add(class2);
        parent.append(button);
    }

    forms.header=header;
    function header(class1, class2, class3,id,value) {
        let header = document.createElement("header");
        header.classList.add(class1);
        header.classList.add(class2);
        header.classList.add(class3);
        header.id=id;
        header.innerText = value;
        document.body.prepend(header);
    }



    forms.footer=footer;
    function footer(class1, class2, class3,value) {
        let footer = document.createElement("footer");
        footer.classList.add(class1);
        footer.classList.add(class2);
        footer.classList.add(class3);
        footer.innerText = value;
        document.body.append(footer);
    }


    forms.img=img;
    function img(src, class1, id, click, parent) {
	    let Img= document.createElement("Img");
			Img.src=src;
			Img.classList.add(class1);
			Img.id=id;
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