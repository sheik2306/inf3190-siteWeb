<!DOCTYPE html >
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Page de Revendications du syndicat "Les Tanners"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="Stylesheet" href="css/index.css" />
    <meta name="description" content="Site syndicale sur les revendications" />
    
    <meta name="Author" content="Alex Dufour-Couture" />
    <meta content='width=device-width, initial-scale=1' name='viewport' />
</head>

<body>
    <!-- ######################## NAVIGATION ##################### -->
    <nav id="nav">
        <ul class="topnav" id="dropdownMenu">
            <li><a href="Connexion.php">Connexion</a></li>
            <li><a href="Negociations.php">Négociations</a></li>
            <li>
                <div class="dropdown">
                    <!-- Ceci est le dropdown button HOME -->
                    <a href="#">Contact</a>
                    <div class="dropdown-content">
                        <!-- Ceci apparait quand nous :hover -->
                        <img style="text-align:center" class="logo" src="img/logo.png" alt="Logo de compagnie, une spirale mauve" />
                        <div class="boxaddress">
                            <address style="text-align: center">
                                Email@syndicat.com<br>
                                514-456-768<br>
                                Montreal H1V 4R6
                            </address>
                        </div>
                        <a href="Index.html">Lien vers la page officiel</a>
                    </div>
                </div>
            </li>
            <li><a href="Revendications.html">Revendications</a></li>
            <li class="topnav-right"><a href="Publications.html">Publications</a></li>
            <li class="topnav-right"><a href="Anglais.html">EN</a></li>
            <!--  <li class="topnav-right"><a href="#">Sign in</a></li> -->
            <li class="mobileIcon"> <a href="javascript:void(0);" onclick="dropDownMenu()">&#9776;</a></li> <!-- ceci est un Unicode comme text -->
        </ul>
    </nav>




        <!-- ################# 1st ROW ################## -->
    <div class="container">
        <div class="row">
            <div class="col-4" id="titre">
                <div class="boxaddress">
                    <address>
                        Email@syndicat.com<br>
                        514-456-768<br>
                        Montreal H1V 4R6<br>
                        2456 Rue Sherbrooke Est
                        <br>
                        <br>
                        Suivi Nous sur Twitter @LesTanners
                    </address>
                    <img src="img/protest.png" alt="Image de gens avec des pancartes de protestation" />
                </div>
            </div>
            <div class="col-4" id="left">
                <div class="boxcenter">
                    <div class="titre"> Syndicat "les Tanners"
                        <a href="index.html"><img class="logo" src="img/logo.png" alt="Logo de compagnie, une spirale mauve" /></a>
                        Assez c'est assez!
                    </div>
                </div>
            </div>
            <!-- ################# TIRED IMAGE ########################## -->
            <div class="col-4" id="right">
                <img src="img/tired.jpg" alt="Une photo d'un homme salle et fatiguer" width="600" height="400" />
            </div>
        </div>
        <!-- ################# 2ND ROW ################## -->
        <div class="row" style="border-top:2px solid black;">
            <div class="col-6">
                <!--         <div class="leftbox"> -->
                <!--   <h2> Revendications</h2> -->
                <ul class="Revendications">
                    <li style="display:block; text-align: center;">
                    <a href="lieux.php">Formulaire des lieux</a></li>
                    <li><a href="manifestations.php">Formulaire des manifestations</a></li>
                    <li><a href="membres.php">Formulaires des membres</a></li>
                </ul>
            </div>
        </div>



    <!-- ################################################.   FOOTER. ################################################### -->
    <footer>

 
        <a href="index.html"><img class="logo" src="img/logo.png" alt="Logo de compagnie, une spirale mauve" /></a>
      
        <p style="text-align: left;">
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
        </p>

         <h2>Ce site est en dans le cadre du cours <a href="http://www.etudier.uqam.ca/cours?sigle=INF3190" target="_blank">INF3190 </a> a 
             <a href="https://uqam.ca/" target="_blank">l’UQAM </a></h2>
            
                <h2 style="text-decoration: underline; margin-top: 1%;">Developpeur</h2>
            <ul>
            <li>
                Alex Dufour-Couture <br> <a href="mailto:dufour-couture.alex@courrier.uqam.ca">dufour-couture.alex@courrier.uqam.ca</a>
            </li>
            </ul> 
    <button id="btn"  type="button" >
    Montrer ou cacher le JStree
  </button>
  <div id="jstree">
            <?php
    require 'php/config.php';
    include 'php/organigramme.php';
    ?>
    </div>
  
    </footer>

    <script>
      $(document).ready(function(){
        $("#btn").click(function(){
    $('#jstree').toggle();
    });


    }); 
    function dropDownMenu() {
        var x = document.getElementById("dropdownMenu")
        if (x.className == "topnav") {
            x.className += " responsive"; /* devien topnav responsive*/

        } else {
            x.className = "topnav";
        }
    }

    </script>
</body>

</html>