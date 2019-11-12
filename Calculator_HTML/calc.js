function calc(){
	let result;
	let num1 = document.getElementById('num1').value;
	let num2 = document.getElementById('num2').value;
	let action = document.getElementById('action').value;
	if (action=="+"){
		result = Number(num1)+Number(num2);
}
	else if (action=="-"){
			result= Number(num1)-Number(num2);
}
		else if (action=="*"){
				result=Number(num1)*Number(num2);
}
			else if (action=="/"){
				result=Number(num1)/Number(num2);
}
	document.getElementById('Out').innerHTML=result;	
}