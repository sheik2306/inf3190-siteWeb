<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>

        <head>
            <meta charset="utf-8" />
            <title>Historique des greves</title>
            <!-- <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <link rel="stylesheet" href="../css/bootstrap-grid.min.css" /> -->
            <link rel="stylesheet" href="../css/index.css" />
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />
            <link rel="stylesheet" href="../dist/themes/proton/style.min.css" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
            <script src="../dist/libs/jquery.js"></script>
            <script src="../dist/jstree.min.js"></script>
            <meta name="description" content="Site syndicale, plan de l'arena et leurs membres" />
            <meta name="Author" content="Alex Dufour-Couture" />
            <meta content='width=device-width, initial-scale=1' name='viewport' />


        </head>

        <body>
            <!-- ######################## NAVIGATION ##################### -->
            <nav id="nav">
                <ul class="topnav" id="dropdownMenu">
                    <li><a href="Connexion.php">Connexion</a></li>
                    <li><a href="Negociations.php">Negociations</a></li>
                    <li>
                        <div class="dropdown">
                            <!-- Ceci est le dropdown button HOME -->
                            <a href="#">Contact</a>
                            <div class="dropdown-content">
                                <!-- Ceci apparait quand nous :hover -->
                                <img style="text-align:center" class="logo" src="../img/logo.png"
                                    alt="Logo de compagnie, une spirale mauve" />
                                <div class="boxaddress">
                                    <address style="text-align: center">
                                        Email@syndicat.com
                                        514-456-768
                                        Montreal H1V 4R6
                                        2456 Rue Sherbrooke Est Suite 200
                                    </address>
                                </div>                                
                            <a href="Index.html">Lien vers la page officiel</a>
                        </div>
                       </div>
                    </li>
                    <li><a href="Revendications.html">Revendications</a></li>
                    <li><a href="historique.xml">Historique</a></li>
                    <li class="topnav-right"><a href="Publications.html">Publications</a></li>
                    <li class="topnav-right"><a href="Anglais.html">EN</a></li>
                    <!--  <li class="topnav-right"><a href="#">Sign in</a></li> -->
                    <li class="mobileIcon"> <a href="javascript:void(0);" onclick="dropDownMenu()">&#9776;</a></li>
                    <!-- ceci est un Unicode comme text -->
                </ul>
            </nav>

            <!-- ############################## FIN   NAVIGATION ##################### -->

                <!-- ################# 1st ROW ################## -->
    <div class="container">
        <div class="row">
            <div class="col-4" id="titre">
                <div class="boxaddress">
                    <address>
                        Email@syndicat.com
                        514-456-768
                        Montreal H1V 4R6
                        2456 Rue Sherbrooke Est
                        Suivi Nous sur Twitter @LesTanners
                    </address>
                    <img src="../img/protest.png" alt="Image de gens avec des pancartes de protestation" />
                </div>
            </div>
            <div class="col-4" id="left">
                <div class="boxcenter">
                    <div class="titre"> Syndicat "les Tanners"
                        <a href="index.html"><img class="logo" src="../img/logo.png" alt="Logo de compagnie, une spirale mauve" /></a>
                        Assez c'est assez!
                    </div>
                </div>
            </div>
            <div class="col-4" id="right">
                <!-- ################# TIRED IMAGE a droite ########################## -->
                <img src="../img/tired.jpg" alt="Photo d'une homme salle et fatiguer" width="600" height="400" />
            </div>
        </div>

            
        </div>
            <div class="container-fluid">
                <div class="row" style="border-top:1px solid black; padding-bottom:200px;">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <h2 style="text-align:center">Nos greves</h2>
                        <table border="1">
                            <tr bgcolor="#5642BD">
                                <th style="color:white">Date Debut</th>
                                <th style="color:white">Date Fin</th>
                                <th style="color:white">Cause</th>
                            </tr>
                            <xsl:for-each select="listeGreve/greve">
                                <tr>
                                    <td>
                                        <xsl:value-of select="dateDebut" />
                                    </td>
                                    <td>
                                        <xsl:value-of select="dateFin" />
                                    </td>
                                    <td>
                                        <xsl:value-of select="cause" />
                                    </td>
                                </tr>
                            </xsl:for-each>
                        </table>



                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
 <!-- ################################################.   FOOTER. ################################################### -->
        <footer>
            <a href="index.html"><img class="logo" src="../img/logo.png" alt="Logo de compagnie,une spirale mauve" /></a>
    
            <p style="text-align: left;">
                "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
            </p>

            <h2>Ce site est en dans le cadre du cours <a href="http://www.etudier.uqam.ca/cours?sigle=INF3190" target="_blank">INF3190 </a> a 
             <a href="https://uqam.ca/" target="_blank">UQAM </a></h2>
            
                <h2 style="text-decoration: underline; margin-top: 1%;">Developpeur</h2>
            <ul>
            <li>
                Alex Dufour-Couture  <a href="mailto:dufour-couture.alex@courrier.uqam.ca">dufour-couture.alex@courrier.uqam.ca</a>
            </li>
            </ul> 
 
        </footer>

        </body>

        </html>
    </xsl:template>
</xsl:stylesheet>