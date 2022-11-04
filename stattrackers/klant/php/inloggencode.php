<?php 
    session_start();
    include_once "../config.php";
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($link, "SELECT * FROM klant WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['wachtwoord'];
            if($user_pass === $enc_pass){
                $status = "Active now";
                $sql2 = mysqli_query($link, "UPDATE klant SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                    header('Location: homep.php');
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                echo "Email or Password is Incorrect!";
            }
        }else{
            echo "$email - This email not Exist!";
        }
    }else{
        echo "All input fields are required!";
    }
?>