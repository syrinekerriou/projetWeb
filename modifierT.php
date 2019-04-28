<?php
include "entites/table.php";
include "core/tableC.php";

if (isset($_POST['nomtt']) and isset($_POST['description']) and isset($_POST['quantite']) and isset($_POST['image'])   and isset($_POST['type'])and isset($_POST['prix'])){
$table1=new table($_POST['nomtt'],$_POST['description'],$_POST['quantite'],$_POST['image'],$_POST['type'],$_POST['prix']);
$table1C=new tableC();
$table1C->modifiertable($table1);


	header('Location: Modifiertable.php');
		alert("table modifier");





	}
	else{
	echo "verifier les champs"; 
}
	
	?>
