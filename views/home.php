<?php require_once ("../estructura/header.php");?>
<?php require ("../estructura/sidebar.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Agenda</title>
    <!--PUSH--> 
    <script src="../js/push.min.js"></script>

</head>
<body>
<script>
 
function verificarNotificaciones() {
 
    var idUsuario;  //$_SESSION['id']; //utenicacion con variables session 

    // Realizar la solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "verificar_notificaciones.php?idUsuario=" + idUsuario, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Manejar la respuesta del servidor aquí
            var respuesta = JSON.parse(xhr.responseText);

            if (respuesta.tieneNotificaciones) {
              Push.create("Compu Digital Technologies", {
                body: "Se te a un Nuevo Servicio",
                icon:"../assets/img/logo2.png",
                timeout: 4000,
                onClick: function () {
                    abrirModal();
                }
            });
            } else {
                
            }
        }
    };
  
    function abrirModal(){
      $('#notis').modal('show');
    }

    // Enviar la solicitud
    xhr.send();
}

setTimeout(verificarNotificaciones, 2000);
</script>

    <!-- ================================== -->
  <!-- ENCABEZADO -->
  <!-- ================================== -->
  <header class="container-fluid bg-dark d-flex justify-content-center">
    <p class="text-light mb-0 p-2 fs-5"> Control de Servicios</p>
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#notis"><i class="fa-regular fa-bell"></i></button>
  </header>
  <div class="p-3">
    <div class="card">
        <div class="card-body">
        <div class="d-flex justify-content-center">                 
<!---Agenda-->
<div class = "row m-2">
        <div class="card w-6 0 h-110 mt-2 shadow p-2 mb-5 bg-white rounded data-spy="scroll">          
          <div class="card-body">

          <table class="table">
      <thead>
          <tr>
              <th class="text-center">Id</th>
              <th class="text-center">Nombre del cliente</th>
              <th class="text-center">Direccion</th>
              <th class="text-center">Tipo de servicio</th>
              <th class="text-center">Problema presentado</th>
              <th class="text-center">Agente</th>
          </tr>
      </thead>
      <tbody id="serv"></tbody>
  </table>

        </div>         
    </div>
  </div>

  
  
</body>
</html>


<script src="../js/jquery-3.7.1.min.js"></script>
<script src="../controller/funciones_ajax.js"></script>

<?php include ("modal/notis.php");?>
<?php include ("modal/modal_asgTecnico.php");?>
<?php require ("../estructura/footer.php");?>