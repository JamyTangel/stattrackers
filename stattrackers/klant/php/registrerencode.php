<?php
    session_start();
    include_once "../config.php";
    $naam = mysqli_real_escape_string($link, $_POST['naam']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    if(!empty($naam)  && !empty($email)  && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($link, "SELECT * FROM klant WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{

                $ran_id = rand(time(), 100000000);
                $status = "Active now";
                $encrypt_pass = md5($password);
                $insert_query = mysqli_query($link, "INSERT INTO klant (unique_id, naam, email, wachtwoord, status)
                VALUES ({$ran_id}, '{$naam}', '{$email}', '{$encrypt_pass}', '{$status}')");
                if($insert_query){
                    $select_sql2 = mysqli_query($link, "SELECT * FROM klant WHERE email = '{$email}'");
                    if(mysqli_num_rows($select_sql2) > 0){
                        $result = mysqli_fetch_assoc($select_sql2);
                        $_SESSION['unique_id'] = $result['unique_id'];
                        echo "success";
                    }else{
                        echo "This email address not Exist!";
                    }
                }else{
                    echo "Something went wrong. Please try again!";
                }
                        
            }
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>