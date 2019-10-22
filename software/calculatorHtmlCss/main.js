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
    document.getElementById("forma").onsubmit = function(){return false};
}
