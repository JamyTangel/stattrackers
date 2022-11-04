<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: ../klant/homep.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="container">
   <div class="wrapper">
    <section class="form signup">
      <header>Registreren</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>

        <div class="field input">
            <label>Naam</label>
            <input type="text" name="naam" placeholder="naam" required>
          </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="email" required>
        </div>
        <div class="field input">
          <label>Wachtwoord</label>
          <input type="password" name="password" placeholder="wachtwoord" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Registeren">
        </div>
      </form>
      <div class="link">Al een account? <a href="index1.php">Inloggen</a></div>
    </section>
  </div>
  <script src="js/registreren.js"></script>

</body>
</html>

