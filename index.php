<!DOCTYPE html>
<html>
	<head>
		<title>jQuery FormBuilder Demo</title>
		<meta charset="utf-8" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
		<script src="js/jquery.formbuilder.js"></script>
		<link href="css/jquery.formbuilder.css" media="screen" rel="stylesheet" />
		<style type="text/css">
			a, body { font-family: "Tahoma", "Verdana", sans-serif; font-size: 12px; }
		</style>
		<script>
			$(function(){
				$('#my-form-builder').formbuilder({
					'save_url': 'example-save.php',
					'load_url': 'example-json.php<?php echo '?form_id=' . $_REQUEST['form_id'];?>',
					'useJson' : true
				});
				$(function() {
					$("#my-form-builder ul").sortable({ opacity: 0.6, cursor: 'move'});
				});
			});
		</script>
	</head>
	<body>
		
		<h1>jQuery Form Builder Plugin Demo</h1>
		
		<?php
		
		require('load-forms.php');
		
		echo "<pre>";
		//var_dump($forms_list);
		echo "</pre>";
		
		foreach ($forms_list as $this_form) {
			$id = $this_form['id'];
			echo "<a href=\"/?form_id=$id\">Edit form $id</a> - \n
			 	  <a href=\"/example-json.php?form_id=$id&amp;schema=open311\">get Open311 json</a> <br />\n";
			
		}
		
		?>		
		
		<p><a href="example-html.php">View sample rendered html</a>.</p>
		<div id="my-form-builder"></div>
	</body>
</html>