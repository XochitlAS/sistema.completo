<?php 
require_once ("../estructura/header.php");
require ("../estructura/sidebar.php");
?>
<div class="p-3">
    <div class="card">
        <div class="card-body">
        <div class="d-flex justify-content-center">                 
            <p>Generar Servicio </p>
        </div>             
            <div class="card mb-2">
                <div class="card-header">
                    Datos del Servicio
                </div>
            <form action="" method="POST" id="formServicio">
                <div class="row">
                     <div class="col m-3">
                        <div class="form-group">
                            <label for="nombre">Nombre del Cliente</label>
                            <input type="text" class="form-control mp-3" id="nombre" name="nombre" placeholder="">
                        </div>
                    </div>                                                
                     <div class="col m-3">
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control mp-3" id="telefono" name="telefono" placeholder="">
                        </div>
                    </div>  
                    <div class="col m-3">
                        <div class="form-group">
                            <label for="tservicio">Tipo de Servicio</label>
                            <input type="text" class="form-control mp-3" id="tservicio" name="tservicio" placeholder="">
                        </div>
                    </div>                                
                </div> 
                <div class="row">
                     <div class="col m-3">
                        <div class="form-group">
                            <label for="direc">Direccion</label>
                            <input type="text" class="form-control mp-3" id="direc" name="direc" placeholder="">
                        </div>
                    </div>                                
                     <div class="col m-3">
                        <div class="form-group">
                            <label for="redirec">Referencia de la Dirección</label>
                            <textarea class="form-control" name="redirec" id="redirec" rows="2"></textarea>
                        </div>
                    </div>                                
                </div>
                <div class="row">
                     <div class="col m-3">
                        <div class="form-group">
                            <label for="probleP">Problema Presentado</label>
                            <input type="text" class="form-control mp-3" id="probleP" name="probleP" placeholder="">
                        </div>
                    </div> 
                    <div class="col m-3">
                        <div class="form-group">
                            <label for="agente">Reporte asignado por:</label>
                            <input type="text" class="form-control mp-3" id="agente" name="agente" placeholder="">
                        </div>
                    </div> 
                    <div class="col m-3">
                        <div class="form-group">
                        <button type="submit" id="btServ" class="btn btn-success btn-lg">GENERAR SERVICIO</button>        
                    </div> 
                </div>
            </form>
            </div>
        </div>
    </div>
</div>


<script src="../js/jquery-3.7.1.min.js"></script>
<script src="../controller/funciones_ajax.js"></script>

<?php require ("../estructura/footer.php"); ?>