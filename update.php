<?php
session_start();
if(isset($_GET['id_etudiant'])){
//header('Location: index.php');

}

include 'model/connect.php';

$id = $_GET['id'];

$sql = $conn->prepare("SELECT id_etudiant prenom, nom FROM etudiants WHERE id_etudiant = ?;");
$sql->execute([$id]);
$eleve = $sql->fetch(PDO::FETCH_OBJ);
print_r($eleve);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualiser données d'un élève</title>
</head>
<body>
<main>
<h2>Actualiser les données d'un élève</h2>
<form method="POST" action="updateE.php">

<table>
<tr>
  <td>Prénom</td>
  <td><input type='text' name="prenom" value="<?php echo $eleve->prenom; ?>"></td>
</tr>
<tr>
  <td>Nom</td>
  <td><input type='text' name="nom"></td>
</tr>

<td><input name='actualiserE' type='submit' id='actualiserE' value='Actualiser' /></td>
</table>
</form>



</main>
</body>
</html>