<?php

session_start(); 


$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "demo";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}





if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM loginform WHERE user='$uname' AND pass='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user'] === $uname && $row['pass'] === $pass) {

                // echo "Logged in!";

                $_SESSION['user'] = $row['user'];

                $_SESSION['pass'] = $row['pass'];

                header("Location: admindash.html");
                // echo "sucessfully";

                exit();

            }else{

                header("Location: login.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: login.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: login.html?error=incorrect password");
    // echo "hello incorrect pass ok";

    exit();

}