function calc() {
	let s1 = document.querySelector(".s1");
	let s1Value = s1.value;
	let s2 = document.querySelector(".s2");
	let s2Value = s2.value;
	let act = document.getElementById("act").value;
	let resultDiv = document.querySelector(".result");
	if (act == "+ (Сложение)") {
		resultDiv.innerHTML = Number(s1.value)+Number(s2.value);
		}
		else if (act == "- (Вычитание)") {
			resultDiv.innerHTML = Number(s1.value)-Number(s2.value);
			}
			else if (act == "* (Умножение)") {
				resultDiv.innerHTML = Number(s1.value)*Number(s2.value);
				}
				else if (act == "/ (Деление)" && Number(s2.value) != "0") {
					resultDiv.innerHTML = Number(s1.value)/Number(s2.value);
					}
					else {
						resultDiv.innerHTML = "На ноль делить нельзя";
						}
				}