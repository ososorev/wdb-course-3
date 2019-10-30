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
}
