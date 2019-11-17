document.addEventListener("DOMContentLoaded", createPage);
function createPage() {
  let mainContainer = document.createElement("div");
  mainContainer.classList.add("main");
  document.body.append(mainContainer);

  let innerContainer = document.createElement("div");
  innerContainer.classList.add("inner");
  mainContainer.append(innerContainer);

  let firstField = document.createElement("input");
  firstField.setAttribute("type", "number");
  firstField.classList.add("input-field", "first-field");
  innerContainer.append(firstField);

  let selectBox = document.createElement("select");
  innerContainer.append(selectBox);
  let optionPlus = document.createElement("option");
  optionPlus.append("+");
  selectBox.append(optionPlus);
  let optionMinus = document.createElement("option");
  optionMinus.append("-");
  selectBox.append(optionMinus);
  let optionMultipl = document.createElement("option");
  optionMultipl.append("*");
  selectBox.append(optionMultipl);
  let optionDivision = document.createElement("option");
  optionDivision.append("/");
  selectBox.append(optionDivision);

  let secondField = document.createElement("input");
  secondField.setAttribute("type", "number");
  secondField.classList.add("input-field", "second-field");
  innerContainer.append(secondField);

  let resultButton = document.createElement("button");
  resultButton.innerHTML = "Вычислить";
  resultButton.classList.add("do-action");
  innerContainer.append(resultButton);

  let resultField = document.createElement("input");
  resultField.setAttribute("type", "number");
  resultField.setAttribute("Placeholder", "Результат");
  resultField.classList.add("result-field");
  innerContainer.append(resultField);

  let actionButton = document.getElementsByClassName('do-action')[0];
  actionButton.onclick = function () {
    let firstVariable = document.querySelector('.first-field').value;
    let operation = document.querySelector('select');
    let secondVariable = document.querySelector('.second-field').value;
    let result;
    if (firstVariable !== '' && secondVariable !== '') {
      if (operation[0].selected) {
        result = parseInt(firstVariable, 10) + parseInt(secondVariable, 10);
        document.querySelector('.result-field').value = result;
      } else if (operation[1].selected) {
        result = parseInt(firstVariable, 10) - parseInt(secondVariable, 10);
        document.querySelector('.result-field').value = result;
      } else if (operation[2].selected) {
        result = parseInt(firstVariable, 10) * parseInt(secondVariable, 10);
        document.querySelector('.result-field').value = result;
      } else if (operation[3].selected && secondVariable === '0') {
        alert('I don`t know how to divide by zero!');
      } else if (operation[3].selected && secondVariable !== '0') {
        result = parseInt(firstVariable, 10) / parseInt(secondVariable, 10);
        document.querySelector('.result-field').value = result;
      }
    } else {
      alert('Input fields are empty!');
    }
  };
}