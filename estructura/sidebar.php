<?php

SESSION_START();

if(!$_SESSION['id']){
  header('location: home.php');
  
}

$nivel = $_SESSION['nivel'];
$id_usuario = $_SESSION['id'];
?>

<nav class="sidebar">
    <div class="nav-header">
      <img src="../core/imagenes/logo_2.png" class="logo"></p>
      <i class="bx bx-menu-alt-right btn-menu"></i>
    </div>
    <div>
  
    </div>
    <ul class="nav-links">                        
      <li>
        <a href="home.php">
          <i class="bx bx-home-alt-2"></i>
          <span class="title">Inicio</span>
        </a>
        <span class="tooltip">Inicio</span>
      </li>     
      <!-------------------------
              ADMIN Y VENTAS
      ------------------------->
      <?php if($nivel == "administrador" || $nivel == "ventas"){?>
      <li>
        <a href="servicios.php">
          <i class='bx bx-spreadsheet'></i>
          <span class="title">Servicios</span>
        </a>
        <span class="tooltip">Servicios</span>
      </li>
      <?php }?>
     
      
      <!-------------------------
              ADMIN
      ------------------------->
      <?php if($nivel == "administrador"){?>
     <li> 
        <a href="usuarios.php">  
          <i class='bx bxs-group'></i>
          <span class="title">Usuarios</span>
        </a>
        <span class="tooltip">Usuarios</span>
      </li>
     <?php }?>
      <li class="cerrar_sesion">
        <a href="../index.php">
          <i class='bx bx-log-out'></i>
          <span class="title">Cerrar Sesion</span>
        </a>
        <span class="tooltip">Cerrar Sesion</span>
      </li>       
    </ul>        
    </div>

    

  </nav>