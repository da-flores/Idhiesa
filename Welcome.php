<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <h1>Bienvenido</h1>
    <body>
        <?php
   
            session_start();
            $button = filter_input(INPUT_POST, 'Func');
            echo $button;
            
            
            $inactivo = 30;

            if(isset($_SESSION['tiempo']) ) {

                $vida_session = time() - $_SESSION['tiempo'];

                if($vida_session > $inactivo) {
                    
                    session_destroy();
                    
                    echo '<script>alert("Sesion finaliza");window.location.href="index.php";</script>';

                }
            }
            $_SESSION['tiempo'] = time();

            $a = $_SESSION["Value"];
            echo $a[2];

            If($a[2] == 'A'){
                ?>
                    <form  name="form1" method=post action="Welcome.php">
                        <input type="submit" value="Ingresar Alumnos" name="Func"><br>
                    </form>
                    <form  name="form1" method=post action="Welcome.php">    
                        <input type="submit" value="Ingresar Profesores" name="Func"><br>
                    </form>
                    <form  name="form1" method=post action="Welcome.php"> 
                        <input type="submit" value="Ingresar Carreras" name="Func"><br>
                    </form>
                    <form  name="form1" method=post action="Welcome.php">
                        <input type="submit" value="Ingresar Materias" name="Func"><br>
                    </form>
                <?php
                    if($button == 'Ingresar Alumnos'){
                ?>
                        <form  name="form1" method=post action="Procesos_Idhiesa.php">
                            <input type="text" value="nombre del aulumno" name="Func"><br>
                            <input type="text" value="direccion" name="Func"><br>
                            <input type="text" value="Telefono" name="Func"><br>
                            <input type="submit" value="Guaradar" name="Func"><br>
                        </form>
                <?php

                    }elseif($button == 'Ingresar Profesores'){
                      
                ?>
                        <form  name="form1" method=post action="Procesos_Idhiesa.php">
                            <input type="text" value="nombre del procesor" name="Func"><br>
                            <input type="text" value="direccion" name="Func"><br>
                            <input type="text" value="Telefono" name="Func"><br>
                            <input type="submit" value="Guaradar" name="Func"><br>
                        </form>
                <?php        
                        
                    }elseif($button == 'Ingresar Carreras'){
                      
                ?>
                        <form  name="form1" method=post action="Procesos_Idhiesa.php">
                            <input type="text" value="Nombre de la carrera" name="Func"><br>
                            <input type="text" value="perido" name="Func"><br>
                            
                            <input type="submit" value="Guaradar" name="Func"><br>
                        </form>
                <?php        
                        
                    }elseif($button == 'Ingresar Materias'){
                      
                ?>
                        <form  name="form1" method=post action="Procesos_Idhiesa.php">
                            <input type="text" value="nombre de la materia" name="Func"><br>
                            <input type="text" value="de que carrera" name="Func"><br>
                            <input type="text" value="en que bloque" name="Func"><br>
                            <input type="submit" value="Guaradar" name="Func"><br>
                        </form>
                <?php        
                        
                    }
                
       
            }elseif($a[2] == 'B'){
                 ?>
                    <form  name="form1" method=post action="Welcome.php.php">
                        <input type="submit" value="informacion de usurio" name="Func"><br>
                    </form>    
                    <form  name="form1" method=post action="Welcome.php.php">    
                        <input type="submit" value="informacion de materias" name="Func"><br>
                    </form>
                <?php
                
 
            }

        
        
        
      
        
        
        ?>
    </body>
</html>
