<?php
include "entites/theme.php";
include "core/themeC.php";

if (isset($_POST['nomt']) and isset($_POST['description']) and isset($_POST['couleur']) and isset($_POST['prix']))
{
$theme1=new theme($_POST['nomt'],$_POST['description'],$_POST['couleur'],$_POST['prix']);
$themeC1=new themeC();
$themeC1-> ajoutertheme($theme1);


	header('Location: AjoutTheme.php');
		alert("theme Ajouté");





	}
	else{
	echo "verifier les champs"; 
}
	


?>