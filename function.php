<?php
  
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $userDB = "pedro@mail.com";
    $passDB = "123";

    if (isset($_POST['user'])){
        
        if($user=== $userDB){
            header("location: ../home.php");

        }
        else{
            echo '<script languaje= "javascript">alert("Error en  datos");</script>';
        }
    }
}