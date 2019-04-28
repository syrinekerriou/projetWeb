<?php session_start ();
if(isset($_SESSION["pseudo"]))
{
?>

else
{
    echo "you need to connect";

}

?> 

<a href="connex.php">connect here</a>