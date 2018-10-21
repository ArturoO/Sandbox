<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Workaround for max_input_vars</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]==="POST" && !empty($_POST["data"])) {
	$vars = explode("&", $_POST["data"]);
	$data = array();
	foreach($vars as $var) {
		parse_str($var, $variable);
		assign_var($_POST, $variable);
	}
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
}
function assign_var(&$target, $var) {
	$key = key($var);
	if(is_array($var[$key])) 
		assign_var($target[$key], $var[$key]);
	else {
		if($key==0)
			$target[] = $var[$key];
		else
			$target[$key] = $var[$key];
	}	
}
?>	
	<form id="myForm" method="POST">
		<input type="text" name="var_1" value="<?php echo htmlentities("double quote: \"hello\"");?>"/><br/>
		<input type="text" name="var_2" value="<?php echo htmlentities("single quote: 'hello'");?>"/><br/>
		<input type="text" name="var_3" value="<?php echo htmlentities("text with & ampersant");?>"/><br/>
		<input type="text" name="var_4" value="<?php echo htmlentities("animals");?>"/><br/>
		<input type="text" name="matrix[]" value="1"/><br/>
		<input type="text" name="matrix[]" value="2"/><br/>
		<input type="text" name="matrix[]" value="3"/><br/>
		<input type="text" name="matrix[]" value="4"/><br/>
		<input type="text" name="matrix[]" value="5"/><br/>
		<input type="text" name="matrix[]" value="6"/><br/>
		<input type="text" name="matrix[]" value="7"/><br/>
		<input type="text" name="var_5" value="abc"/><br/>
		<input type="text" name="var_6" value="bcd"/><br/>
		<input type="text" name="var_7" value="cde"/><br/>
		<input type="text" name="var_8" value="def"/><br/>
		<input type="text" name="multi_matrix[colors][]" value="red"/><br/>
		<input type="text" name="multi_matrix[colors][]" value="blue"/><br/>
		<input type="text" name="multi_matrix[colors][]" value="green"/><br/>
		<input type="text" name="multi_matrix[weight][]" value="75"/><br/>
		<input type="text" name="multi_matrix[weight][]" value="83"/><br/>
		<input type="text" name="multi_matrix[weight][]" value="62"/><br/>
		<input type="text" name="multi_matrix[height][]" value="170"/><br/>
		<input type="submit" value="Send">
	</form>
	<style>
	input {
		margin: 5px 0;
	}
	</style>
	<script type="text/javascript">
	(function(){
		$(function(){
			$("#myForm").submit(function(event) {
				var $this = $(this);
				var data = $this.serialize();
				$this.find("input, textarea, select, button").remove();
				$this.append("<input type='hidden' class='data' name='data'/>");
				$this.find("input.data").val(data);
			});
		});
	})(jQuery);
	</script>
</body>
</html>