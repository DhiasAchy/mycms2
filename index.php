<?php
	require_once('includes/templateFunctions.php');
	$tmpl = new TemplateFunctions();
	$tmpl->show();
?>
		if (isset($_REQUEST['task']))
		{
			$task=$_REQUEST['task'];
			
			switch($task)
			{
				case 'addcontent':$app->addcontent();break;
				case 'anyothertask':$app->anyothertask();break;
				default:$app->viewcontent();break;
			}
		}
		else
		{
			//jika tidak query string akan dipanggil fungsi view content()
			$app->viewcontent();
		}
