<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Control</title>
        <link href="core/css/estilo.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body style="background: url('assets/img/T-1.jpg') no-repeat; background-size: cover; background-position: center; backdrop-filter: blur(2px);">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">                                    
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/img/logo2.png" class="rounded float-left w-50 p-3" alt="...">
                                        </div>
                                        <div class="text-center">
                                            <h3>¡Bienvenido!</h3>
                                        </div>
                                        <form method="POST" action="views/log.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" />
                                                <label for="usuario">Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                                <label for="password">Contraseña</label>
                                            </div> 
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>                                                
                                            </div>                                                                                      
                                        </form>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
