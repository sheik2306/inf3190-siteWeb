<?php

require 'php/config.php';


$prenom = $nomLieux = $datenaissance = $photo = $fonction = $choix = $dateErr = $prenomErr = $nomErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
  $error = FALSE;
  $nomLieux = test_input($_POST["nomLieux"]);
  $comment = test_input($_POST["comment"]);

  echo $nomLieux;

  if(!preg_match('/^.{0,64}$/', $nomLieux)) {

    $nomErr = 'Mauvais format , moins de 64 caracteres';
    $error = TRUE;
} 

if(!$error){
  echo "<br>"."data sent";
  $database->insert("lieux", [
    "id" => $id,
    "nom" => $nomLieux,
    "commentaire" => $comment
    ]);
  }else {
    echo "Erreur data not sent";
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
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
       

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <a style="text-align:center" href="administration.php">Retour a administration.php </a><br>
          <label >Formulaire du lieux</label>

          <div class="form-group row">

            <div class="col-xs-3">
              <label for="nom">Nom:</label>

              <div class="input-group">
                <input type="text" class="form-control" name="nomLieux" required
                  title=" Doit etre moins que 25 caracteres">
                <div class="input-group-addon">
                  <span class="error input-group-text" id="basic-addon">*<?php echo $nomErr;?></span>
                </div>
              </div>
            </div>
 

          <div class="col-xs-3">
            <div class="form-group">
              <label for="comment">Comment:</label>

              <div class="input-group">
                <textarea name="comment" rows="5" cols="40"></textarea>

              </div>
            </div>
          </div>
  </div>


          <button type="submit" class="btn btn-dark" name="submit">Submit</button>
          
      </div>
      
      </form>
    </div>
    <div class="col-4"></div>
  </div>
  </div>
  <footer>
 
    <?php
    include 'php/organigramme.php';
    ?>

    </footer>
</body>

</html>