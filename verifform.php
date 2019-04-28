<?php
include "entites/strade.php";
include "core/stradeC.php";
try
{
 $bdd = new PDO("mysql:host=localhost;dbname=projet", "root", "");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une érreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET['terme'];
 
 if (isset($terme))
 {
  $terme = strtolower($terme);
  $select_terme = $bdd->prepare("SELECT * FROM strade WHERE nom LIKE ? OR prix LIKE ?");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }

}
else
{
  $select_terme = $bdd->prepare("SELECT * FROM strade ");
  $select_terme->execute(array("%","%","%","%","%","%"));
 
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8" >
  <title>Les résultats de recherche</title>
 </head>
    <style>
 .element {
width: 250px; 
height: 350px;
margin:0px;
position:relative;
display:inline-block;
vertical-align:top;    
}
div#columns figure {
    display: inline-block;
    background: #FEFEFE;
    border: 2px solid #FAFAFA;
    box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
    margin: 0 0px 15px;
    -webkit-column-break-inside: avoid;
    -moz-column-break-inside: avoid;
    column-break-inside: avoid;
    padding: 15px;
    padding-bottom: 5px;
    background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
    opacity: 1;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

#columns figure:hover{
    -webkit-transform: scale(1.1);
    -moz-transform:scale(1.1);
    transform: scale(1.1);

}
#columns:hover figure:not(:hover) {
    opacity: 0.4;
}

</style>
 <body>
  <center>
           <div class="search-content">
       <form action = "verifform.php" method = "GET">
        <h4>Rechercher 
    <input type="search" name="terme" >
    <button type="submit" name="s" value="Rechercher" class="btn btn-danger">chercher</button>
    </h4>
            </center>                               
        </form>
  <?php
  while($terme_trouve = $select_terme->fetch())
  {
  	  ?>  <div class="element" id="columns" >
                            
                        
                            <figure>
                                <tr>
  <td><?php echo $terme_trouve['nom']; ?></td>
  <td><?php echo $terme_trouve['description']; ?></td>
  <td><?php echo $terme_trouve['quantite']; ?></td>
  
  <td><?php echo $terme_trouve['prix']; ?></td>
    <td><a><img class="" src="<?php echo $terme_trouve['image'];?>" style="width: 100px; height:100px;"></a></td>

  <td><?php echo $terme_trouve['type']; ?></td>


</tr>
                                </figure>     
                                        
                            </div>
                        
                                
                             
                             
                           
                    


                  <?php
  
  }
  $select_terme->closeCursor();
   ?>
 </body>
</html>