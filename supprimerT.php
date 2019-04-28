<?php
include "entites/table.php";
include "core/tableC.php";

if (isset($_POST['nomtt'])  ){
$table1C=new tableC();
$table1C->supprimertable($_POST['nomtt']);
header('Location:supprimerTable.php');


	}
	else{
	echo "vérifier les champs";
}
	
	?>

