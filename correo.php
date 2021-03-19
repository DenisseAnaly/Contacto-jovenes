<?php
if (isset($_POST['Enviar'])){
    if(!empty($_POST['Nombre']) && !empty($_POST['Correo']) && !empty($_POST['Telefono']) && !empty($_POST['mensaje'])){
        $Nombre =$_POST['Nombre'];
        $Correo =$_POST['Correo'];
        $Telefono =$_POST['Telefono'];
        $mensaje =$_POST['mensaje'];
        $header ="From: clubesenchihuahua@gmail.com" . "\r\n";
        $header.="Reply-To: clubesenchihuahua@gmail.com" . "\r\n";
        $header.="X-Mailer: PHP/". phpversion();
        $mail=@mail($Nombre, $Correo, $Telefono, $mensaje, $header);
        if($mail){
            echo"<h4>¡Enviado con exito</h4>";
        }
    }
}