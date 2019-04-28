<?php 
SESSION_start();
if(isset($_POST['valide']))
{


	$pseudo=$_POST['pseudo'];
    $mot=$_POST["MOT"];



$_SESSION['pseudo']=$_POST['pseudo'];
header("location:index.php");


}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>connection</title>
</head>
<body>
	<form method="POST" action="connex.php ?>">
	<center><fieldset class="cadre">
		<legend>connection</legend>
		<table>
		<tr>
<tr><td>pseudo:</td><td><input type="text" name="pseudo"></td></tr>
<tr><td>Mot De Passe:</td><td><input type="password" name="MOT"></td></tr>
<tr><td><input type="submit" name="valide" value="valide"></td></tr>

</tr>
</table>
</fieldset>
</center>
</form>
</body>
</html>