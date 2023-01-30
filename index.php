<?php
function pretyDump($data){
    highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
}
?>
<!-- pretyDump($allClients); -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
<style>
      body {
        background: purple;
        background-size: cover;
        background-attachment: fixed;
   
      }
      h1{
        color: white;
        text-align : center;
        
      }
      h3{
        color: white;
        text-align : left;
        justify-content : left;
        display : flex;
        font-size : 3vh;
      }
      p{
        color: black;
        text-align : left;
      }
      .custom-button {
        font-size: 3em;
        padding: 20px 40px;
        border: none;
        border-radius: 35px;
        background-color: #00bfff;
        color: white;
        text-transform: uppercase;
        letter-spacing: -2px;
        font-weight: bold;
        transition: all 0.2s ease-in-out;
        box-shadow: 0px 5px 10px #888888;
        margin-right: 20px;
    }
    .custom-button:hover {
        transform: scale(1.1);
        background-color: #008080;
        box-shadow: 0px 10px 20px #888888;
    }
    .custom-button:active {
        transform: scale(0.95);
        box-shadow: none;
    }
    .card {
          border: 1px solid #ccc;
          padding: 20px;
          margin: 20px;
          box-shadow: 2px 2px 8px #ccc;
          transition: all 0.2s ease-in-out;
          width: 300px;
      }
      .card2 {
          border: 1px solid #3366FF;
          padding: 20px;
          margin: 20px;
          box-shadow: 2px 2px 8px #3366FF;
          transition: all 0.2s ease-in-out;
          width: 500px;
          background-color : white;
      }
      .card:hover {
          box-shadow: 2px 2px 8px #555;
      }
     
     /* Nav Bar */
     </style>
<div style="display: flex; justify-content: center;">
  <!-- <container>
      <button class="custom-button" onclick="location.href=''">Partie 1</button>
      <button class="custom-button" onclick="location.href=''">Partie 2</button>
      <button class="custom-button" onclick="location.href=''">Partie 3</button>
    </container> -->
    </div>
<!-- Formulaire Partie 2 -->
<br>

<h1>Exo PDO</h1>


<div class=card2>
 <?php
try
{
	$database = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$allClientsStatement = $database->prepare('SELECT * FROM clients');

$allClientsStatement->execute();
$allClients = $allClientsStatement->fetchAll();


// On affiche chaque recette une à une
foreach ($allClients as $client) {
  ?>
      <p><?php echo $client['lastName']; ?></p>
      
  <?php
  }
  ?> 


<hr>
<h2>exo2</h2> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<hr>

<?php
try
{
	$database = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$showTypesStatement = $database->prepare('SELECT * FROM showTypes');

$showTypesStatement->execute();
$allshowTypes = $showTypesStatement->fetchAll();


// On affiche chaque recette une à une
foreach ($allshowTypes as $showType) {
  ?>
      <p><?php echo $showType['type']; ?></p>
      
  <?php
  }
  ?>


<hr>
 <h2>exo3</h2> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<hr>

<?php
try
{
	$database = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$allClientsStatement = $database->prepare('SELECT * FROM clients');

$allClientsStatement->execute();
$allClients = $allClientsStatement->fetchAll();



// On affiche chaque recette une à une
for ($i=0; $i <=20 ; $i++) { 
  ?>
      <p><?php echo $allClients[$i]['lastName']; ?></p>
      
  <?php
  }
 
  ?> 



<hr>
 <h2>exo4</h2> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<hr>

<?php
try
{
	$database = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$allClientsStatement = $database->prepare('SELECT * FROM clients WHERE card = 1');

$allClientsStatement->execute();
$allClients = $allClientsStatement->fetchAll();



// On affiche chaque recette une à une
foreach ($allClients as $clientCarteFidelite) {
  ?>
      <p><?php echo $clientCarteFidelite['lastName']; ?></p>
      
  <?php
  }
  ?>




<hr>
 <h2>exo5</h2> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<hr>

<?php
try
{
	$database = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$allClientsStatement = $database->prepare('SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName');

$allClientsStatement->execute();
$allClients = $allClientsStatement->fetchAll();



// On affiche chaque client dont le nom commence par M un à un
foreach ($allClients as $clientLettreM) {
  ?>
      <p><?php echo 'Nom: ' . $clientLettreM['lastName'] . ' Prénom : ' . $clientLettreM['firstName']; ?></p>
      
  <?php
  }
  ?>

<hr>
 <h2>exo6</h2> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<hr>

<?php
try
{
	$database = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$showsStatement = $database->prepare('SELECT * FROM shows ORDER BY title');

$showsStatement->execute();
$shows = $showsStatement->fetchAll();



// On affiche chaque spectacle comme ceci : Spectacle par artiste, le date à heure.

foreach ($shows as $show) {
  ?>
      <p><?php echo $show['title'] .' ' . 'par ' . $show['performer'] . ', le ' . $show['date'] . ' à ' . $show['startTime']; ?></p>
      
  <?php
  }
  ?>

<hr>
 <h2>exo7</h2> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<hr>

<?php
try
{
	$database = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$allClientsStatement = $database->prepare('SELECT * FROM clients ORDER BY lastName');

$allClientsStatement->execute();
$allClients = $allClientsStatement->fetchAll();



// On affiche chaque client 
foreach ($allClients as $client) {
  ?>
      <p><?php echo 'Nom : ' . $client['lastName'] . ' Prénom : ' . $client['firstName'] . ' Date de naissance : ' . $client['birthDate'] . ' carte de fidélité : ' . $client['card'] . ' Numéro de carte : ' . $client['cardNumber']; ?></p>
      
      <?php
      if ($client['card'] == 1 ) {
        echo 'Carte de fidélité : oui';
      }else {
        echo 'Carte de fidélité : non';
      }
  }
  ?>

</div>
    </body>
</html>


