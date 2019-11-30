<?php
require_once "scripts/calc.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Калькулятор на php</title>
<link rel="stylesheet" href="styles/calc.css"/>
</head>
	<body>
		<form>
			<div class="container">
				<div class="strip_first">
					<div class="number_first">
						<input class="input_first" type ="number" placeholder="Первое число" id="chislo_1" name="i1"/>
					</div>

					<div class="action_list">
						<div class="list_select">
							<select id="action" name="select">
							<option value="none" hidden="true" >Действие</option>
							<option >+</option>
							<option >-</option>
							<option >*</option>
							<option >/</option>
							</select>
						</div>
					</div>

					<div class="number_second">
						<input class="input_second" type ="number" placeholder ="Второе число" id="chislo_2" name="i2"/>
					</div>
				</div>

				<div class="strip_second">
					<div>
						<output>
							<div class="output" id="result">
<?php
	echo $result;
?>
							</div>
						</output>
					</div>
					<input type="submit" name="button" value="Рассчитать" class="button_result"/>
				</div>
			</div>
		</form>
	</body>
</html>