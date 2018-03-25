<?php  

	include ('Modal.php');
	

		$modal = new Modal($_POST['titulo'],$_POST['parrafo'],$_POST['foto']);

	$modal->show();

 ?>


