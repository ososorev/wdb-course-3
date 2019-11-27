document.addEventListener("DOMContentLoaded", createPage);
function createPage() {
	let s1 = document.createElement("input");
	s1.type = "number";
	s1.value = "0";
	s1.classList.add ("s1");
	document.body.append(s1);
	let s2 = document.createElement ("input");
	s2.type = "number";
	s2.value = "0";
	s2.classList.add ("s2");
	document.body.append(s2);			
	let s3 = document.createElement ("select");
	s3.classList.add ("s3");
	s3.id = "act";
	let array = ["+ (Сложение)","- (Вычитание)","* (Умножение)","/ (Деление)"];
	for (let i = 0; i < array.length; i++) {
		let option = document.createElement("option");
		option.value = array[i];
		option.text = array[i];
		s3.appendChild(option);
		}
	document.body.append(s3);
	let button1 = document.createElement ("button");
	button1.onclick = calc;
	button1.innerHTML = "Результат";
	document.body.append(button1);
	let res = document.createElement ("output");
	let resultDiv = document.createElement("div");
	resultDiv.classList.add ("result");
	res.append(resultDiv);
	document.body.append(res);
}