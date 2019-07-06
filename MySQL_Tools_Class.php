<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQL_Tools_Class
 *
 * @author Rey
 */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Set MySQLi to throw exceptions

class MySQL_Tools_Class {
    
    //put your code here
    
    function mysql_con()
    
        {
                /*
            * Datos de conexión a MySQL
            */
            $db_database = 'idhiesa';
            $db_hostname = 'localhost';
            $db_username = 'serv_web';
            $db_password = 'Inicio01';

            /*
            * Creación del objeto mysqli
            */

            try {
                     $mysqli = new mysqli($db_hostname, $db_username, $db_password, $db_database);


            } catch (mysqli_sql_exception $e) { 
                return array (false, $e->getMessage());
                        }

            return array (true, $mysqli);

        }
        
        function val_usr($nombre, $pass){
            $mts = new MySQL_Tools_Class();
            $mysqli = $mts->mysql_con();
            
            if(!$mysqli[0])
            {
                echo $mysqli[1];
                
            }
            elseif ($mysqli[0])
            {
                 /*
                * Creación de la consulta SQL
                */
                $query = "SELECT * FROM idhiesa.user_idhiesa where USR_ID = '$nombre' and USR_PASS = '$pass'";             
                /*
                * Guardamos el resultado que devuelve MySQL
                */
                $ms = $mysqli[1];
                $resultado = mysqli_query($ms, $query);
//                echo  "<script>alert('$resultado->num_rows');</script>"; ;
               if ($resultado->num_rows > 0)
                    {
                    return array (true, $userarray = $resultado->fetch_row());
                        
                    } else {
                    
                    return array (false, 'no existe usuario');
                      
                    }
                        /*
                * Iteramos sobre el resultado y mostramos los datos
                */
                /*
                * Liberamos los recursos reservados
                */
                $resultado->free();
                $ms->close();
            }
        }
    }
