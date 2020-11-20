<?php
session_start();
include "classes/db.php";
include "classes/config.php";
$db=new database();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    if($name=="admin"&&$pass=="1234"){
        $_SESSION['login']=true;
        header("location:success.php");
    }
        
        
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP SESSION</title>
    <link rel="stylesheet" href="css/demo.css">

</head>
<style>


</style>

<body>
    <div class="frm_header">
        <h2 style="text-align:center;">PHP SESSION </h2>
    </div>
    <div class="frm_main">

        <form action="#" method="post">


            <input type="text" placeholder="Enter user name " name="name" required><br>
            <input type="password" placeholder="Enteruser password " name="pass" required><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <div class="frm_footer">
        <h2>Jamir.cse@gmail.com</h2>
    </div>
</body>

</html>