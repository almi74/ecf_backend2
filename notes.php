<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
<h1>Gestion des notes/h1>


<h2>Actualiser les notes d'un élève</h2>
<form method="POST" action="updateN.php">
<table>
<tr>
  <td>Code élève</td>
  <td><input type='text' name="exam"></td>
</tr>

<tr>
  <td>Nom</td>
  <td><input type='text' name="matiere"></td>
</tr>

<tr>
  <td>Code exam</td>
  <td><input type='text' name="exam"></td>
</tr>

<tr>
  <td>Matière</td>
  <td><input type='text' name="matiere"></td>
</tr>

<tr>
  <td>Note</td>
  <td><input type='text' name="note"></td>
</tr>

<tr>
  <td>Moyenne générale</td>
  <td><input type='text' name="moyenne"></td>
</tr>
<td><input name='actualiserN' type='submit' id='actualiserN' value='Actualiser' /></td>
</table>

</form>
      

    </main>
    
</body>
</html>