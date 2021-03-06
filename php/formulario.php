<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>.::Formulario::.</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href=".././css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link  rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href=".././css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link  rel = "stylesheet" href = ".././css/materialize-social.css">
  
  <!-- My CSS -->
  <link href=".././css/mystyle.css" type="text/css" rel="stylesheet" media="screen,projection"/>


  <link rel="icon" type="image/png" href=".././Imagenes/escudoESCOM.png">


  <!--PHP-->
  <link href=".././css/mystyle.css" type="" rel="stylesheet" media="screen,projection"/>

</head>

<body>

  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="./loginEstudiante.php" class="teal-text text-darken-4">Alumno</a></li>
    
    <li class="divider"></li>
    <li><a href="./loginAdministrativo.php" class="teal-text text-darken-4">Administrador</a></li>
  </ul>

  <ul id="dropdown2" class="dropdown-content">
    <li><a href="./loginEstudiante.php" class="teal-text text-darken-4">Alumno</a></li>
    
    <li class="divider"></li>
    <li><a href="./loginAdministrativo.php" class="teal-text text-darken-4">Administrador</a></li>
  </ul>

    <!-- nav -->
  <div class="navbar-fixed">

    <nav class="cyan darken-4" role="navigation">
      
      <div class="nav-wrapper container">

        <a href=".././index.html" class="brand-logo cyan-text text-accent-2"><i class="material-icons">computer</i>ESCOM</a>

   

        <ul class="right hide-on-med-and-down">
          <li><a href=".././index.html" class="cyan-text text-accent-2">Inicio</a></li>
          
          <li><a href="./loginEstudiante.php" class="cyan-text text-accent-2">Imprimir comprobante</a></li>
          <li><a href="./formulario.php" class="cyan-text text-accent-2">Registrarse</a></li>

          <!-- Dropdown Trigger -->

          <li><a class="dropdown-trigger cyan-text text-accent-2" href="#!" data-target="dropdown1">Iniciar Sesi??n<i class="material-icons right">person</i></a></li> 
    
        
        </ul>


        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons cyan-text text-accent-2">menu</i></a>
      
      </div>
    </nav>   <!-- nav -->

  </div>


  <ul id="nav-mobile" class="sidenav cyan darken-4 ">
    <li><a href=".././index.html" class="cyan-text text-accent-2">Inicio</a></li>
    <li><a href="./loginEstudiante.php" class="cyan-text text-accent-2">Imprimir comprobante</a></li>
    <li><a href="./formulario.php" class="cyan-text text-accent-2">Registrarse</a></li>
    
    <li><a class="dropdown-trigger cyan-text text-accent-2" href="#!" data-target="dropdown2">Iniciar Sesi??n<i class="material-icons right cyan-text text-accent-2">person</i></a></li>
  
  
  </ul>


  <!-- Bannner -->
  <div id="index-banner" class="parallax-container">

    <div class="section no-pad-bot">
      <div class="container">

        <br><br>

        <h2 class="header center blue-grey-text text-darken-4">Registro de Datos Generales</h2>

        <div class="row center" id="mensaje_oculto">
          
          <h4 class="header col s12 blue-grey-text text-darken-4">Alumnos de nuevo ingreso de la ESCOM (2021)</h4>
        </div>

        <div class="row center">
          <a href="./loginEstudiante.php" id="download-button" class="btn-large waves-effect waves-light cyan darken-4">Imprimir Comprobante</a>
        </div>

      </div>

    </div>

    <div class="parallax"><img src=".././Imagenes/ImagenMate2.jpg" alt="Unsplashed background img 1"></div>

    <br><br>
  </div><!-- Bannner -->


  <br>



  <div class="container row center">

    <form class="" id="formulario" action="./formularioInsert.php" method="POST">

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
          

        <div class="col s12 m8 offset-m2 l6 offset-l3 z-depth-3" id="contenedorform">

            <div class="col s12 m12" id="margen">

                <br>


                  <div class="row center">
                      <div class="input-field">
                        <i class="material-icons prefix">call_to_action</i>
                        <input placeholder="No. de Boleta" id="no_boleta" type="text" class="validate" name="no_boleta">
                        <label for="no_boleta">No. de Boleta:</label>
                        <span class="helper-text" data-error="Boleta Incorrecta" data-success="Boleta Correcta">Boleta con 10 d??gitos</span>
                      </div>
                  </div>

                  <div class="row center">
                    <div class="input-field">
                      <i class="material-icons prefix">account_circle</i>
                      <input placeholder="Nombre" id="nombre" type="text" class="validate" name="nombre">
                      <label for="nombre">Nombre:</label>
                      <span class="helper-text" data-error="Nombre Incorrecto" data-success="Nombre Correcto">El nombre s??lo debe contener letras</span>
                    </div>
                  </div>

                  <div class="row center">
                    <div class="input-field">
                      <i class="material-icons prefix">perm_identity</i>
                      <input placeholder="Apellido Paterno" id="apellido_Paterno" type="text" class="validate" name="apellido_Paterno">
                      <label for="apellido_Paterno">Apellido Paterno</label>
                      <span class="helper-text" data-error="Apellido Paterno Incorrecto" data-success="Apellido Paterno Correcto">El Apellido s??lo debe contener letras</span>
                    </div>
                  </div>

                  <div class="row center">
                    <div class="input-field">
                      <i class="material-icons prefix">person</i>
                      <input placeholder="Apellido Materno" id="apellido_Materno" type="text" class="validate" name="apellido_Materno">
                      <label for="apellido_Materno">Apellido Materno</label>
                      <span class="helper-text" data-error="Apellido Materno Incorrecto" data-success="Apellido Materno Correcto">El Apellido s??lo debe contener letras</span>
                    </div>
                  </div>

                  <div class="row center">
                    <div class="input-field">
                      <i class="material-icons prefix">event</i>
                      <input type="text" class="datepicker validate" placeholder="Fecha de Nacimiento" id="fecha_nacimiento" name="fecha_nacimiento">
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
                            <input name="genero" type="radio" checked  class="validate with-gap" value="1"/>
                            <span class="item-title">Hombre</span>
                          </label>
                        </p>
                    </div>    

                    <div class="input-field col s4">   
                        <p>
                          <label>
                            <input name="genero" type="radio" class="with-gap" value="2"/>
                            <span class="item-title">Mujer</span>
                          </label>
                        </p>
                    </div>

                  </div>

                  <br><br><br><br>

                  <div class="row center">
                    <div class="input-field">
                      <i class="material-icons prefix">vpn_key</i>
                      <input placeholder="CURP" id="curp" type="text" class="validate" name="curp">
                      <label for="curp">CURP:</label>
                      <span class="helper-text" data-error="CURP Incorrecta" data-success="CURP Correcta">La CURP debe contener m??ximo 18 caracteres</span>
                    </div>
                  </div>

            </div>

          </div>
        </div>


        <h2 class="header center blue-grey-text text-darken-4" >Contacto</h2>

        <div class="col s12 m8 offset-m2 l6 offset-l3 z-depth-3" id="contenedorform">

          <div class="col s12 m12" id="margen">

            <br>

            <div class="row center">
              <div class="input-field">
                <i class="material-icons prefix">pin_drop</i>
                <input placeholder="Calle" id="calle" type="text" class="validate" name="calle">
                <label for="calle">Calle:</label>
                <span class="helper-text" data-error="Calle Incorrecta" data-success="Calle Correcta">La calle s??lo debe contener letras y digitos</span>
              </div>
            </div>


            <div class="row center">
              <div class="input-field">
                <i class="material-icons prefix">local_convenience_store</i>
                <input placeholder="N??mero" id="numero" type="text" class="validate" name="numero">
                <label for="numero">N??mero:</label>
                <span class="helper-text" data-error="N??mero Incorrecto" data-success="N??mero Correcto">Elige un n??mero</span>
              </div>
            </div>

            <div class="row center">
              <div class="input-field">
                <i class="material-icons prefix">place</i>
                <input placeholder="Colonia" id="colonia" type="text" class="validate" name="colonia">
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
                      <option value="0" disabled selected>--Selecciona tu Alcald??a--</option>

                      <option value="1">&Aacute;lvaro Obreg&oacute;n</option>
                      <option value="2">Azcapotzalco</option>
                      <option value="3">Benito Ju&aacute;rez</option>
                      <option value="4">Coyoac&aacute;n</option>
                      <option value="5">Cuajimalpa</option>
                      <option value="6">Cuauht&eacute;moc</option>
                      <option value="7">Gustavo A. Madero</option>
                      <option value="8">Iztacalco</option>
                      <option value="9">Iztapalapa</option>
                      <option value="10">Magdalena Contreras</option>
                      <option value="11">Miguel Hidalgo</option>
                      <option value="12">Milpa Alta</option>
                      <option value="13">Tl&aacute;huac</option>
                      <option value="14">Tlalpan</option>
                      <option value="15">Venustiano Carranza</option>
                      <option value="16">Xochimilco</option>

                    </select>
                    <label>Selecciona tu Alcald??a</label>
                    <span class="helper-text" data-error="Alcald??a Incorrecta" data-success="Alcald??a Correcta">Se debe seleccionar la Alcald??a</span>
              </div>

            </div>

            <br><br><br><br><br>

            <div class="row center">
              <div class="input-field">
                <i class="material-icons prefix">gps_fixed</i>
                <input placeholder="C??digo Postal" id="codigo_postal" type="text" class="validate" size="5" name="codigo_postal">
                <label for="codigo_postal">C??digo Postal:</label>
                <span class="helper-text" data-error="C??digo Postal Incorrecto" data-success="C??digo Postal Correcto">El c??digo postal debe contener 5 d??gitos</span>
              </div>
            </div>

            <div class="row center">
              <div class="input-field">
                <i class="material-icons prefix">phone_android</i>
                <input placeholder="Tel??fono Celular" id="telefono_celular" type="text" class="validate" min="8" max="10" name="telefono_celular">
                <label for="telefono_celular">Tel??fono Celular:</label>
                <span class="helper-text" data-error="Tel??fono Celular Incorrecto" data-success="Tel??fono Celular Correcto">El tel??fono debe contener m??ximo 10 d??gitos</span>
              </div>
            </div>

            <div class="row center">
              <div class="input-field">
                <i class="material-icons prefix">contact_mail</i>
                <input placeholder="Correo Electr??nico" id="correo_electronico" type="text" class="validate" name="correo_electronico">
                <label for="correo_electronico">Correo Electr??nico:</label>
                <span class="helper-text" data-error="Correo Electr??nico Incorrecto" data-success="Correo Electr??nico Correcto">Inserta tu correo de la forma ********@**.**.**</span>
              </div>
            </div>
          </div>

        </div>

        <div class="col s12">
          <h2 class="header center blue-grey-text text-darken-4" >Procedencia</h2>
        </div>

        <div class="col s12 m8 offset-m2 l6 offset-l3 z-depth-3" id="contenedorform">

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
      
                      <option value="0" disabled selected>--Selecciona tu escuela--</option>

                      <option value="1" data-icon=".././Imagenes/cecyt1.jpg" class="left">CECyT 1 "Gonzalo V&aacute;zquez Vela" IPN</option>
                      <option value="2" data-icon=".././Imagenes/cecyt2.png" class="left">CECyT 2 "Miguel Bernard" IPN</option>
                      <option value="3" data-icon=".././Imagenes/cecyt3.jpg" class="left">CECyT 3 ???Estanislao Ram&iacute;rez Ruiz??? IPN</option>
                      <option value="4" data-icon=".././Imagenes/cecyt4.jpg">CECyT 4 "L&aacute;zaro C&aacute;rdenas" IPN</option>
                      <option value="5" data-icon=".././Imagenes/cecyt5.png">CECyT 5 "Benito Ju&aacute;rez" IPN</option>
                      <option value="6" data-icon=".././Imagenes/cecyt6.png">CECyT 6 "Miguel Oth&oacute;n de Mendizabal" IPN</option>
                      <option value="7" data-icon=".././Imagenes/cecyt7.png">CECyT 7 "Cuauht&eacute;moc" IPN</option>
                      <option value="8" data-icon=".././Imagenes/cecyt8.jpg">CECyT 8 "Narciso Bassols" IPN</option>
                      <option value="9" data-icon=".././Imagenes/cecyt9.png">CECyT 9 "Juan de Dios B&aacute;tiz" IPN</option>
                      <option value="10" data-icon=".././Imagenes/cecyt10.png">CECyT 10 "Carlos Vallejo M&aacute;rquez" IPN</option>
                      <option value="11" data-icon=".././Imagenes/cecyt11.jpg">CECyT 11 "Wilfrido Massieu" IPN</option>
                      <option value="12" data-icon=".././Imagenes/cecyt12.png">CECyT 12"Jos&eacute; Mar&iacute;a Morelos" IPN</option>
                      <option value="13" data-icon=".././Imagenes/cecyt13.png">CECyT 13"Ricardo Flores Mag&oacute;n" IPN</option>
                      <option value="14" data-icon=".././Imagenes/cecyt14.png">CECyT 14"Luis Enrique Erro Soler" IPN </option>
                      <option value="15" data-icon=".././Imagenes/cecyt15.jpg">CECyT 15 "Diodoro Ant&uacute;nez Echegaray" IPN</option>
                      <option value="16" data-icon=".././Imagenes/cecyt16.png">CECyT 16 "Hidalgo" IPN</option>
                      <option value="17" data-icon=".././Imagenes/cecyt17.jpg">CECyT 17 "Le&oacute;n Guanajuato" IPN</option>
                      <option value="18" data-icon=".././Imagenes/cecyt18.jpg">CECyT 18 "Zacatecas" IPN</option>
                      <option value="19" data-icon=".././Imagenes/cecyt19.png">CECyT 19 "Leona Vicario" - IPN</option>
                      <option value="20" data-icon=".././Imagenes/cet1.jpg">CET 1 "Walter Cross Buchanan" IPN</option>
                      <option value="21" data-icon=".././Imagenes/otro.png">Otro</option>
      
                    </select>
                    <label>Selecciona tu escuela de procedencia:</label>
                    <span class="helper-text" data-error="Alcald??a Incorrecta" data-success="Alcald??a Correcta">Se debe seleccionar la Escuela</span>
              </div>
      
            </div>

            <br><br><br><br><br><br>

            <div class="row center">
              <div class="input-field">
                <i class="material-icons prefix">local_library</i>
                <input disabled placeholder="Nombre de la Escuela" id="escuela_procedencia" type="text" class="validate" min="8" max="10" name="escuela_procedencia">
                <label for="escuela_procedencia">Nombre de la Escuela:</label>
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
      
                      <option value="0" disabled selected>--Selecciona tu entidad--</option>
                      <option value="1">Aguascalientes</option>
                      <option value="2">Baja California</option>
                      <option value="3">Baja California Sur</option>
                      <option value="4">Campeche</option>
                      <option value="5">Chiapas</option>
                      <option value="6">Chihuahua</option>
                      <option value="7">Ciudad de M&eacute;xico</option>
                      <option value="8">Coahuila</option>
                      <option value="9">Colima</option>
                      <option value="10">Durango</option>
                      <option value="11">Estado de M&eacute;xico</option>
                      <option value="12">Guanajuato</option>
                      <option value="13">Guerrero</option>
                      <option value="14">Hidalgo</option>
                      <option value="15">Jalisco</option>
                      <option value="16">Michoac&aacute;n</option>
                      <option value="17">Morelos</option>
                      <option value="18">Nayarit</option>
                      <option value="19">Nuevo Le&oacute;n</option>
                      <option value="20">Oaxaca</option>
                      <option value="21">Puebla</option>
                      <option value="22">Quer&eacute;taro</option>
                      <option value="23">Quintana Roo</option>
                      <option value="24">San Luis Potos&iacute;</option>
                      <option value="25">Sinaloa</option>
                      <option value="26">Sonora</option>
                      <option value="27">Tabasco</option>
                      <option value="28">Tamaulipas</option>
                      <option value="29">Tlaxcala</option>
                      <option value="30">Veracruz</option>
                      <option value="31">Yucat&aacute;n</option>
                      <option value="32">Zacatecas</option>
                      
                    </select>
                    <label>Selecciona tu entidad federativa de procedencia:</label>
                    <span class="helper-text" data-error="Entidad Federativa Incorrecta" data-success="Entidad Federativa Correcta">Se debe seleccionar la Entidad Federativa</span>
              </div>
      
            </div>

            <br><br><br><br><br>

            <div class="row center">
              <div class="input-field">
                <i class="material-icons prefix">library_books</i>
                <input placeholder="Promedio" id="promedio" type="text" class="validate" step="0.01" min="0" max="10" name="promedio">
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
                      <input name="opcion" type="radio" checked  class="validate with-gap" value="1"/>
                      <span class="item-title">1ra Opci??n</span>
                    </label>
                  </p>
              </div>    

              <div class="input-field col s4">   
                  <p>
                    <label>
                      <input name="opcion" type="radio" class="with-gap" value="2" />
                      <span class="item-title">2da Opci??n</span>
                    </label>
                  </p>
              </div>

              <div class="input-field col s4 right">   
                <p>
                  <label>
                    <input name="opcion" type="radio" class="with-gap" value="4"/>
                    <span class="item-title">4ta Opci??n</span>
                  </label>
                </p>
              </div>

              <div class="input-field col s4 right">   
                <p>
                  <label>
                    <input name="opcion" type="radio" class="with-gap" value="3"/>
                    <span class="item-title">3er Opci??n</span>
                  </label>
                </p>
              </div>

            </div>

            <br><br><br><br>

 


          </div> 

        </div>


        <div class="input-field col s12"> 
          <br>

  

          <button class="btn waves-effect waves-light cyan darken-4 brown-text text-lighten-3" type="reset" name="action">BORRAR
            <i class="material-icons right">content_cut</i>
          </button>

          <button data-target="modal1" class="btn modal-trigger" onclick="validarFormulario();">ENVIAR
            <i class="material-icons right">send</i>
          </button>

  

          <!-- Modal Structure -->
          <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content" id="contentModal1">
              <h4>Faltan Datos</h4>
              <p>?? Revisar Campos !</p>

            </div>

            <div class="modal-footer">

    

              <a href="#!" class="modal-close waves-effect waves-light btn-flat cyan darken-2">
              <i class="material-icons right">arrow_back</i>MODIFICAR</a>
              <!-- <a href="#!" class="modal-action waves-effect waves-green btn-flat ">Agreekk</a> -->
              <button class="btn waves-effect waves-light cyan darken-4" type="submit" name="action">ACEPTAR
                <i class="material-icons right">send</i>
              </button>

            </div>
          </div>

        </div>








      </div>
      
    </form>

  </div>  <!-- form -->


  <br>

   <!-- footer -->
 
  <footer class="page-footer cyan darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="cyan-text text-accent-2">INSTITUTO POLIT??CNICO NACIONAL</h5>
          <p class="cyan-text text-accent-2">D.R. Instituto Polit??cnico Nacional (IPN). Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo L??pez Mateos, Zacatenco, Delegaci??n Gustavo A. Madero, C.P. 07738, Ciudad de M??xico 2009-2013.</p>
        </div>

        <div class="col l3 s12">
          <h5 class="cyan-text text-accent-2">Contactos</h5>
          <ul>
            <li><a class="cyan-text text-accent-2" href="#!">Mesa de ayuda: dudas e informaci??n gobmx@funcionpublica.gob.mx</a></li>
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
  <script src=".././js/myjavascript.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
</html>