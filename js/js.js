document.addEventListener("DOMContentLoaded", createPage);

function calculator() {
    const a = document.querySelector(".a").value;
    const b = document.querySelector(".b").value;
    const symbol = document.querySelector(".operationSelect").value;
    let result;
    let output = document.querySelector('.otvet');
    if (symbol==='+'){
        result = +a + +b ; // parseInt(a, 10) + parseInt(b, 10)
        output.innerHTML = "Ответ: " + result;
    } else if(symbol==='-'){
        result = a - b;
        output.innerHTML = "Ответ: " + result;
    } else if(symbol==='*'){
        result = a * b;
        output.innerHTML = "Ответ: " + result;
    } else if(symbol==='/'){
        if (b == 0){
            alert("делить на 0 нельзя");
            output.innerHTML = "Ответа нет";
        } else {
            result = a / b;
            result=result.toFixed(5);
            output.innerHTML = "Ответ: " + result;
        }
    }
    document.getElementById('forma').onsubmit = function(){return false};
}

function createPage() {
    let elementMainContainer = document.createElement("div");
    elementMainContainer.classList.add("block");
    document.body.append(elementMainContainer);

    let form = document.createElement("form");
    form.id = "forma";
    //form.action = "localhost/php/calculator.php";
    form.onsubmit = "return false";
    elementMainContainer.append(form);

    let labelOne = document.createElement("label");
    labelOne.classList.add("vvod");
    labelOne.innerText = "Первое число";
    form.append(labelOne);

    let elementInputOne = document.createElement("input");
    elementInputOne.type = "number";
    elementInputOne.name = "a";
    elementInputOne.required = true;
    elementInputOne.max = "999";
    elementInputOne.min = "-999";
    elementInputOne.title="Число от -999 до 999";
    elementInputOne.placeholder = "введите число А";
    elementInputOne.classList.add("parametr");
    elementInputOne.classList.add("a");
    elementInputOne.classList.add("raz");
    labelOne.append(elementInputOne);

    let select = document.createElement("select");
    select.classList.add("operationSelect");
    form.append(select);

    let optionPlus = document.createElement("option");
    optionPlus.innerText = "+";
    select.append(optionPlus);

    let optionMinus = document.createElement("option");
    optionMinus.innerText = "-";
    select.append(optionMinus);

    let optionMult = document.createElement("option");
    optionMult.innerText = "*";
    select.append(optionMult);

    let optionDiv = document.createElement("option");
    optionDiv.innerText = "/";
    select.append(optionDiv);

    let labelTwo = document.createElement("label");
    labelTwo.classList.add("vvod");
    labelTwo.innerText = "Второе число";
    form.append(labelTwo);

    let elementInputTwo = document.createElement("input");
    elementInputTwo.type = "number";
    elementInputTwo.name = "b";
    elementInputTwo.required = true;
    elementInputTwo.max = "999";
    elementInputTwo.min = "-999";
    elementInputTwo.title="Число от -999 до 999";
    elementInputTwo.placeholder = "введите число B";
    elementInputTwo.classList.add("parametr");
    elementInputTwo.classList.add("b");
    elementInputTwo.classList.add("raz");
    labelTwo.append(elementInputTwo);

    let divButton = document.createElement("div");
    divButton.classList.add("dop");
    form.append(divButton);

    let button = document.createElement("button");
    button.classList.add("button");
    button.onclick = calculator;
    button.type = "submit";
    button.innerText = "Посчитать";
    divButton.append(button);

    let divOutput = document.createElement("div");
    divOutput.classList.add("otvet");
    divOutput.innerText = "Ответ: ******";
    form.append(divOutput);
}