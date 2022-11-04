<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <ul>
        <li><a href="homep.php">terug</a></li>
        <li><a href="uitloggen.php">Uitloggen</a></li>
      </ul>
</div>
<br>
<?php
include_once "config.php";
    session_start();
    $sql = "SELECT * FROM `stats` WHERE unique_id = {$_SESSION['unique_id']}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $sql = "SELECT * FROM `stats` WHERE unique_id = {$_SESSION['unique_id']}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT * FROM `stats` WHERE unique_id = {$_SESSION['unique_id']}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result3 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="overzicht">
    <table>
    <tr>
        <td>team</td>
    </tr>

    <?php foreach($result as $team):?>
    <tr>
        <td><?php echo $team["team"]?></td>
    </tr>
    <?php endforeach;?>
    </table>

    <table>
    <tr>
        <td>assists</td>
    </tr>

    <?php foreach($result2 as $assist):?>
    <tr>
        <td><?php echo $assist["assist"]?></td>
    </tr>
    <?php endforeach;?>
    </table>

    <table>
    <tr>
        <td>goals</td>
    </tr>

    <?php foreach($result3 as $goal):?>
    <tr>
        <td><?php echo $goal["goal"]?></td>
    </tr>
    <?php endforeach;?>
    </table>
    </div>
</body>
</html>