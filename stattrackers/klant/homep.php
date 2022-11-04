<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <ul class="menu">
        <li><a href="profiel.php">Profiel</a></li>
        <li><a href="uitloggen.php">Uitloggen</a></li>
      </ul>
</div>
<br><br>
<div class="titel">
    <p>Welkom bij Stattrackers</p>
</div>
<div class="knoppen">
    <form name = "team" action="team.php" method="POST">
        <input type="submit" name="button1" class="button" value="Team maken">
    </form>
    <form name = "overzicht" action="dashboard.php" method="POST">
        <input type="submit" name="button2" class="button" value="Overzicht">
    </form>
</div>
</body>
</html>