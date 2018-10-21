<?php
require_once(dirname(__FILE__) . "/config.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HTML5 Template</title>
    <!--<link type="text/css" rel="stylesheet" href="css/styles.css?v=1.0">-->
</head>
<body>
	<a href="#" class="ajax_request">AJAX</a>
	<hr>
	<div class="buttons_wrapper">
		<a href="#" class="add_button">Add button</a>
	</div>
	
	<!-- LOADING SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.myApp.js"></script>
	<script type="text/javascript">
		config = JSON.parse('<?php echo json_encode($config); ?>');
		jQuery(function($) {
			$("body").myApp(config);
		})
	</script>
</body>
</html>