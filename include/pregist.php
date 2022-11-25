<?php
include "connect.php";
// 
if(isset($_POST['bntregistrar'])){
    
    $nombres= $_POST['nombre'];
    $apellido1= $_POST['apell'];
    $apellido2="Hernandez";
    $genero="2";
    $tusuario="1";
    $nickname= $_POST['nick'];
    $correo =$_POST['correo'];
    $contraseñas=$_POST['passw'];

    

    $conin = "INSERT INTO usuarios ( `Nombre`, `ApellidoP`, `ApellidoM`, `Id_Genero`, `Email`, `Id_Tusuario`, `Nick`, `Password`) VALUES ('$nombres','$apellido1','$apellido2','$genero','$correo','$tusuario','$nickname','$contraseñas')";
    $guarcon = mysqli_query($conecta, $conin);
    
    if($guarcon){
        ?>
        <h3 class="ok"> te has inscripto correctamente</h3>
        <?php
    }else {
        ?>
        <h3 class="bad"> ups no te has inscripto correctamente</h3>
        <?php
    
    }



  }
?>
