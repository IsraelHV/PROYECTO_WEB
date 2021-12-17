<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>.::Pantalla Administrador::.</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href=".././css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href=".././css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


  <!-- My CSS -->
  <link href=".././css/mystyle.css" type="text/css" rel="stylesheet" media="screen,projection"/>


  <link rel="icon" type="image/png" href=".././Imagenes/escudoESCOM.png">

</head>

<body>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href=".././formulario.html" class="teal-text text-darken-4">Registrarse</a></li>
      <li><a href="#!" class="teal-text text-darken-4">Comprobante</a></li>
      <li class="divider"></li>
      <li><a href="#!" class="teal-text text-darken-4">Administrador</a></li>
    </ul>
  
    <ul id="dropdown2" class="dropdown-content">
      <li><a href=".././formulario.html" class="teal-text text-darken-4">Registrarse</a></li>
      <li><a href="#!" class="teal-text text-darken-4">Comprobante</a></li>
      <li class="divider"></li>
      <li><a href="#!" class="teal-text text-darken-4">Administrador</a></li>
    </ul>
  
      <!-- nav -->
    <div class="navbar-fixed" id="navbar-administrador">
  
      <nav class="cyan darken-4" role="navigation">
        
        <div class="nav-wrapper container" id="nav-wrapper-administrador">
  
          <a href=".././index.html" class="brand-logo cyan-text text-accent-2"><i class="material-icons">computer</i>ESCOM</a>
  
          <!-- <a id="logo-container" href="#" class="brand-logo cyan-text text-accent-2">
  
            <img src="./Imagenes/logoESCOM.png">
            ESCOM 
  
          </a> -->
  
          <ul class="right hide-on-med-and-down">
            <li><a href=".././index.html" class="cyan-text text-accent-2">Inicio</a></li>
            <li><a href="#" class="cyan-text text-accent-2">Consultar Resultados</a></li>

  
  
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger cyan-text text-accent-2" href="#!" data-target="dropdown1">Estudiantes<i class="material-icons right">arrow_drop_down</i></a></li>
  
            <li><a href="#" class="cyan-text text-accent-2"><i class="material-icons">person</i></a></li>
          
          </ul>
  
  
          <!-- <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons cyan-text text-accent-2">menu</i></a> -->
          <a href="#" data-target="slide-out" class="sidenav-trigger cyan-text text-accent-2"><i class="material-icons">menu</i></a>
          
        </div>
      </nav>   <!-- nav -->
  
    </div>



  <!-- <ul id="slide-out" class="sidenav sidenav-fixed">
    <li><a href="#!">First Sidebar Link</a></li>
    <li><a href="#!">Second Sidebar Link</a></li>
  </ul> -->



  <ul id="slide-out" class="sidenav sidenav-fixed ">
    <li><div class="user-view">
      <div class="background">
        <img src=".././Imagenes/fondoAdministrativo.jpg">
      </div>
      <a href="#user"><img class="circle" src=".././Imagenes/logoAdministrador.png"></a>
      <a href="#name"><span class="white-text name ">Adminstrador Hernández Vázquez</span></a>
      <a href="#email"><span class="white-text email">adminitrador@ipn.mx.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">person</i>Cuenta Administrativa</a></li>
    <li><a href="#!">Registrar Estudiante</a></li>

    <li><div class="divider"></div></li>
    <li><a class="subheader">Consultar Estudiante</a></li>
    <li><a class="waves-effect cyan-accent-2" href="./Datos_identidad.php">Datos de Identidad</a></li>
    <li><a class="waves-effect cyan-accent-2" href="#!">Datos de Contacto</a></li>
    <li><a class="waves-effect cyan-accent-2" href="#!">Datos de Contacto</a></li>
    <li><div class="divider"></div></li>

    <li><a href="#!">Borrar Estudiante</a></li>

    <li><div class="divider"></div></li>

    <li><a href="#!">Editar Datos de Estudiante</a></li>

  </ul>


    <?php
        $link = new PDO('mysql:host=localhost; dbname=semestre2022-1', 'root', '');
    ?>


  <div class="row">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <!-- <div class="col s4 m3"> -->

          <!-- <div class="collection">
            <a href="#!" class="collection-item">Consultar</a>
            <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
            <a href="#!" class="collection-item">Alan</a>
            <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
          </div>
        </div> -->

        <div class="col s12 m9 offset-m3">

          <table class="highlight centered responsive-table">

            <thead>
              <tr>
                  <th>No. de Boleta</th>
                  <th>Nombre</th>
                  <th>Apellido  Paterno</th>
                  <th>Apellido  Materno</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Género</th>
                  <th>CURP</th>           

              </tr>
            </thead>
    
            <tbody>

                <tr>

                    <th>2020630611</th>
                    <th>Naruto</th>
                    <th>Hernández</th>
                    <th>Uzmaki</th>
                    <th>21/08/2000</th>
                    <th>Masculino</th>
                    <th>HEVI960821HPLRZS90</th>
                
                </tr> 

                <?php foreach ($link->query('SELECT * FROM alumno INNER JOIN genero ON alumno.genero = genero.id_genero;') as $row){  // aca puedes hacer la consulta e iterarla con each. ?>
                  
                  <tr>
                    <th><?php echo $row['No_Boleta'];?></th>
                    <th><?php echo $row['nombre']; ?></th>
                    <th><?php echo $row['apellido_Paterno']; ?></th>
                    <th><?php echo $row['apellido_Materno']; ?></th>
                    <th><?php echo $row['fecha_Nacimiento']; ?></th>
                    <th><?php echo $row['nombreGenero']; ?></th>
                    <th><?php echo $row['curp']; ?></th>
                  </tr>

                <?php
                    }
                ?>
     

                      

            </tbody>

          </table>

        </div>

      </div>
    </div>
  </div>



  <!-- <div class="row">
    <div class="section"> -->

      <!--   Icon Section   -->
      <!-- <div class="row">
        <div class="col s8 m9">

          <div class="collection">
            <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
            <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
            <a href="#!" class="collection-item">Alan</a>
            <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
          </div>

        </div>
      </div>
    </div>
  </div> -->

 




  <!-- footer -->
  <!-- <footer class="page-footer teal"> -->
  <footer class="page-footer cyan darken-4" id="footer-administrador">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="cyan-text text-accent-2">Company Bio</h5>
          <p class="cyan-text text-accent-2">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
        </div>

        <div class="col l3 s12">
          <h5 class="cyan-text text-accent-2">Settings</h5>
          <ul>
            <li><a class="cyan-text text-accent-2" href="#!">Link 1</a></li>
            <li><a class="cyan-text text-accent-2" href="#!">Link 2</a></li>
            <li><a class="cyan-text text-accent-2" href="#!">Link 3</a></li>
            <li><a class="cyan-text text-accent-2" href="#!">Link 4</a></li>
          </ul>
        </div>

        <div class="col l3 s12">
          <h5 class="cyan-text text-accent-2">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Hecho por <a class="brown-text text-lighten-3" href="https://github.com/IsraelHV">Israel Hernández Vázquez</a>
      </div>
    </div>
  </footer><!-- footer -->


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src=".././js/materialize.js"></script>
  <script src=".././js/init.js"></script>
  <script src=".././js/myjavascript.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src=".././js/sweetAlert.js"></script>

  </body>
</html>