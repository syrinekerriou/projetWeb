<?php
include "entites/strade.php";
include "core/stradeC.php";

if (isset($_POST['nom']) and isset($_POST['description']) and isset($_POST['quantite']) and isset($_POST['prix']) and isset($_POST['image'])and isset($_POST['type'])){
$strade1=new strade($_POST['nom'],$_POST['description'],$_POST['quantite'],$_POST['prix'],$_POST['image'],$_POST['type']);
$strade1C=new stradeC();
$strade1C->modifierStrade($strade1);


	header('Location: ModifierStrade.php');
		alert("strade modifier");





	}
	else{
	echo "verifier les champs"; 
}
	
	?>