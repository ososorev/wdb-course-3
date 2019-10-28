function calculate_result() {
   let number1 = Number(document.getElementById("number1").value);
   let number2 = Number(document.getElementById('number2').value);
   let operator = String(document.getElementById('operator').value);
   let resultTitleObj = document.getElementById('result_title');
   let resultObj =  document.getElementById('result');
   let result;
   console.log(number1,number2);
   if (Number.isFinite(number1) && Number.isFinite(number2)) {
       switch (operator) {
           case '+':
               result = number1 + number2;
               break;
           case '-':
               result = number1 - number2;
               break;
           case '/':
               result = (number2 == 0) ? "На ноль делить низя.": number1 / number2;
               break;
           case '*':
               result = number1 * number2;
               break;
       }
   }
   else{
      result =  "Похоже вы ввели не числа...";
   }
    resultTitleObj.innerHTML = "Результат:";
    resultObj.innerHTML = result;

}