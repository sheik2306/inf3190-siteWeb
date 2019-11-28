<?php
 
$data = $database->select("membres", [
        "id",
		"prenom(text)",
		"nom",
        "photo",
        "fonction(parent)"
     
]);
$array1 = array("id", "parent", "text","icon"); 

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Lieux</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />
  <link rel="stylesheet" href="../dist/themes/proton/style.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="../dist/libs/jquery.js"></script>
    <script src="../dist/jstree.min.js"></script>
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
      <div id="jstree-proton-3"></div>
     
    </div>
    <div class="col-4"></div>
  </div>
  </div>

  <script>
      $(document).ready(function() {
        $('#jstree-proton-3').jstree({ 
            'plugins': ["wholerow",'theme', "html_data"],
            // "plugins": [ 'theme', "html_data", "types", "checkbox"],
            
            'core' : {           
    'data' : [
        <?php

        for ($x = 0; $x < sizeof($data); $x++) {
            $array2 = array($data[$x]["id"], $data[$x]["parent"], $data[$x]["text"]." ".$data[$x]["nom"],$data[$x]["photo"]); 
            $array3 = array_combine($array1, $array2);
            echo json_encode($array3).',';
        }
       echo('{"id" : "CADRE", "parent" : "#","icon": "fa fa-user-plus", "text" : "Cadres du syndicat"},');
       echo ('{"id" : "DELEGUE", "parent" : "#","icon": "fa fa-firefox", "text" : "Délégués syndicaux"},');
       echo('{"id" : "MEMBRE", "parent" : "#", "icon": "fa fa-steam-square", "text" : "Simples membres"}');
       
       ?>
    ],
            'themes': {
                'name': 'proton',
                'responsive': true
            }
    
} });

    });
      </script>
</body>

</html>