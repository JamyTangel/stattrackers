<?php
include "config.php";
session_start();
$sql = mysqli_query($link, "SELECT * FROM klant WHERE unique_id = {$_SESSION['unique_id']}");
if(mysqli_num_rows($sql) > 0){
$row = mysqli_fetch_assoc($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>team</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="header">
                        <div class="titel">
                            <p>Maak een team aan<p>
                        </div>
                    </div>
                    <div class="center">
                        <div class="card-body">
                            <form action="php/teamcode.php" method="POST">
                                <label>team:</label>
                                <div class="form-group mb-3">
                                    <input type="hidden" name="unique_id" value="<?php echo$row['unique_id']?>">
                                    <input type="hidden" name="naam" value="<?php echo$row['naam']?>">
                                    <input type="hidden" name="assist" value="0">
                                    <input type="hidden" name="goal" value="0">
                                    <input type="text" name="team">
                                </div>
                                <br>
                                    <button type="submit" name="save_text" class="btn btn-primary">Maak aan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>