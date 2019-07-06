<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loguin IDHIESA</title>
    </head>
    <body>
        <form name="formularioDatos"method="POST"action="Procesos_Idhiesa.php">
            
            <h1>Loggin</h1>
            <br>Usuario:
            <input type="text" name="usr" placeholder='Usuario'><br>
            <br>contraseña:
            <input type="password" name="pass" placeholder='Contraseña'><br>
            <input type="submit" value="Ingresar" name="Func">
        </form>
        
        <?php
            

            $recov = filter_input(INPUT_POST, 'recov');
            $try = filter_input(INPUT_GET, 'tryaccess');

         
        if(!empty($try) and $try == 0){
            echo "<label> usuario o contraseña incorrectos </label>";
            echo "<label> recupera tu contraseña<a href='User_recovery.php'> aqui </a></label>";

        }elseif ($recov == true) {
        echo "<label> Correo enviado, favor de validar</label>";
            
        }
   
                
        ?>
        
<!--        <input type="reset">-->
        
        
    </body>
</html>
