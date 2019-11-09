// JavaScript Document
			function createPage(){
				
				let div_main=document.createElement("div");
				div_main.id="main";
				
					let div_strip_start=document.createElement("div");
					div_strip_start.id="strip_start";
					div_strip_start.className="strip";
					div_strip_start.innerHTML="SUPER NOTEBOOK";
				
				div_main.append(div_strip_start);
				
					let div_inputs=document.createElement("div");
				
						let input_username=document.createElement("input");
						input_username.name="username";
						input_username.className="inputs";
						input_username.placeholder=" Username";
															
					div_inputs.append(input_username);
				
					div_inputs.insertAdjacentHTML('afterBegin', '<p>');
					div_inputs.insertAdjacentHTML('beforeEnd', '</p><p>');	
				
						let input_pass=document.createElement("input");
						input_pass.name="username";
						input_pass.className="inputs";
						input_pass.type="password";
						input_pass.placeholder=" Password";
					
					div_inputs.append(input_pass);
					div_inputs.insertAdjacentHTML('beforeEnd', '</p><p>');
					
						let input_pass_confrim=document.createElement("input");
						input_pass_confrim.name="pass_confrim";
						input_pass_confrim.className="inputs";
						input_pass_confrim.type="password";
						input_pass_confrim.placeholder=" Confrim password";
					
					div_inputs.append(input_pass_confrim);
					div_inputs.insertAdjacentHTML('beforeEnd', '</p><p>');
						
						let input_mail=document.createElement("input");
						input_mail.name="mail";
						input_mail.className="inputs";
						input_mail.placeholder=" Email";
				
					div_inputs.append(input_mail);
					div_inputs.insertAdjacentHTML('beforeEnd', '</p><p>');
				
						let input_button=document.createElement("input");
						input_button.type="button";
						input_button.id="button";
						input_button.className="inputs";
						input_button.value="Register";	
					
					div_inputs.append(input_button);
					div_inputs.insertAdjacentHTML('beforeEnd', '<p>');			
				div_main.append(div_inputs);
				
					let div_strip_end=document.createElement("div");
					div_strip_end.id="strip_end";
					div_strip_end.className="strip";
					div_strip_end.innerHTML="Copyright by ..., 2016";
				
				div_main.append(div_strip_end);
				
				document.body.append(div_main);
			}