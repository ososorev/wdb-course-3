const number1 = document.getElementById('number1');
const number2 = document.getElementById('number2');
const operator = document.getElementById('operator');
// const resultButton = document.getElementById('resultButton');

document.addEventListener("DOMContentLoaded", createPage);

function createPage() {
    let button = document.createElement("button");
    button.id = "resultButton";
    button.value = "="
    button.classList.add("C1");

    document.body.append(button);
    button.onClick = operate;
   
}

let operate = function() {

    let result = 0;

    switch (operator.value) {
        case 'multiply': // if operator.value = multiply
            result = parseInt(number1.value) * parseInt(number2.value);
            break;

        case 'divide': // if operator.value = divide
            if (parseInt(number2.value) === 0) {
                alert('Error: you cannot divide by 0');
                break;
            }    
                result = parseInt(number1.value) / parseInt(number2.value);
            
            break;

        case 'sumUp': // if operator.value = sumUp
            result = parseInt(number1.value) + parseInt(number2.value);
            break;

        case 'subtract': // if operator.value = subtract
            result = parseInt(number1.value) - parseInt(number2.value);
            break;
    }

    let outputField = document.getElementById("result")
    outputField.value = result

}

document.getElementById('resultButton').addEventListener('click', operate)   