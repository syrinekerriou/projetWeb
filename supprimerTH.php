<?php
include "entites/theme.php";
include "core/themeC.php";

if (isset($_POST['nomt'])  ){
$theme1C=new themeC();
$theme1C->supprimertheme($_POST['nomt']);
header('Location:supprimerTheme.php');


	}
	else{
	echo "vérifier les champs";
}
	
	?>

