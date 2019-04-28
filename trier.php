  <!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php

include "core/themeC.php";
$platc = new themeC();
 $list = $platc->trier();
?>

<head>

  <style>
    .product-grid {
      font-family: Raleway, sans-serif;
      text-align: center;
      padding: 0 0 0px;
      border: 0px solid rgba(0, 0, 0, .1);
      overflow: hidden;
      position: relative;
      z-index: 1
    }

    .product-grid .product-image {
      position: relative;
      transition: all .3s ease 0s
    }

    .product-grid .product-image a {
      display: block
    }

    .product-grid .product-image img {
      width: 100%;
      height: auto
    }

    .product-grid .social {
      width: 150px;
      padding: 0;
      margin: 0;
      list-style: none;
      opacity: 0;
      transform: translateY(-50%) translateX(-50%);
      position: absolute;
      top: 60%;
      left: 50%;
      z-index: 1;
      transition: all .3s ease 0s
    }

    .product-grid:hover .social {
      opacity: 1;
      top: 50%
    }

    .product-grid .social li {
      display: inline-block
    }

    .product-grid .social li a {
      color: #fff;
      background-color: #333;
      font-size: 16px;
      line-height: 40px;
      text-align: center;
      height: 40px;
      width: 40px;
      margin: 0 2px;
      display: block;
      position: relative;
      transition: all .3s ease-in-out
    }

    .product-grid .social li a:after,
    .product-grid .social li a:before {
      content: attr(data-tip);
      color: #fff;
      background-color: #000;
      font-size: 12px;
      letter-spacing: 1px;
      line-height: 20px;
      padding: 1px 5px;
      white-space: nowrap;
      opacity: 0;
      transform: translateX(-50%);
      position: absolute;
      left: 50%;
      top: -30px
    }

    .product-grid .social li a:after {
      content: '';
      height: 15px;
      width: 15px;
      border-radius: 0;
      transform: translateX(-50%) rotate(45deg);
      top: -20px;
      z-index: -1
    }

    .product-grid .social li a:hover:after,
    .product-grid .social li a:hover:before {
      opacity: 1
    }

    .product-grid .product-discount-label,
    .product-grid .product-new-label {
      color: #fff;
      background-color: #ef5777;
      font-size: 12px;
      text-transform: uppercase;
      padding: 2px 7px;
      display: block;
      position: absolute;
      top: 10px;
      left: 0
    }

    .product-grid .product-discount-label {
      background-color: #333;
      left: auto;
      right: 0
    }

    .product-grid .product-content {
      background-color: #fff;
      text-align: center;
      padding: 12px 0;
      margin: 0 auto;
      position: absolute;
      left: 0;
      right: 0;
      bottom: -27px;
      z-index: 1;
      transition: all .3s
    }

    .product-grid:hover .product-content {
      bottom: 0
    }

    .product-grid .price {
      color: #333;
      font-size: 17px;
      font-family: Montserrat, sans-serif;
      font-weight: 700;
      letter-spacing: .6px;
      margin-bottom: 8px;
      text-align: center;
      transition: all .3s
    }

    .product-grid .price span {
      color: #999;
      font-size: 13px;
      font-weight: 400;
      text-decoration: line-through;
      margin-left: 3px;
      display: inline-block
    }

    .product-grid .add-to-cart {
      color: #000;
      font-size: 13px;
      font-weight: 600
    }

    @media only screen and (max-width:990px) {
      .product-grid {
        margin-bottom: 30px
      }

      #bri {
        font-weight: bold;

      }

      .oo {
        width: 20px;
        border-radius: 50%;
        display: block;
        height: 20px;
      }

      #x {

        font-size: 100px;

      }

      #y {

        font-size: 50px;

      }

      #uu {
        padding: 0px;
      }

      font-weight: bold;
      font-family: 'Titillium Web',
      sans-serif;
    }

    #alls {
      text-align: right;
      font-size: 20px;
      margin-right: 10px;
    }
  </style>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>MONALIZA - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: MONALIZA
    Template URL: https://templatemag.com/MONALIZA-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  

  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row mt">
        <div class="col-lg-6 col-md-6 col-sm-12">

          <form method="POST" action="affichertable.php">
            <input type="text" nomt="arearech" name="search" placeholder="Taper pour rechercher ... " required>
            <input type="submit" value="Rechercher" class="btn btn-primary">
          </form>
          <center>
            <h1 nomt="bri"><strong>la listes des tables</strong></h1>
                   <br nomt="y" />


          <br nomt="x" />
          <div class="container">
            <div class="row">
              <table class="table ">
                <thead>
                  <tr>
                    <th>nomt</th>
                  <th>description</th>
                    <th>couleur</th>

    
                    <th>prix</th>
                     <th>supprimer</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  if (!empty($list)) {
                    foreach ($list as $p) {
                      ?>



                      <tr>
                        <th scope="row"><?php echo $p['nomt']; ?></th>
                        <td><?php echo $p['description']; ?></td>
                        <td><?php echo $p['couleur']; ?></td>
                                   
                     
                         <td><?php echo $p['prix']; ?></td>

                       <td><a href="supprimerTable.php?nomt=<?php echo $p["nomt"];  ?>">

                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a></td>
                        







                      </tr>
                     

                    <?php }
                } ?>
                </tbody>
              </table>


            </div>
           
            <?php if (!empty($list)) { ?>
              <a href="trier.php?Name=<?php echo $p["nomt"]; ?>">
                <input class="btn btn-danger" type="button" value="Trier">
              </a>
                            <?php } ?>
                            </center>

          </div>
          <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
    </section>
    <!-- /wrapper -->
  </section>
  <!-- /MAIN CONTENT -->
  <!--main content end-->
  <!--footer start-->

  </section>
 
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
</body>

</html>