<?php
session_start();
$con = mysqli_connect("localhost","root","","usecase");

if(isset($_POST['save_text']))
{
    $unique_id = $_POST['unique_id'];
    $naam = $_POST['naam'];
    $assist = $_POST['assist'];
    $goal = $_POST['goal'];
    $team = $_POST['team'];

    $query = "INSERT INTO stats (unique_id, name, assist, goal, team) VALUES ('$unique_id', '$naam', '$assist', '$goal','$team')";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: ../homep.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: team.php");
    }
}
?>