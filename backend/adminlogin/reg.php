<?php


$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

$conn = new mysqli('localhost','root','','demo');
if($conn-> connect_error)
{
    die ('connection Failed : '.$conn->connect_error);
}
else
{
    if($password===$confirm_password)
    {
        $stmt=$conn->prepare("insert into registration (username,email,password,confirm_password)
        values(?,?,?,?)");
        $stmt->bind_param("ssss",$username,$email,$password,$confirm_password);
        $stmt->execute();

        header("Location: login.html?usersucessfully registered.");


        $stmt-> close();
        $conn->close();
        
    }
    else
    {
        echo"pass and cpass didn't match";
    }

}
?>