<?php
include "entites/table.php";
include "core/tableC.php";

if (isset($_POST['nomtt']) && isset($_POST['description']) && isset($_POST['quantite'])  && isset($_POST['image']) && isset($_POST['type']) && isset($_POST['prix']))
{
$table1=new table($_POST['nomtt'],$_POST['description'],$_POST['quantite'],$_POST['image'],$_POST['type'],$_POST['prix']);
$tableC1=new tableC();
$tableC1->ajouterTable($table1);


	header('Location: AjoutTable.php');
		alert("strade Ajoute");





	}
	else
	{
	echo "verifier les champs"; 
}
	
	?>

