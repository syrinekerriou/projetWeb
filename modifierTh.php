<?php
include "entites/theme.php";
include "core/themeC.php";

if (isset($_POST['nomt']) and isset($_POST['description']) and isset($_POST['couleur']) and isset($_POST['prix'])){
$theme1=new theme($_POST['nomt'],$_POST['description'],$_POST['couleur'],$_POST['prix']);
$theme1C=new themeC();
$theme1C->modifiertheme($theme1);


	header('Location: ModifierTheme.php');
		alert("theme Ajoute");






	}
	else{
	echo "verifier les champs"; 
}
	
	?>

