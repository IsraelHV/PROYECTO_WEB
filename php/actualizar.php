<?php

    session_start();
    require 'conexionbd.php';

    $no_boletaA = $_SESSION['boletaA'];
    $contrasena = $_SESSION['contrasena'];

    if(!isset($no_boletaA)){
      header("location: ./loginAdministrativo.php");
    }

    $consulta= ("SELECT * FROM administrador;");
    $queryConsulta= mysqli_query($conexion, $consulta);
    $resultConsulta=mysqli_fetch_array($queryConsulta);

    $boleta_PA = $resultConsulta[0];
    $nombre_PA = $resultConsulta[2];
    $apellidos_PA = $resultConsulta[3];

    $id = $_GET['id'];

    $consulta= ("SELECT * FROM alumno INNER JOIN genero ON alumno.genero = genero.id_genero INNER JOIN alcaldia ON alumno.alcaldia = alcaldia.id_alcaldia INNER JOIN escuela ON alumno.escuela_IPN = escuela.id_escuela INNER JOIN entidad_federativa ON alumno.entidad_Federativa = entidad_federativa.id_entidadFederativa INNER JOIN opcion ON alumno.opcion=opcion.id_opcion INNER JOIN laboratorio ON alumno.horario=laboratorio.id_laboratorio INNER JOIN horario ON laboratorio.horario=horario.id_horario WHERE (No_Boleta='$id');");
    $queryConsulta= mysqli_query($conexion, $consulta);
    $resultConsulta=mysqli_fetch_array($queryConsulta);

    $boleta = $resultConsulta[0];
    $nombre = $resultConsulta[1];
    $paterno = $resultConsulta[2];
    $materno = $resultConsulta[3];
    $fechaNacimiento = $resultConsulta[4];
    $genero = $resultConsulta[5];
    $curp = $resultConsulta[6];
    $calle = $resultConsulta[7];
    $numero = $resultConsulta[8];
    $colonia = $resultConsulta[9];
    $Alcaldia = $resultConsulta[10];
    $cp = $resultConsulta[11];
    $tel = $resultConsulta[12];
    $email = $resultConsulta[13];
    $Escuela = $resultConsulta[14];
    $EscuelaP = $resultConsulta[15];
    $Entidad = $resultConsulta[16];
    $promedio = $resultConsulta[17];
    $opcion = $resultConsulta[18];
    $horario = $resultConsulta[19];

    $idlab = $resultConsulta[30];
    $idhorario =$resultConsulta[32];

    $fecha_Formato = explode("-", $fechaNacimiento); 
    $fecha_Nacimiento_Insert = $fecha_Formato[2]."/".$fecha_Formato[1]."/".$fecha_Formato[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>.::Actualizar Datos::.</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href=".././css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link  rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href=".././css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link  rel = "stylesheet" href = ".././css/materialize-social.css">

  <!-- My CSS -->
  <link href=".././css/mystyle.css" type="text/css" rel="stylesheet" media="screen,projection"/>


  <link rel="icon" type="image/png" href=".././Imagenes/escudoESCOM.png">

</head>

<body>


      <!-- nav -->
    <div class="navbar-fixed" id="navbar-administrador">
  
      <nav class="cyan darken-4" role="navigation">
        
        <div class="nav-wrapper container" id="nav-wrapper-administrador">
  
          <a href=".././index.html" class="brand-logo cyan-text text-accent-2"><i class="material-icons">computer</i>ESCOM</a>
  
          <ul class="right hide-on-med-and-down">
            <li><a href="./salirA.php" class="cyan-text text-accent-2">Inicio</a></li>
            <li><a href="./salirA.php" class="cyan-text text-accent-2">Registrarse</a></li>

  
  
            <!-- Dropdown Trigger -->
            <li><a class="cyan-text text-accent-2" href="./salirA.php">Cerrar Sesi??n<i class="material-icons right">arrow_back</i></a></li>
          
          </ul>
  

          <a href="#" data-target="slide-out" class="sidenav-trigger cyan-text text-accent-2"><i class="material-icons">menu</i></a>
          
        </div>
      </nav>   <!-- nav -->
  
    </div>


  <ul id="slide-out" class="sidenav sidenav-fixed ">
    <li><div class="user-view">
      <div class="background">
        <img src=".././Imagenes/fondoAdministrativo.jpg">
      </div>
      <a href="#user"><img class="circle" src=".././Imagenes/logoAdministrador.png"></a>
      <a href="#name"><span class="white-text name ">Administrador: <?php echo $nombre_PA ?> <?php echo $apellidos_PA ?> </span></a>
      <a href="#email"><span class="white-text email">Boleta Personal: <?php echo $boleta_PA ?></span></a>
    </div></li>

    <li><a href="#!"><i class="material-icons">person</i>Cuenta Administrativa</a></li>
    <li><a href="./menuAdministrador.php">Inicio Administrativo</a></li>
    <li><div class="divider"></div></li>
    <li><a href="./formularioA.php">Registrar Estudiante</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Consultar Estudiantes</a></li>
    <li><a class="waves-effect cyan-accent-2" href="./datosIdentidad.php">Datos de Identidad</a></li>
    <li><a class="waves-effect cyan-accent-2" href="./datosContacto.php">Datos de Contacto</a></li>
    <li><a class="waves-effect cyan-accent-2" href="./datosProcedencia.php">Datos de Procedencia</a></li>
    <li><a class="waves-effect cyan-accent-2" href="./datosRegistro.php">Datos de Registro</a></li>
    <li><div class="divider"></div></li>

    <li><div class="divider"></div></li>
    <li><a class="waves-effect cyan-accent-2" href="./salirA.php">Cerrar Sesi??n<i class="material-icons right">arrow_back</i></a></li>
    <li><div class="divider"></div></li>



  </ul>


  <div class="row">

    <div class="row center col s12 m9 offset-m3">

        <br><br>

        <form class="" id="formulario" action="./update.php" method="POST">

            <div class="row center">

                <div class="col s12">

                    <div class="col s2">

                    <img class="center responsive-img" src=".././Imagenes/logo-ipn.png">

                    </div>

                    <div class="col s8">
                    <h2 class="header center blue-grey-text text-darken-4" >Identidad</h2>
                    </div>

                    <div class="col s2">
                    <img class="responsive-img" src=".././Imagenes/escudoESCOM.png">
                    </div>          
                
                </div>
                

                <div class="col s12 m10 offset-m1 l6 offset-l3 z-depth-3" id="contenedorform">

                    <div class="col s12 m12" id="margen">

                        <br>

                        <div class="row center">
                            <div class="input-field">
                                <i class="material-icons prefix">call_to_action</i>
                                <input disabled value="<?php echo $boleta ?>" id="no_boleta" type="text" class="validate" name="no_boleta">
                                <label for="no_boleta">No. de Boleta:</label>
                                <span class="helper-text" data-error="Boleta Incorrecta" data-success="Boleta Correcta">Boleta con 10 d??gitos</span>
                            </div>
                        </div>

                        <div class="row center">
                            <div class="input-field">
                                <input value="<?php echo $boleta ?>" id="no_boleta" type="hidden" class="validate" name="no_boleta">
                            </div>
                        </div>

                        <div class="row center">
                            <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input value="<?php echo $nombre ?>" id="nombre" type="text" class="validate" name="nombre">
                            <label for="nombre">Nombre:</label>
                            <span class="helper-text" data-error="Nombre Incorrecto" data-success="Nombre Correcto">El nombre s??lo debe contener letras</span>
                            </div>
                        </div>

                        <div class="row center">
                            <div class="input-field">
                            <i class="material-icons prefix">perm_identity</i>
                            <input value="<?php echo $paterno ?>" id="apellido_Paterno" type="text" class="validate" name="apellido_Paterno">
                            <label for="apellido_Paterno">Apellido Paterno</label>
                            <span class="helper-text" data-error="Apellido Paterno Incorrecto" data-success="Apellido Paterno Correcto">El Apellido s??lo debe contener letras</span>
                            </div>
                        </div>

                        <div class="row center">
                            <div class="input-field">
                            <i class="material-icons prefix">person</i>
                            <input value="<?php echo $materno ?>" id="apellido_Materno" type="text" class="validate" name="apellido_Materno">
                            <label for="apellido_Materno">Apellido Materno</label>
                            <span class="helper-text" data-error="Apellido Materno Incorrecto" data-success="Apellido Materno Correcto">El Apellido s??lo debe contener letras</span>
                            </div>
                        </div>

                        <div class="row center">
                            <div class="input-field">
                            <i class="material-icons prefix">event</i>
                            <input type="text" class="datepicker validate" value="<?php echo $fecha_Nacimiento_Insert ?>" id="fecha_nacimiento" name="fecha_nacimiento">
                            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                            <span class="helper-text" data-error="Fecha de Nacimiento Incorrecta" data-success="Fecha de Nacimiento Correcta">Se debe selecccionar la fecha de nacimiento</span>
                            </div>
                        </div>

                        <div class="row center col s12">

                            <div class="input-field col s4"> 
                            <div class="row left">
                                <p>
                                <i class="material-icons prefix">wc</i>
                                <label for="genero">G??nero:</label>
                                </p>
                            </div>
                            </div>

                                <div class="input-field col s4"> 
                                    <p>
                                    <label>
                                        <input name="genero" type="radio" <?php if($genero == '1'){echo("checked");}?> class="validate with-gap" value="1"/>
                                        <span class="item-title">Hombre</span>
                                    </label>
                                    </p>
                                </div>

                                <div class="input-field col s4">   
                                    <p>
                                    <label>
                                        
                                        <input name="genero" type="radio" <?php if($genero == '2'){echo("checked");}?> class="with-gap" value="2"/>
                                        <span class="item-title">Mujer</span>
                                    </label>
                                    </p>
                                </div>

                        </div>

                        <br><br><br><br>

                        <div class="row center">
                            <div class="input-field">
                            <i class="material-icons prefix">vpn_key</i>
                            <input value= "<?php echo $curp ?>" id="curp" type="text" class="validate" name="curp">
                            <label for="curp">CURP:</label>
                            <span class="helper-text" data-error="CURP Incorrecta" data-success="CURP Correcta">La CURP debe contener m??ximo 18 caracteres</span>
                            </div>
                        </div>

                    </div>

                </div>
                </div>


                <h2 class="header center blue-grey-text text-darken-4" >Contacto</h2>

                <div class="col s12 m10 offset-m1 l6 offset-l3 z-depth-3" id="contenedorform">

                <div class="col s12 m12" id="margen">

                    <br>

                    <div class="row center">
                    <div class="input-field">
                        <i class="material-icons prefix">pin_drop</i>
                        <input value="<?php echo $calle ?>" id="calle" type="text" class="validate" name="calle">
                        <label for="calle">Calle:</label>
                        <span class="helper-text" data-error="Calle Incorrecta" data-success="Calle Correcta">La calle s??lo debe contener letras y digitos</span>
                    </div>
                    </div>

                    <div class="row center">
                    <div class="input-field">
                        <i class="material-icons prefix">local_convenience_store</i>
                        <input value="<?php echo $numero ?>" id="numero" type="text" class="validate" name="numero">
                        <label for="numero">N??mero:</label>
                        <span class="helper-text" data-error="N??mero Incorrecto" data-success="N??mero Correcto">Elige un n??mero</span>
                    </div>
                    </div>

                    <div class="row center">
                    <div class="input-field">
                        <i class="material-icons prefix">place</i>
                        <input value="<?php echo $colonia?>" id="colonia" type="text" class="validate" name="colonia">
                        <label for="colonia">Colonia:</label>
                        <span class="helper-text" data-error="Colonia Incorrecta" data-success="Colonia Correcta">La colonia s??lo debe contener letras y digitos</span>
                    </div>
                    </div>

                    <div class="row center col s12">

                    <div class="input-field col s3"> 
                        <div class="row left">
                        <p>
                            <i class="material-icons prefix">location_city</i>
                            <label for="alcaldia">Alcald??a:</label>
                        </p>
                        </div>
                    </div>

                    <div class="input-field col s9"> 
                            <select id="alcaldia" class="icons" name="alcaldia">

                            <option value="0" disabled>--Selecciona tu Alcald??a--</option>

                            <option <?php if($Alcaldia == '1'){echo("selected");}?> value="1">&Aacute;lvaro Obreg&oacute;n</option>
                            <option <?php if($Alcaldia == '2'){echo("selected");}?> value="2">Azcapotzalco</option>
                            <option <?php if($Alcaldia == '3'){echo("selected");}?> value="3">Benito Ju&aacute;rez</option>
                            <option <?php if($Alcaldia == '4'){echo("selected");}?> value="4">Coyoac&aacute;n</option>
                            <option <?php if($Alcaldia == '5'){echo("selected");}?> value="5">Cuajimalpa</option>
                            <option <?php if($Alcaldia == '6'){echo("selected");}?> value="6">Cuauht&eacute;moc</option>
                            <option <?php if($Alcaldia == '7'){echo("selected");}?> value="7">Gustavo A. Madero</option>
                            <option <?php if($Alcaldia == '8'){echo("selected");}?> value="8">Iztacalco</option>
                            <option <?php if($Alcaldia == '9'){echo("selected");}?> value="9">Iztapalapa</option>
                            <option <?php if($Alcaldia == '10'){echo("selected");}?> value="10">Magdalena Contreras</option>
                            <option <?php if($Alcaldia == '11'){echo("selected");}?> value="11">Miguel Hidalgo</option>
                            <option <?php if($Alcaldia == '12'){echo("selected");}?> value="12">Milpa Alta</option>
                            <option <?php if($Alcaldia == '13'){echo("selected");}?> value="13">Tl&aacute;huac</option>
                            <option <?php if($Alcaldia == '14'){echo("selected");}?> value="14">Tlalpan</option>
                            <option <?php if($Alcaldia == '15'){echo("selected");}?> value="15">Venustiano Carranza</option>
                            <option <?php if($Alcaldia == '16'){echo("selected");}?> value="16">Xochimilco</option>

                            </select>
                            <label>Selecciona tu Alcald??a</label>
                            <span class="helper-text" data-error="Alcald??a Incorrecta" data-success="Alcald??a Correcta">Se debe seleccionar la Alcald??a</span>
                    </div>

                    </div>

                    <br><br><br><br><br>

                    <div class="row center">
                    <div class="input-field">
                        <i class="material-icons prefix">gps_fixed</i>
                        <input value="<?php echo $cp?>" id="codigo_postal" type="text" class="validate" size="5" name="codigo_postal">
                        <label for="codigo_postal">C??digo Postal:</label>
                        <span class="helper-text" data-error="C??digo Postal Incorrecto" data-success="C??digo Postal Correcto">El c??digo postal debe contener 5 d??gitos</span>
                    </div>
                    </div>

                    <div class="row center">
                    <div class="input-field">
                        <i class="material-icons prefix">phone_android</i>
                        <input value="<?php echo $tel?>" id="telefono_celular" type="text" class="validate" min="8" max="10" name="telefono_celular">
                        <label for="telefono_celular">Tel??fono Celular:</label>
                        <span class="helper-text" data-error="Tel??fono Celular Incorrecto" data-success="Tel??fono Celular Correcto">El tel??fono debe contener m??ximo 10 d??gitos</span>
                    </div>
                    </div>

                    <div class="row center">
                    <div class="input-field">
                        <i class="material-icons prefix">contact_mail</i>
                        <input value="<?php echo $email?>" id="correo_electronico" type="text" class="validate" name="correo_electronico">
                        <label for="correo_electronico">Correo Electr??nico:</label>
                        <span class="helper-text" data-error="Correo Electr??nico Incorrecto" data-success="Correo Electr??nico Correcto">Inserta tu correo de la forma ********@**.**.**</span>
                    </div>
                    </div>
                </div>

                </div>

                <div class="col s12">
                <h2 class="header center blue-grey-text text-darken-4" >Procedencia</h2>
                </div>

                <div class="col s12 m10 offset-m1 l6 offset-l3 z-depth-3" id="contenedorform">

                <div class="col s12 m12" id="margen">

                    <br>

                    <div class="row center col s12">

                    <div class="input-field col s3"> 
                        <div class="row left">
                        <p>
                            <i class="material-icons prefix">location_city</i>
                            <label for="alcaldia">Escuela:</label>
                        </p>
                        </div>
                    </div>
            
                    <div class="input-field col s9"> 
                            <select id="escuelaP" class="icons" onchange="carg(this);" name="escuelaP">
            
                            <option value="0" disabled >--Selecciona tu escuela--</option>

                            <option <?php if($Escuela == '1'){echo("selected");}?> value="1" data-icon=".././Imagenes/cecyt1.jpg" class="left">CECyT 1 "Gonzalo V&aacute;zquez Vela" IPN</option>
                            <option <?php if($Escuela == '2'){echo("selected");}?> value="2" data-icon=".././Imagenes/cecyt2.png" class="left">CECyT 2 "Miguel Bernard" IPN</option>
                            <option <?php if($Escuela == '3'){echo("selected");}?> value="3" data-icon=".././Imagenes/cecyt3.jpg" class="left">CECyT 3 ???Estanislao Ram&iacute;rez Ruiz??? IPN</option>
                            <option <?php if($Escuela == '4'){echo("selected");}?> value="4" data-icon=".././Imagenes/cecyt4.jpg">CECyT 4 "L&aacute;zaro C&aacute;rdenas" IPN</option>
                            <option <?php if($Escuela == '5'){echo("selected");}?> value="5" data-icon=".././Imagenes/cecyt5.png">CECyT 5 "Benito Ju&aacute;rez" IPN</option>
                            <option <?php if($Escuela == '6'){echo("selected");}?> alue="6" data-icon=".././Imagenes/cecyt6.png">CECyT 6 "Miguel Oth&oacute;n de Mendizabal" IPN</option>
                            <option <?php if($Escuela == '7'){echo("selected");}?> value="7" data-icon=".././Imagenes/cecyt7.png">CECyT 7 "Cuauht&eacute;moc" IPN</option>
                            <option <?php if($Escuela == '8'){echo("selected");}?> value="8" data-icon=".././Imagenes/cecyt8.jpg">CECyT 8 "Narciso Bassols" IPN</option>
                            <option <?php if($Escuela == '9'){echo("selected");}?> value="9" data-icon=".././Imagenes/cecyt9.png">CECyT 9 "Juan de Dios B&aacute;tiz" IPN</option>
                            <option <?php if($Escuela == '10'){echo("selected");}?> value="10" data-icon=".././Imagenes/cecyt10.png">CECyT 10 "Carlos Vallejo M&aacute;rquez" IPN</option>
                            <option <?php if($Escuela == '11'){echo("selected");}?> value="11" data-icon=".././Imagenes/cecyt11.jpg">CECyT 11 "Wilfrido Massieu" IPN</option>
                            <option <?php if($Escuela == '12'){echo("selected");}?> value="12" data-icon=".././Imagenes/cecyt12.png">CECyT 12"Jos&eacute; Mar&iacute;a Morelos" IPN</option>
                            <option <?php if($Escuela == '13'){echo("selected");}?> value="13" data-icon=".././Imagenes/cecyt13.png">CECyT 13"Ricardo Flores Mag&oacute;n" IPN</option>
                            <option <?php if($Escuela == '14'){echo("selected");}?> value="14" data-icon=".././Imagenes/cecyt14.png">CECyT 14"Luis Enrique Erro Soler" IPN </option>
                            <option <?php if($Escuela == '15'){echo("selected");}?> value="15" data-icon=".././Imagenes/cecyt15.jpg">CECyT 15 "Diodoro Ant&uacute;nez Echegaray" IPN</option>
                            <option <?php if($Escuela == '16'){echo("selected");}?> value="16" data-icon=".././Imagenes/cecyt16.png">CECyT 16 "Hidalgo" IPN</option>
                            <option <?php if($Escuela == '17'){echo("selected");}?> value="17" data-icon=".././Imagenes/cecyt17.jpg">CECyT 17 "Le&oacute;n Guanajuato" IPN</option>
                            <option <?php if($Escuela == '18'){echo("selected");}?> value="18" data-icon=".././Imagenes/cecyt18.jpg">CECyT 18 "Zacatecas" IPN</option>
                            <option <?php if($Escuela == '19'){echo("selected");}?> value="19" data-icon=".././Imagenes/cecyt19.png">CECyT 19 "Leona Vicario" - IPN</option>
                            <option <?php if($Escuela == '20'){echo("selected");}?> value="20" data-icon=".././Imagenes/cet1.jpg">CET 1 "Walter Cross Buchanan" IPN</option>
                            <option <?php if($Escuela == '21'){echo("selected");}?> value="21" data-icon=".././Imagenes/otro.png">Otro</option>
            
                            </select>
                            <label>Selecciona tu escuela de procedencia:</label>
                            <span class="helper-text" data-error="Alcald??a Incorrecta" data-success="Alcald??a Correcta">Se debe seleccionar la Escuela</span>
                    </div>
            
                    </div>

                    <br><br><br><br><br><br>

                    <div class="row center">
                    <div class="input-field">
                        <i class="material-icons prefix">local_library</i>
                        <input disabled value="<?php echo $EscuelaP?>" id="escuela_procedencia" type="text" class="validate" min="8" max="10" name="escuela_procedencia">
                        <label for="escuela_procedencia" >Nombre de la Escuela:</label>
                        <span class="helper-text" data-error="Nombre de la escuela Incorrecto" data-success="Nombre de la Escuela Correcto">El nombre de la escuela s??lo debe contener letras y d??gitos</span>
                    </div>
                    </div>


                    <div class="row center col s12">

                    <div class="input-field col s3"> 
                        <div class="row left">
                        <p>
                            <i class="material-icons prefix">pin_drop</i>
                            <label for="entidad">Entidad:</label>
                        </p>
                        </div>
                    </div>
            
                    <div class="input-field col s9"> 
                            <select class="icons" id="entidad" name="entidad">
            
                            <option value="0" disabled>--Selecciona tu entidad--</option>
                            <option <?php if($Entidad == '1'){echo("selected");}?> value="1">Aguascalientes</option>
                            <option <?php if($Entidad == '2'){echo("selected");}?> value="2">Baja California</option>
                            <option <?php if($Entidad == '3'){echo("selected");}?> value="3">Baja California Sur</option>
                            <option <?php if($Entidad == '4'){echo("selected");}?> value="4">Campeche</option>
                            <option <?php if($Entidad == '5'){echo("selected");}?> value="5">Chiapas</option>
                            <option <?php if($Entidad == '6'){echo("selected");}?> value="6">Chihuahua</option>
                            <option <?php if($Entidad == '7'){echo("selected");}?> value="7">Ciudad de M&eacute;xico</option>
                            <option <?php if($Entidad == '8'){echo("selected");}?> value="8">Coahuila</option>
                            <option <?php if($Entidad == '9'){echo("selected");}?> value="9">Colima</option>
                            <option <?php if($Entidad == '10'){echo("selected");}?> value="10">Durango</option>
                            <option <?php if($Entidad == '11'){echo("selected");}?> value="11">Estado de M&eacute;xico</option>
                            <option <?php if($Entidad == '12'){echo("selected");}?> value="12">Guanajuato</option>
                            <option <?php if($Entidad == '13'){echo("selected");}?> value="13">Guerrero</option>
                            <option <?php if($Entidad == '14'){echo("selected");}?> value="14">Hidalgo</option>
                            <option <?php if($Entidad == '15'){echo("selected");}?> value="15">Jalisco</option>
                            <option <?php if($Entidad == '16'){echo("selected");}?> value="16">Michoac&aacute;n</option>
                            <option <?php if($Entidad == '17'){echo("selected");}?> value="17">Morelos</option>
                            <option <?php if($Entidad == '18'){echo("selected");}?> value="18">Nayarit</option>
                            <option <?php if($Entidad == '19'){echo("selected");}?> value="19">Nuevo Le&oacute;n</option>
                            <option <?php if($Entidad == '20'){echo("selected");}?> value="20">Oaxaca</option>
                            <option <?php if($Entidad == '21'){echo("selected");}?> value="21">Puebla</option>
                            <option <?php if($Entidad == '22'){echo("selected");}?> value="22">Quer&eacute;taro</option>
                            <option <?php if($Entidad == '23'){echo("selected");}?> value="23">Quintana Roo</option>
                            <option <?php if($Entidad == '24'){echo("selected");}?> value="24">San Luis Potos&iacute;</option>
                            <option <?php if($Entidad == '25'){echo("selected");}?> value="25">Sinaloa</option>
                            <option <?php if($Entidad == '26'){echo("selected");}?> value="26">Sonora</option>
                            <option <?php if($Entidad == '27'){echo("selected");}?> value="27">Tabasco</option>
                            <option <?php if($Entidad == '28'){echo("selected");}?> value="28">Tamaulipas</option>
                            <option <?php if($Entidad == '29'){echo("selected");}?> value="29">Tlaxcala</option>
                            <option <?php if($Entidad == '30'){echo("selected");}?> value="30">Veracruz</option>
                            <option <?php if($Entidad == '31'){echo("selected");}?> value="31">Yucat&aacute;n</option>
                            <option <?php if($Entidad == '32'){echo("selected");}?> value="32">Zacatecas</option>
                            
                            </select>
                            <label>Selecciona tu entidad federativa de procedencia:</label>
                            <span class="helper-text" data-error="Entidad Federativa Incorrecta" data-success="Entidad Federativa Correcta">Se debe seleccionar la Entidad Federativa</span>
                    </div>
            
                    </div>

                    <br><br><br><br><br>

                    <div class="row center">
                    <div class="input-field">
                        <i class="material-icons prefix">library_books</i>
                        <input value="<?php echo $promedio?>"id="promedio" type="text" class="validate" step="0.01" min="0" max="10" name="promedio">
                        <label for="promedio">Promedio:</label>
                        <span class="helper-text" data-error="Promedio Incorrecto" data-success="Promedio Correcto">El promedio solo debe contener n??meros</span>
                    </div>
                    </div>

                    <div class="row center col s12">

                    <div class="input-field col s4"> 
                        <div class="row left">
                        <p>
                            <i class="material-icons prefix">insert_chart</i>
                            <label for="fecha_nacimiento">ESCOM fue tu:</label>
                        </p>
                        </div>
                    </div>
                
                    <div class="input-field col s4"> 
                        <p>
                            <label>
                            <input name="opcion" type="radio" <?php if($opcion == '1'){echo("checked");}?>  class="validate with-gap" value="1"/>
                            <span class="item-title">1ra Opci??n</span>
                            </label>
                        </p>
                    </div>    

                    <div class="input-field col s4">   
                        <p>
                            <label>
                            <input name="opcion" type="radio" <?php if($opcion == '2'){echo("checked");}?> class="with-gap" value="2"/>
                            <span class="item-title">2da Opci??n</span>
                            </label>
                        </p>
                    </div>

                    <div class="input-field col s4 right">   
                        <p>
                        <label>
                            <input name="opcion" type="radio" <?php if($opcion == '3'){echo("checked");}?> class="with-gap" value="3"/>
                            <span>3er Opci??n</span>
                        </label>
                        </p>
                    </div>

                    <div class="input-field col s4 right">   
                        <p>
                        <label>
                            <input name="opcion" type="radio" <?php if($opcion == '4'){echo("checked");}?> class="with-gap" value="4"/>
                            <span>4ta Opci??n</span>
                        </label>
                        </p>
                    </div>

                    </div>


                    <div class="row center col s12">

                            <div class="input-field col s3"> 
                                <div class="row left">
                                <p>
                                    <i class="material-icons prefix">create</i>
                                    <label for="horario">Registro:</label>
                                </p>
                                </div>
                            </div>

                            <div class="input-field col s9"> 
                                    <select id="horario" class="icons" name="horario">

                                    <option value="0" disabled>--Selecciona el Registro--</option>

                                    <option <?php if($horario == '1'){echo("selected");}?> value="1">LAB-01 2022-01-17 08:45:00</option>
                                    <option <?php if($horario == '2'){echo("selected");}?> value="2">LAB-01 2022-01-17 10:15:00</option>
                                    <option <?php if($horario == '3'){echo("selected");}?> value="3">LAB-01 2022-01-17 11:45:00</option>
                                    <option <?php if($horario == '4'){echo("selected");}?> value="4">LAB-01 2022-01-17 13:15:00</option>
                                    <option <?php if($horario == '5'){echo("selected");}?> value="5">LAB-01 2022-01-17 14:15:00</option>
                                    <option <?php if($horario == '6'){echo("selected");}?> value="6">LAB-01 2021-12-15 15:45:00</option>

                                    <option <?php if($horario == '7'){echo("selected");}?> value="7">LAB-02 2022-01-17 08:45:00</option>
                                    <option <?php if($horario == '8'){echo("selected");}?> value="8">LAB-02 2022-01-17 10:15:00</option>
                                    <option <?php if($horario == '9'){echo("selected");}?> value="9">LAB-02 2022-01-17 11:45:00</option>
                                    <option <?php if($horario == '10'){echo("selected");}?> value="10">LAB-02 2022-01-17 13:15:00</option>
                                    <option <?php if($horario == '11'){echo("selected");}?> value="11">LAB-02 2022-01-17 14:15:00</option>
                                    <option <?php if($horario == '12'){echo("selected");}?> value="12">LAB-02 2021-12-15 15:45:00</option>

                                    <option <?php if($horario == '13'){echo("selected");}?> value="13">LAB-03 2022-01-17 08:45:00</option>
                                    <option <?php if($horario == '14'){echo("selected");}?> value="14">LAB-03 2022-01-17 10:15:00</option>
                                    <option <?php if($horario == '15'){echo("selected");}?> value="15">LAB-03 2022-01-17 11:45:00</option>
                                    <option <?php if($horario == '16'){echo("selected");}?> value="16">LAB-03 2022-01-17 13:15:00</option>
                                    <option <?php if($horario == '17'){echo("selected");}?> value="17">LAB-03 2022-01-17 14:15:00</option>
                                    <option <?php if($horario == '18'){echo("selected");}?> value="18">LAB-03 2021-12-15 15:45:00</option>

                                    <option <?php if($horario == '19'){echo("selected");}?> value="19">LAB-04 2022-01-17 08:45:00</option>
                                    <option <?php if($horario == '20'){echo("selected");}?> value="20">LAB-04 2022-01-17 10:15:00</option>
                                    <option <?php if($horario == '21'){echo("selected");}?> value="21">LAB-04 2022-01-17 11:45:00</option>
                                    <option <?php if($horario == '22'){echo("selected");}?> value="22">LAB-04 2022-01-17 13:15:00</option>
                                    <option <?php if($horario == '23'){echo("selected");}?> value="23">LAB-04 2022-01-17 14:15:00</option>
                                    <option <?php if($horario == '24'){echo("selected");}?> value="24">LAB-04 2021-12-15 15:45:00</option>

                                    <option <?php if($horario == '25'){echo("selected");}?> value="25">LAB-05 2022-01-17 08:45:00</option>
                                    <option <?php if($horario == '26'){echo("selected");}?> value="26">LAB-05 2022-01-17 10:15:00</option>
                                    <option <?php if($horario == '27'){echo("selected");}?> value="27">LAB-05 2022-01-17 11:45:00</option>
                                    <option <?php if($horario == '28'){echo("selected");}?> value="28">LAB-05 2022-01-17 13:15:00</option>
                                    <option <?php if($horario == '29'){echo("selected");}?> value="29">LAB-05 2022-01-17 14:15:00</option>
                                    <option <?php if($horario == '30'){echo("selected");}?> value="30">LAB-05 2021-12-15 15:45:00</option>

                                    <option <?php if($horario == '31'){echo("selected");}?> value="31">LAB-06 2022-01-17 08:45:00</option>
                                    <option <?php if($horario == '32'){echo("selected");}?> value="32">LAB-06 2022-01-17 10:15:00</option>
                                    <option <?php if($horario == '33'){echo("selected");}?> value="33">LAB-05 2022-01-17 11:45:00</option>
                                    <option <?php if($horario == '34'){echo("selected");}?> value="34">LAB-06 2022-01-17 13:15:00</option>
                                    <option <?php if($horario == '35'){echo("selected");}?> value="35">LAB-06 2022-01-17 14:15:00</option>
                                    <option <?php if($horario == '36'){echo("selected");}?> value="36">LAB-06 2021-12-15 15:45:00</option>
                            

                                    </select>
                                    <label>Selecciona tu Registro</label>
                                    <span class="helper-text" data-error="Alcald??a Incorrecta" data-success="Alcald??a Correcta">Se debe seleccionar Registro</span>
                            </div>

                        </div>













                    <br><br><br><br>

 

                <div class="input-field col s12"> 
                <br>


                <button class="btn waves-effect waves-light cyan darken-4 brown-text text-lighten-3" type="reset" name="action">BORRAR
                    <i class="material-icons right">content_cut</i>
                </button>

                <button data-target="modal1" class="btn modal-trigger" onclick="validarFormulario();">ENVIAR
                    <i class="material-icons right">send</i>
                </button>

   
                <div id="modal1" class="modal modal-fixed-footer">
                    <div class="modal-content" id="contentModal1">
                    <h4>Faltan Datos</h4>
                    <p>?? Revisar Campos !</p>

                    </div>

                    <div class="modal-footer">


                    <a href="#!" class="modal-close waves-effect waves-light btn-flat cyan darken-2">
                    <i class="material-icons right">arrow_back</i>MODIFICAR</a>
    
                    <button class="btn waves-effect waves-light cyan darken-4" type="submit" name="action">ACEPTAR
                        <i class="material-icons right">send</i>
                    </button>

                    </div>
                </div>

                </div>



            </div>
            
        </form>


    </div>
  </div>


 

  <br><br><br><br>


  <footer class="page-footer cyan darken-4" id="footer-administrador">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="cyan-text text-accent-2">INSTITUTO POLIT??CNICO NACIONAL</h5>
          <p class="cyan-text text-accent-2">D.R. Instituto Polit??cnico Nacional (IPN). Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo L??pez Mateos, Zacatenco, Delegaci??n Gustavo A. Madero, C.P. 07738, Ciudad de M??xico 2009-2013.</p>
        </div>

        <div class="col l3 s12">
          <h5 class="cyan-text text-accent-2">Contactos</h5>
          <ul>
            <li><a class="cyan-text text-accent-2" href="#!">Mesa de ayuda: dudas e informaci??n</a></li>
            
            <li><a class="cyan-text text-accent-2" href="#!">Denuncia contra servidores p??blicos</a></li>
            <li><a class="cyan-text text-accent-2" href="#!">S??guenos en</a></li>
    
            <a class="waves-effect waves-light social-icon btn facebook" href="https://www.facebook.com/escomipnmx/"><i class="fa fa-facebook"></i></a>
            <a class="waves-effect waves-light btn-floating social twitter" href="https://twitter.com/escomunidad?lang=es"><i class="fa fa-twitter"></i> Sign in with twitter</a>

          </ul>
        </div>

        <div class="col l3 s12">
          <h5 class="cyan-text text-accent-2">Enlaces</h5>
          <ul>
            <li><a class="white-text" href="https://www.gob.mx/sep">www.gob.mx/SEP/</a></li>
            <li><a class="white-text" href="http://portaltransparencia.gob.mx/buscador/search/search.do?method=begin">Portal de Obligaciones de Transparencia</a></li>
            <li><a class="white-text" href="https://www.infomex.org.mx/gobiernofederal/home.action"></a>Sistema Infomex</li>
            <li><a class="white-text" href="https://home.inai.org.mx/">INAI</a></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Hecho por <a class="brown-text text-lighten-3" href="https://github.com/IsraelHV">EQUIPO 9 - WEB</a>
      </div>
    </div>
  </footer><!-- footer -->



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src=".././js/materialize.js"></script>
  <script src=".././js/init.js"></script>
  <script src=".././js/javaScriptAct.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
</html>