<?php
if(isset)($_POST['Regitrarse']){
    $Nickname=$_POST['Nickname']
    $Nombres=$_POST['Nombres']
    $Apellidos=$_POST['Apellidos']
    $Correo=$_POST['Correo']
    $Contraseña=$_POST['Contraseña']
    if ($Nickname==""||$Nombres==""||$Apellidos==""||$Correo==""||$Contraseña="") {
        echo"Verifica los datos, algo salio mal";
    }
    else{
        $Inserta="INSERT INTO dlyp07 Usuarios(Nickname,Nombres,Apellidos,Correo,Contraseña)VALUES($Nickname,$Nombres,$Apellidos,$Correo,$Contraseña)";
        $Insertando=Conecta->query($Inserta);
        if($Insertando > 0){
            echo"Registro Exitoso";
        }
    }
}