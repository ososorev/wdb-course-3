// JavaScript Document			
function math() {
	
	let resultDiv = document.getElementById("result");
	let chislo_one = document.getElementById("chislo_1").value;
	let chislo_two = document.getElementById("chislo_2").value;
	let a = Number(document.getElementById("chislo_1").value);
	let b = Number(document.getElementById("chislo_2").value);
	let action = document.getElementById("action").value;
	let result;
	
	if(chislo_one== ""){
		result="Введите первое число";
	}
	else if (chislo_two== "") {
		result="Введите второе число";
	}
	else{
		if (action == "none"){
			result = "Выберите действие";
		}
		else if (action == "+"){
				result = a + b;
		}
		else if (action == "-"){
				result = a - b;
		}
		else if (action == "*"){
				result = a * b;
		}
		else if (action == "/"){
			if (b == 0){
				result = "Деление на ноль не возможно";
		}
			else {
				result = a / b;
			}	
		}
	}
	resultDiv.innerHTML = result;				
}