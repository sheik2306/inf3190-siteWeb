<?php

require_once 'php/config.php';

$prenom = $nom = $datenaissance = $photo = $fonction = $choix = $dateErr = $prenomErr = $nomErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
$error = FALSE;

  $prenom = test_input($_POST["prenom"]);
  $nom = test_input($_POST["nom"]);
  $datenaissance = test_input($_POST["datenaissance"]);
  $choix = test_input($_POST["choix"]);

  if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $datenaissance)) {
    $dateErr = 'Mauvais format de date utiliser YYYY-MM-DD';
    $error=TRUE;
} 
if(!preg_match("/[a-zA-Z0-9]{0,25}/", $nom)) {
    $nomErr = 'Mauvais format , moins de 25 caracteres';
    $error=TRUE;
} 
if(!preg_match("/[a-zA-Z0-9]{0,25}/", $prenom)) {
    $prenomErr = 'Mauvais format , moins de 25 caracteres';
    $error=TRUE;
} 


     $infoFich = $_FILES["fileName"];
    $fileName = $infoFich['name']; // nom du fichier chargé par l,utilisateur (get array 'name')
    $tmpFile=$infoFich['tmp_name'];// fichier temporaire après téléversement
    $saveDir="img";
    $savedFile="$saveDir"."/$fileName";

    echo $savedFile."<br>";

    if(!file_exists($saveDir)){
        //si le dossier n'existe pas
        mkdir("$saveDir")||die("<span style='color:red'>impossible de créer le dossier $saveDir</span>");
        // Au besoins donner les permission en écriture dans le dossier : chmod o+w NOM_DOSSIER
        // NOM_DOSSIER doit correspondre au non du dossier dans lequel on doit créer le sous dossier pour enregistrer
    }
    
    move_uploaded_file("$tmpFile","$savedFile")||die("<span style='color:red'>impossible de saugarder $fileName  
    dans $saveDir</span>");
    //move_uploaded_file($old,$new) enregistrer le fichier televersé d,un dossier à l'autre 
   //affichage image charge
   echo "<img src='".$savedFile."' class='img img-circle center-block'  style='width:200px;' alt='image téléversée'>";

   if(!$error){
    echo "<br>"."data sent";

    $database->insert("membres", [
    	"prenom" => $prenom,
    	"nom" => $nom,
        "datenaissance" => $datenaissance,
        "photo" => $savedFile,
        "fonction" => $choix
	]);

} else {
    echo "<br>"."Erreur dans la form";
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>

  

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Lieux</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <meta name="description" content="Site syndicale, plan de l'arena et leurs membres" />
    <meta name="Author" content="Alex Dufour-Couture" />
    <meta content='width=device-width, initial-scale=1' name='viewport' />
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>


    <div class="container-fluid">
        <div class="row ">
        <div class="col-4"></div>
            <div class="col-5">
      
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="align-items-center" enctype="multipart/form-data">
                <a style="text-align:center" href="administration.php">Retour a administration.php </a><br>
                    <label >Formulaire des Membres</label>
                    

                    <div class="form-group row ">
                        <div class="col-xs-3 ">
                            <label for="prenom">Prenom:</label>

                            <div class="input-group">
                                <input type="text" class="form-control" name="prenom" required
                                    title=" Doit etre moins que 25 caracteres">
                                <div class="input-group-addon">
                                    <span class="error input-group-text"
                                        id="basic-addon">*<?php echo $prenomErr;?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-xs-3">
                            <label for="nom">Nom:</label>

                            <div class="input-group">
                                <input type="text" class="form-control" name="nom" required
                                    title=" Doit etre moins que 25 caracteres">
                                <div class="input-group-addon">
                                    <span class="error input-group-text" id="basic-addon">*<?php echo $nomErr;?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-xs-2">
                            <label for="datenaissance">Date de Naissance (AAAA-MM-DD):</label>

                            <div class="input-group">
                                <input type="text" class="form-control" name="datenaissance" required
                                    title=" Doit etre le format AAAA-MM-DD">
                                <div class="input-group-addon">
                                    <span class="error input-group-text" id="basic-addon">*<?php echo $dateErr;?></span>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="radio">
                        <label><input type="radio" name="choix" value="CADRE" required>CADRE</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="choix" value="DELEGUE">DELEGUE</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="choix" value="MEMBRE">MEMBRE</label>
                    </div>

                    <div class="form-group row">
                    <label for="fileName">Choisir une image .jpg a uploader</label>
                    <div class="input-group">
                    <input type="file" name="fileName" >
                    </div>
                    </div>
                    <button type="submit" class="btn btn-dark" name="submit">Submit</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
       
       
    </div>
    <footer>
      
    <?php
    include 'php/organigramme.php';
    ?>

        </footer>
</body>

</html>