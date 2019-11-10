document.addEventListener("DOMContentLoaded", createPage);

function calc() {
    const numberOneValue = document.querySelector(".numberOne").value;
    const numberTwoValue = document.querySelector(".numberTwo").value;
    const operationValue = document.querySelector(".operationSelect").value;
    let outputResult;
    if (operationValue === "+") {
        outputResult = parseInt(numberOneValue, 10) + parseInt(numberTwoValue, 10);
    }
    else if (operationValue === "-") {
        outputResult = numberOneValue - numberTwoValue;
    }
    else if (operationValue === "*") {
        outputResult = numberOneValue * numberTwoValue;
    }
    else if (operationValue === "/") {
        if (numberTwoValue === "0") {
            alert("Введите корректные данные");
            outputResult = "";
        }
        else {
            outputResult = numberOneValue / numberTwoValue;
        }
    }

    document.querySelector(".output").innerHTML = outputResult;
    document.getElementById("form").onsubmit = function(){return false};
}

function createPage() {
    let elementMainContainer = document.createElement("div");
    elementMainContainer.classList.add("mainContainer");
    document.body.append(elementMainContainer);

    let form = document.createElement("form");
    form.id = "form";
    form.onsubmit = "return false";
    elementMainContainer.append(form);

    let inputContainer = document.createElement("div");
    inputContainer.classList.add("inputString");
    form.append(inputContainer);

    let labelOne = document.createElement("label");
    labelOne.classList.add("inputLabel");
    labelOne.for = "inputOne";
    labelOne.innerText = "Первое число";
    inputContainer.append(labelOne);

    let elementInputOne = document.createElement("input");
    elementInputOne.id = "inputOne";
    elementInputOne.type = "number";
    elementInputOne.required = true;
    elementInputOne.max = "999";
    elementInputOne.min = "-999";
    elementInputOne.placeholder = "ххх";
    elementInputOne.classList.add("inputField");
    elementInputOne.classList.add("numberOne");
    elementInputOne.classList.add("raz");
    labelOne.append(elementInputOne);

    let labelOperation = document.createElement("label");
    labelOperation.classList.add("operationLabel");
    labelOperation.innerText = "Oперация";
    inputContainer.append(labelOperation);

    let select = document.createElement("select");
    select.classList.add("operationSelect");
    labelOperation.append(select);

    let optionPlus = document.createElement("option");
    optionPlus.classList.add("operation");
    optionPlus.innerText = "+";
    select.append(optionPlus);

    let optionMinus = document.createElement("option");
    optionMinus.classList.add("operation");
    optionMinus.innerText = "-";
    select.append(optionMinus);

    let optionMult = document.createElement("option");
    optionMult.classList.add("operation");
    optionMult.innerText = "*";
    select.append(optionMult);

    let optionDiv = document.createElement("option");
    optionDiv.classList.add("operation");
    optionDiv.innerText = "/";
    select.append(optionDiv);

    let labelTwo = document.createElement("label");
    labelTwo.classList.add("inputLabel");
    labelTwo.for = "inputTwo";
    labelTwo.innerText = "Второе число";
    inputContainer.append(labelTwo);

    let elementInputTwo = document.createElement("input");
    elementInputTwo.id = "inputTwo";
    elementInputTwo.type = "number";
    elementInputTwo.required = true;
    elementInputTwo.max = "999";
    elementInputTwo.min = "-999";
    elementInputTwo.placeholder = "ххх";
    elementInputTwo.classList.add("inputField");
    elementInputTwo.classList.add("numberTwo");
    elementInputTwo.classList.add("raz");
    labelTwo.append(elementInputTwo);

    let button = document.createElement("button");
    button.classList.add("buttonCalc");
    button.type = "submit";
    button.innerText = "Вычислить";
    button.onclick = calc;
    form.append(button);

    let span = document.createElement("span");
    span.classList.add("outputLabel");
    span.innerText = "Результат:";
    form.append(span);

    let divOutput = document.createElement("div");
    divOutput.classList.add("output");
    form.append(divOutput);
}
