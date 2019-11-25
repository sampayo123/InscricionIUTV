<?php


if(isset($_POST['btnRegistro'])){

    $cedula = $_POST['cedula'];
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $rol= $_POST['rol'];
    $carrera= $_POST['carrera'];
    $promedio= $_POST['promedio'];
    $fecha= $_POST['fecha'];
    $usuario= $_POST['usuario'];
    $pass =$_POST['pass'];

    

     //saniamiento y limpieza de la cedula
     if(empty($cedula)){
     
        echo "*Introduce tu cedula";
     }else if(!is_numeric($cedula)){
         echo "*Debe ser un numero";
     }else{
          //no muestra los datos mientras sino no estan llenos todos los campos
          if(!empty($cedula) 
          and !empty($nombre)  
          and !empty($apellido) 
          and !empty($rol) 
          and !empty($carrera)
           and !empty($promedio)
          and !empty($fecha)
          and !empty($usuario)
          and !empty($pass)){
     
           }
     }

     
     //saniamiento y limpieza del nombre
      if(empty($nombre)){
       
      echo "*Introduce un nombre";
     
      }else{
         $nombre= strip_tags($nombre);
         $nombre=htmlspecialchars($nombre);
         $nombre= stripslashes($nombre);
         $nombre=trim($nombre);
     
         filter_var($nombre, FILTER_SANITIZE_STRING);
           //no muestra los datos mientras sino no estan llenos todos los campos
           if(!empty($cedula) 
                     and !empty($nombre)  
                     and !empty($apellido) 
                     and !empty($rol) 
                     and !empty($carrera)
                      and !empty($promedio)
                     and !empty($fecha)
                     and !empty($usuario)
                     and !empty($pass)){
                
                      }
      } 
     
      //saniamiento y limpieza del apellido
      if(empty($apellido)){
       
        echo "*Introduce un apellido";
       
        }else{
           $apellido= strip_tags($apellido);
           $apellido=htmlspecialchars($apellido);
           $apellido= stripslashes($apellido);
           $apellido=trim($apellido);
       
           filter_var($apellido, FILTER_SANITIZE_STRING);
             //no muestra los datos mientras sino no estan llenos todos los campos
             if(!empty($cedula) 
                     and !empty($nombre)  
                     and !empty($apellido) 
                     and !empty($rol) 
                     and !empty($carrera)
                      and !empty($promedio)
                     and !empty($fecha)
                     and !empty($usuario)
                     and !empty($pass)){
                
                      }
        } 
      
    
        //saniamiento y limpieza delapellido
        if(empty($rol)){
       
            echo "*Introduce un rol";
           
            }else if(!is_numeric($rol)){
                echo "*Debe ser un numero";
            }else{
               $rol= strip_tags($rol);
               $rol=htmlspecialchars($rol);
               $rol= stripslashes($rol);
               $rol=trim($rol);
           
               filter_var($rol, FILTER_SANITIZE_STRING);

                 //no muestra los datos mientras sino no estan llenos todos los campos
                 if(!empty($cedula) 
                     and !empty($nombre)  
                     and !empty($apellido) 
                     and !empty($rol) 
                     and !empty($carrera)
                      and !empty($promedio)
                     and !empty($fecha)
                     and !empty($usuario)
                     and !empty($pass)){
                
                      }
            } 


             //saniamiento y limpieza del carrera
      if(empty($apellido)){
       
        echo "*Introduce una carrera";
       
        }else{
           $carrera= strip_tags($carrera);
           $carrera=htmlspecialchars($carrera);
           $carrera= stripslashes($carrera);
           $carrera=trim($carrera);
       
           filter_var($carrera, FILTER_SANITIZE_STRING);
             //no muestra los datos mientras sino no estan llenos todos los campos
             if(!empty($cedula) 
                     and !empty($nombre)  
                     and !empty($apellido) 
                     and !empty($rol) 
                     and !empty($carrera)
                      and !empty($promedio)
                     and !empty($fecha)
                     and !empty($usuario)
                     and !empty($pass)){
                
                      }
        } 
            //limpieza y saneo del promedio
            if(empty($promedio)){
       
            echo "*Introduce un promedio";
           
            }else if(!is_numeric($promedio)){
                echo "*Debe ser un numero";
            }else{
               $promedio= strip_tags($promedio);
               $promedio=htmlspecialchars($promedio);
               $promedio= stripslashes($promedio);
               $promedio=trim($promedio);
           
               filter_var($promedio, FILTER_SANITIZE_STRING);

                 //no muestra los datos mientras sino no estan llenos todos los campos
                 if(!empty($cedula) 
                 and !empty($nombre)  
                 and !empty($apellido) 
                 and !empty($rol) 
                 and !empty($carrera)
                  and !empty($promedio)
                 and !empty($fecha)
                 and !empty($usuario)
                 and !empty($pass)){
            
                  }
            } 
     
             //saniamiento y limpieza del usuario
        if(empty($usuario)){
       
            echo "*Introduce un usuario";
           
            }else if(!is_numeric($usuario)){
                echo "*Debe ser un numero";
            }else{
               $usuario= strip_tags($usuario);
               $usuario=htmlspecialchars($usuario);
               $usuario= stripslashes($usuario);
               $usuario=trim($usuario);
           
               filter_var($usuario, FILTER_SANITIZE_STRING);

                 //no muestra los datos mientras sino no estan llenos todos los campos
                 if(!empty($cedula) 
                 and !empty($nombre)  
                 and !empty($apellido) 
                 and !empty($rol) 
                 and !empty($carrera)
                  and !empty($promedio)
                 and !empty($fecha)
                 and !empty($usuario)
                 and !empty($pass)){
            
                  }
            } 

  //saniamiento y limpieza de la contraseña

            if(empty($pass)){
       
                echo "*Introduce una contraseña";
               
                }else if(!is_numeric($pass)){
                    echo "*Debe ser un numero";
                }else{
                   $pass= strip_tags($pass);
                   $pass=htmlspecialchars($pass);
                   $pass= stripslashes($pass);
                   $pass=trim($pass);
               
                   filter_var($pass, FILTER_SANITIZE_STRING);
    
                     //no muestra los datos mientras sino no estan llenos todos los campos
                     if(!empty($cedula) 
                     and !empty($nombre)  
                     and !empty($apellido) 
                     and !empty($rol) 
                     and !empty($carrera)
                      and !empty($promedio)
                     and !empty($fecha)
                     and !empty($usuario)
                     and !empty($pass)){
                
                      }
                   }
                } 

             
     
     //valida que los datos no se manden vacios a la base de datos
     if(!empty($cedula) 
     and !empty($nombre)  
     and !empty($apellido) 
     and !empty($rol) 
     and !empty($carrera)
      and !empty($promedio)
     and !empty($fecha)
     and !empty($usuario)
     and !empty($pass)){
        include '../include/crear.php';
      }







 
  









?>