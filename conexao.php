<?php 
session_start();
$login = $_POST["username"];
$entrar = $_POST["entrar"];
$password = $_POST["senha"];
$connect = mysqli_connect("localhost","root","","cadastro");
   if (isset($entrar)){

    $verificar = mysqli_query($connect, "SELECT * FROM usuarios WHERE name = '". $login ."' AND password = '". $password ."'");
      if(mysqli_num_rows($verificar) == 0){
         echo "<h1>Usuário ou senha estão incorretos</h1>";
        
        exit();
      }else{
        setcookie("login",$login);
        header("Location:index.php");
      }


   }



?>