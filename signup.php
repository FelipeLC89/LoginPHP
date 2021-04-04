<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //means that something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
                //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else {
            echo "Please enter some valid information!";
        }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <style type="text/css">
    
    #text{

        height: 25px;
        border-radius: 5px;
        padding: 6px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button {
        
        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }
    
    #box {

        background-color: black;
        margin: auto;
        width: 400px;
        padding: 40px;
    }
    
    </style>

    <div id="box">
    
    <form method="post">
    <div style="font-size: 20px; margin: 10px; color:white;">CADASTRO</div>
        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="OK"><br><br>

        <a href="login.php">Clique para Fazer Login</a><br><br>
    </form>

    </div>
</body>
</html>