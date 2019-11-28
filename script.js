document.addEventListener("DOMContentLoaded", createPage);
function createPage() {
  let firstField = document.createElement("input");
  firstField.setAttribute("type", "number");
  firstField.classList.add("first-field");
  document.body.append(firstField);

  let selectBox = document.createElement("select"); // создает  <select><select/>
  document.body.append(selectBox);

  let optionAdd = document.createElement("option"); 
  optionAdd.append("+");
  selectBox.append(optionAdd); // <option value="">+</option>

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
  secondField.classList.add("second-field");
  document.body.append(secondField);

  let resultButton = document.createElement("button");
  resultButton.innerHTML = "Вычислить";
  resultButton.classList.add("do-action");
  document.body.append(resultButton);

  let resultField = document.createElement("input");
  secondField.setAttribute("type","number");
  resultField.setAttribute("Placeholder", "Результат");
  resultField.classList.add("result-field");
  document.body.append(resultField);



  let actionButton = document.querySelector(".do-action");
  actionButton.onclick = function() {
    let firstVariable = document.querySelector(".first-field").value;
    let operation = document.querySelector("select");
    let secondVariable = document.querySelector(".second-field").value;
    if (firstVariable !== "" && secondVariable !== "") {
      if (operation[0].selected) {
        document.querySelector(".result-field").value =
          parseInt(firstVariable, 10) + parseInt(secondVariable, 10);
      }
      if (operation[1].selected) {
        document.querySelector(".result-field").value =
          parseInt(firstVariable, 10) - parseInt(secondVariable, 10);
      }
      if (operation[2].selected) {
        document.querySelector(".result-field").value =
          parseInt(firstVariable, 10) * parseInt(secondVariable, 10);
      }
      if (operation[3].selected && secondVariable != "0") {
        document.querySelector(".result-field").value =
          parseInt(firstVariable, 10) / parseInt(secondVariable, 10);
      }
    } else {
      alert("Error");
    }
  };
}
