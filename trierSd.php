 <!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


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
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>MONA<span>LIZA</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-syrine.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Syrine Kerriou</h5>
          <li class="mt">
            <a href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
                
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Gestion de  strade</span>
              </a>
            <ul class="sub">
         <li><a  href="AjoutStrade.php">ajouter strade</a></li>
              <li><a href="supprimerStrade.php">supprimer strade</a></li>
              <li><a href="ModifierStrade.php">Modifier strade</a></li>
              <li><a href="afficherstrade.php">afficher strade</a></li>
               <li><a href="stat.php">Statistiques des Strades</a></li>
            </ul>
             <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Gestion de table</span>
              </a>
            <ul class="sub">
              <li><a href="AjoutTable.php">ajouter table</a></li>
              <li><a href="supprimerTable.php">supprimer table</a></li>
              <li><a href="ModifierTable.php">Modifier table</a></li>
              <li><a href="affichertable.php">afficher table</a></li>
              <li><a href="statT.php">Statistiques des Tables</a></li>
            </ul>
            <li class="sub-menu">
            <a class="active"href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Gestion de theme</span>
              </a>
            <ul class="sub">
              <li><a href="AjoutTheme.php">ajouter theme</a></li>
              <li><a href="supprimerTheme.php">supprimer theme</a></li>
              <li><a href="ModifierTheme.php">Modifier theme</a></li>
              <li><a href="affichertheme.php">afficher theme</a></li>
              <li><a href="statTh.php">Statistiques des Themes</a></li>
            </ul>
          </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Gestion des clients</span>
              </a>
            <ul class="sub">
              <li><a href="gestionclient.html">modifier profil</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.html">Form Components</a></li>
              <li><a href="advanced_form_components.html">Advanced Components</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.html">Basic Table</a></li>
              <li><a href="responsive_table.html">Responsive Table</a></li>
              <li><a href="advanced_table.html">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
  

  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row mt">
        <div class="col-lg-6 col-md-6 col-sm-12">
<?php

include "core/stradeC.php";
$platc = new stradeC();


  $list = $platc->trierSd();
?>
          <form method="POST" action="afficherstade.php">
            <input type="text" nom="arearech" name="search" placeholder="Taper pour rechercher ... " required>
            <input type="submit" value="Rechercher" class="btn btn-primary">
          </form>
          <center>
            <h1 nom="bri"><strong>la listes des strades</strong></h1>
                   <br nom="y" />


          <br nom="x" />
          <div class="container">
            <div class="row">
              <table class="table ">
                <thead>
                  <tr>
                    <th>nom</th>
                  <th>description</th>

                    <th>quantite</th>
                      <th>type</th>
                    <th>image</th>
                  
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
                        <th scope="row"><?php echo $p['nom']; ?></th>
                        <td><?php echo $p['description']; ?></td>
                        <td><?php echo $p['quantite']; ?></td>
                         <td><?php echo $p['type']; ?></td>
                        <td><a><img class="" src=<?php echo $p ['image'];?> ></a></td>                        
                       
                         <td><?php echo $p['prix']; ?></td>

                       <td><a href="supprimerTable.php?nom=<?php echo $p["nom"];  ?>">

                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a></td>
                        







                      </tr>
                     

                    <?php }
                } ?>
                </tbody>
              </table>


            </div>
           
            <?php if (!empty($list)) { ?>
        <a href="trierSd.php?Name=<?php echo $p["nom"]; ?>">
                <input class="btn btn-danger" type="button" value="Tri Descendant">
              </a>
                <a href="trierS.php?Name=<?php echo $p["nom"]; ?>">
                <input class="btn btn-danger" type="button" value="Tri Ascendant">
              </a>
                            <?php
                             } ?>
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