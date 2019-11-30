// JavaScript Document
function createPage(){
				
	let div_container= document.createElement('div');
	div_container.className="container";
				
		let div_strip_first= document.createElement("div");			
		div_strip_first.className="strip_first";

			let div_number_first= document.createElement("div");			
			div_number_first.className="number_first";
	
				let input_first = document.createElement("input");	
				input_first.className="input_first";
				input_first.type= "number";
				input_first.placeholder= "Первое число";
				input_first.id= "chislo_1";
				
			let div_action= document.createElement("div");
			div_action.className="action_list";
		
				let div_list= document.createElement("div");
				div_list.className="list_select";
				
					let input_select=document.createElement("select");
					input_select.id="action";
					let array = ["Действие", "+", "-", "*", "/"];
					for (let i = 0; i < array.length; i++) {
						let option = document.createElement("option");
						option.text = array[i];
						input_select.appendChild(option);
					}
					input_select.options[0].value= "none";
					input_select.options[0].hidden= true;
	
			let div_number_second= document.createElement("div");			
			div_number_second.className= "number_second";
	
				let input_second = document.createElement("input");	
				input_second.className="input_second";
				input_second.type= "number";
				input_second.placeholder= "Второе число";
				input_second.id= "chislo_2";
	
		let div_strip_second= document.createElement("div");			
		div_strip_second.className="strip_second";	

			let div_noname= document.createElement("div");
				
				let output= document.createElement("output");
					
					let div_output= document.createElement("div");
					div_output.className= "output";
					div_output.id= "result";
					div_output.innerHTML= "Здесь будет результат";
		
			let button_res= document.createElement("button");
			button_res.className="button_result";
			button_res.onclick=math;
			button_res.innerHTML="Рассчитать";
	
	
	
	div_number_first.append(input_first);
	div_strip_first.append(div_number_first);
	
	div_list.append(input_select);
	div_action.append(div_list);
	div_strip_first.append(div_action);
	
	div_number_second.append(input_second);
	div_strip_first.append(div_number_second);
	
	div_container.append(div_strip_first);
	
	
	output.append(div_output);
	div_noname.append(output);
	div_strip_second.append(div_noname);
	div_strip_second.append(button_res);
	div_container.append(div_strip_second);
	
	document.body.append(div_container);
}