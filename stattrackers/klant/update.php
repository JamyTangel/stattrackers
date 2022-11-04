<?php
include "config.php";
if(isset($_POST['update']) ){
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $sql =("UPDATE klant SET naam = '$name'WHERE id = '$id' ");
    $result = $link->query($sql);
    if($result){
        header("Location:profiel.php");
    }
}
?>