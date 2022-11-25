
<?php

   include "connect.php";

   if(isset($_POST['btnentrar'])){

    //$usuarioa=$conexion->real_escape_string($_POST['Usuario']);
    //$passwordd=$conexion->real_escape_string($_POST['password']);

    $user=$_POST['Usuario'];
    $pass=$_POST['password'];

    $consulta="SELECT * FROM usuarios WHERE Nick='$user' and Password = '$pass'";
    if($resultado=$conexion->query($consulta)){
        while($row=$resultado->fetch_array()){
            $userok =$row['Nick'];
            $passok =$row['Password'];

        }
        $resultado->close();

    }
    $conexion->close();
    if(isset($user)  && isset($pass)){
        if($user==$userok && $pass== $passok){
            $_SESSION['login']= TRUE;
            $_SESSION['Usuario']= $usuario;

            header("location:index2R.php");
        }
        else{
            
            
            header("location:recuperar.html");
        
        }
    }
   
    }
    
?>
