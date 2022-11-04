<?php
include "config.php";
session_start();
 $sql = ("SELECT * FROM klant WHERE klant.unique_id = '{$_SESSION['unique_id']}'");
$result = $link->query($sql); 
    while ($row=$result->fetch_assoc()) { 
    $id = $row['id']; 
    $unique = $row['unique_id']; 
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>profiel</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
<header>
<div class="header">
    <h1 class="titel">Speler profiel update</h1>
    <a href="homep.php" class="terug"><h3>Terug</h3></a>
</div>
</header>
<body>
<tr> 
<td>
    <form method="post" action="update.php">
    <div class="center">
    Naam:<br> <input type="text" name="name" value="<?php echo  $row['naam']; ?>"><br><br>

          <input type="hidden" value="<?php echo $id; ?>" name="id" >
          <input type="hidden" value="<?php echo $unique_id; ?>" name="unique_id" >
        <input type="submit" class="btn btn-info" value="update" name="update" >
    </div>
</td>
</form>
</tr>
<?php }  ?> 
</table> 
</body>
</html>
