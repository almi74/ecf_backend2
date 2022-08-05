
<?php
include("model/connect.php");

$stmt = $conn -> query("SELECT id_etudiant, prenom, nom FROM etudiants LIMIT 6");
$eleves = $stmt->fetchAll(PDO::FETCH_OBJ);
print_r($eleves);



// try{
//   $stmt = $conn->prepare("SELECT id_etudiant, prenom, nom FROM etudiants");
//   $stmt->execute();

// $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

// }
  
// catch(PDOException $e) {
//   echo "Error: " . $e->getMessage();
// }
// $conn = null;




?>


<!doctype html>
<html lang="en">
  <head>
    <title>Gestion des étudiants et des examens</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

  </head>
  <body>

  <main>
<form method="POST" action="insert.php">
  <h2>Saisie des notes</h2>
<table>
<tr>
  <td>Code de l'examen</td>
  <td><input type='text' name="id_examen"></input></td>
</tr>
<tr>
  <td>Matière</td>
  <td><input type='text' name="matiere"></input></td>
</tr>
<tr>
  <td>Code étudiant</td>
  <td><input type='text' name="id_etudiant"></input></td>
</tr>
<tr>
  <td>Nom</td>
  <td><input type='text' name="nom"></input></td>
</tr>
<tr>
  <td>Note</td>
  <td><input type='text' name="note"></input></td>
</tr>
<td><input name='insert' type='submit' id='insert' value='Valider' /></td>
</table>
</form>

<h2>Ajout d'un nouvel élève</h2>
<form method="POST" action="create.php">
<table>
<tr>
  <td>Prénom</td>
  <td><input type='text' name="prenom"></td>
</tr>
<tr>
  <td>Nom</td>
  <td><input type='text' name="nom"></td>
</tr>
<td><input name='create' type='submit' id='create' value='Ajouter' /></td>
</table>
</form>

    <h1>Liste des étudiants</h1>
  
    <table>
      <thead>
      <tr>
      <th>Code étudiant</th>
      <th>Prénom </th>
      <th>Nom</th>
      <th>Mathématiques </th>
      <th>Histoire-géo</th>
      <th>Moyenne générale</th>
    </tr>
    </thead>
    <tbody>
      <?php
      foreach($eleves as $data){

      
      ?>
    <tr>
      <td><?php  echo $data->id_etudiant ?></td>
      <td><?php  echo $data->prenom ?></td>
      <td><?php  echo $data->nom ?></td>
      <td></td>
      <td></td>
      <td></td>

      <td><a href="update.php"><input name='update' type='submit' id='update' value='Modifier' /></a></td>
      <td><a href="delete.php"><input name='delete' type='submit' id='delete' value='Supprimer' /></a></td>

      <?php 

}
?>
      </tr>
 
  
  
    </tbody>
    </table>
  </main>
      
    <!-- Bootstrap JavaScript Libraries -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> -->
  </body>
</html>