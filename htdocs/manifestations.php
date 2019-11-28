<?php

require 'php/config.php';

$dataLieux = $database->select("lieux", [
	"id",
	"nom"
]);

$dataMembres = $database->select("membres", [
	"id",
    "nom",
    "prenom"
]);


$prenom = $nom = $dateManifestation = $photo = $fonction = $choix = $dateErr = $prenomErr = $nomErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
$error = FALSE;

  $membre = test_input($_POST["membre"]);
  $lieux = test_input($_POST["lieux"]);
  $dateManifestation = test_input($_POST["dateManifestation"]);


  if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dateManifestation)) {
    $dateErr = 'Mauvais format de date utiliser YYYY-MM-DD';
    $error=TRUE;
} 

   if(!$error){
    echo "data sent";

    $database->insert("manifestations", [
    	"lieux" => $lieux,
    	"membre" => $membre,
        "date" => $dateManifestation
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
    <title>Manifestations</title>
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
            <div class="col-1 col-xs-2 col-sm-2 col-md-2 col-lg-4"></div>
            <div class="col-9 col-xs-8 col-sm-8 col-md-8 col-lg-4">

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="align-items-center"
                    enctype="multipart/form-data">
                    <a style="text-align:center" href="administration.php">Retour a administration.php </a>
                    <label>
                        <h2>Formulaire de manifestation</h2><label>


                            <div class="form-group row">

                                <label style="padding-top:20px;" for="dateManifestation">Date de Manifestation
                                    (AAAA-MM-DD):</label>

                                <div class="input-group">
                                    <input type="text" class="form-control" name="dateManifestation" required
                                        title=" Doit etre le format AAAA-MM-DD">
                                    <div class="input-group-addon">
                                        <span class="error input-group-text"
                                            id="basic-addon">*<?php echo $dateErr;?></span>

                                    </div>

                                </div>





                                <label for="lieux">Lieux a choisir de la Base de donnee:</label>
                                <select class="browser-default custom-select custom-select-md mb-3" name="lieux">
                                    <option value="" disabled selected>Choisir le lieux</option>

                                    <?php
foreach($dataLieux as $data)
{
    echo "<option value='" . $data["id"] ."'>" . $data["nom"] ."</option>";
}
echo "</select>";
?>



                                    <label for="lieux">Membre ID a choisir de la Base de donnee:</label>
                                    <select class="browser-default custom-select custom-select-md mb-3" name="membre">
                                        <option value="" disabled selected>Choisir l'id du membre par son nom</option>

                                        <?php
foreach($dataMembres as $data)
{
    echo "<option value='" . $data["id"] ."'>" . $data["nom"]." ".$data["prenom"] ."</option>";
}
echo "</select>";
?>


                            </div>
                         <div class="col-8 text-center">
                            <button type="submit" class="btn btn-dark" name="submit" style="text-align:center">Submit</button>
</div>
                </form>
            </div>
            <div class="col-1 col-xs-2 col-sm-2 col-md-2 col-lg-8"> </div>
        </div>



        <div class="row ">
            <div class="col-1 col-sm-2 col-md-2 col-lg-4"></div>
            <div class="col-9 col-sm-10 col-md-6 col-lg-4 text-center">

                <?php
    include 'php/organigramme.php';
    ?>
  <div class="col-1 col-sm-2 col-md-2 col-lg-4"></div>
            </div>
          

        </div>
    </div>
</body>

</html>