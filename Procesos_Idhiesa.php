<?php

  
    require'MySQL_Tools_Class.php';

            

    $funtion = filter_input(INPUT_POST, 'Func');
        echo $nombre;
        echo $pass;
        echo $funtion;
    
    $mts = new MySQL_Tools_Class();
       
    If ($funtion == 'Ingresar'){
        
        $nombre =  filter_input(INPUT_POST, 'usr');
        $pass = filter_input(INPUT_POST, 'pass');
        
        $ret = $mts->val_usr($nombre, $pass);
           
           if ($ret[0] == true){
                    
                $ret = $ret[1];

                session_start();
                $_SESSION['tiempo'] = time();
                $_SESSION['Value'] = $ret;
                header("Location: Welcome.php"); 
                        
            } elseif($ret[0] == false) {

                header("Location: index.php?tryaccess='0'");
      
                       
                    }
           
       }
        if($funtion == 'Ingresar Alumnos'){
            
            
           
           
       }
       
       
       

     

//
//            
//            $mst = new MySQL_Tools_Class();
//            /*
//            * Buscamos posibles errores en la conexión
//            */
//            $mysqli = $mst->mysql_con();
//            
//            if(!$mysqli[0])
//            {
//                
//                echo $mysqli[1];
//                
//            }
//            elseif ($mysqli[0])
//            {
//                 /*
//                * Creación de la consulta SQL
//                */
//                $query = "SELECT * FROM idhiesa.user_idhiesa where USR_ID = '$nombre' and USR_PASS = '$pass'";
//                
//                
//                /*
//                * Guardamos el resultado que devuelve MySQL
//                */
//                $ms = $mysqli[1];
//                $resultado = mysqli_query($ms, $query);
//                echo $resultado->num_rows ;
//               if ($resultado->num_rows > 0)
//                    {
//
//                        while ($userarray= $resultado->fetch_array()) {
//                        header("Location: index.php ?userarray=$userarray"); 
//                        }
//                    } else {
//                    $no_user = 1;
//                        header("Location: index.php ?no_user=$no_user");
//                        echo '(No Existen registros);';
//                    }
//                        /*
//                * Iteramos sobre el resultado y mostramos los datos
//                */
//
//                /*
//                * Liberamos los recursos reservados
//                */
//                $resultado->free();
//                $ms->close();
                
//            }
                


            
        ?>
