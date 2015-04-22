<!DOCTYPE html>
<html>
	<head>
	<?php include 'src/AjaxHandler.php';
	$ajax = new AjaxHandler();
	if(isset($_GET['value'])){
		$ajax->processRequest($_GET['value']);
	}	
	?>		
	</head>
	<body>
	
		<input type="button" id="buttonTest" value="TestButton" />
		
	</body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		$('#buttonTest').click(function(){
			alert('test');s
		});
	</script>
</html>