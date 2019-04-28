<?php
include "entites/strade.php";
include "core/stradeC.php";

if (isset($_POST['nom'])  ){
$strade1C=new stradeC();
$strade1C->supprimerStrade($_POST['nom']);
header('Location:supprimerStrade.php');


	}
	else{
	echo "vérifier les champs";
}
	
	?>

