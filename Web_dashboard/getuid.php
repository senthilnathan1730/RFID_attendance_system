<?php
	$UIDresult=$_POST["UIDresult"];
	echo $UIDresult;
	$Write="<?php $" . "UIDresult='" . $UIDresult . "'; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('uidcontainer.php',$Write);
	
	// file_put_contents('admin.php',$Write);




?>