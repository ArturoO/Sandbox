<?php 

//$data = array(
//	"matrix" => array(1, 2, 3),
//	"multi_matrix" => array(
//		"colors" => array("red", "blue"),
//		"weight" => array(75,83),	
//	),
//);
//var_dump(json_encode($data));
//die;

//[{"name":"matrix[]","value":"1"},{"name":"matrix[]","value":"2"},{"name":"matrix[]","value":"3"},{"name":"multi_matrix[colors][]","value":"red"},{"name":"multi_matrix[colors][]","value":"blue"},{"name":"multi_matrix[weight][]","value":"75"},{"name":"multi_matrix[weight][]","value":"83"}]
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
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
		<input type="text" name="matrix[]" value="1"/><br/>
		<input type="text" name="matrix[]" value="2"/><br/>
		<input type="text" name="matrix[]" value="3"/><br/>		
		<input type="text" name="multi_matrix[colors][]" value="red"/><br/>
		<input type="text" name="multi_matrix[colors][]" value="blue"/><br/>		
		<input type="text" name="multi_matrix[weight][]" value="75"/><br/>
		<input type="text" name="multi_matrix[weight][]" value="83"/><br/>		
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
	
//	$.fn.serializeObject = function()
//	{
//		var o = {};
//		var a = this.serializeArray();
//		$.each(a, function() {
//			if (o[this.name] !== undefined) {
//				if (!o[this.name].push) {
//					o[this.name] = [o[this.name]];
//				}
//				o[this.name].push(this.value || '');
//			} else {
//				o[this.name] = this.value || '';
//			}
//		});
//		return o;
//	};
	
	$.fn.serializeObject = function()
	{
		var o = {};
		var a = this.serializeArray();
		$.each(a, function() {
			if (o[this.name] !== undefined) {
				if (!o[this.name].push) {
					o[this.name] = [o[this.name]];
				}
				o[this.name].push(this.value || '');
			} else {
				o[this.name] = this.value || '';
			}
		});
		return o;
	};

	function getFormData($form){
		var unindexed_array = $form.serializeArray();
		var indexed_array = {};

		$.map(unindexed_array, function(n, i){
			indexed_array[n['name']] = n['value'];
		});

		return indexed_array;
	}

	</script>
</body>
</html>