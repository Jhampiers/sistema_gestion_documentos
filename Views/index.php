<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">

    <!-- Title -->
    <title><?php echo $data['title']; ?></title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/pace/pace.css'; ?>" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="<?php echo BASE_URL . 'Assets/css/main.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/css/custom.css'; ?>" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center py-4">
    <div class="app app-auth-sign-in w-100 mx-3" style="max-width: 900px;">
        <div class="row">
           
            <div class="col-md-6 d-none d-md-block p-0">
                <div class="app-auth-background h-100" style="background-image: url('./Assets/images/archivo.png'); background-size: cover; min-height: 500px;">
                </div>
            </div>
            
           
            <div class="col-12 col-md-6 bg-white p-4">
                <div class="logo text-center text-md-center mb-5 mt-5">
                    <a href="#" class="text-decoration-none text-dark fs-4"><?php echo $data['title']; ?></a>
                </div>

                <form id="formulario" autocomplete="off" class="mx-auto" style="max-width: 400px;">
                    <div class="auth-credentials mb-4">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario <span class="text-danger"></span></label>
                            <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuario" placeholder="Usuario">
                        </div>

                        <div class="mb-4">
                            <label for="clave" class="form-label">Contraseña <span class="text-danger"></span></label>
                            <input type="password" class="form-control" id="clave" name="clave" aria-describedby="clave" placeholder="Contraseña">
                        </div>
                    </div>

                    <div class="auth-submit border d-grid rounded bg-info w-50" style="margin-left: 100px;" >
                        <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputReset">Correo</label>
                        <input id="inputReset" class="form-control" type="text" name="inputReset" placeholder="Correo electronico">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" id="btnProcesar">Procesar</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Javascripts -->
    <script src="<?php echo BASE_URL . 'Assets/plugins/jquery/jquery-3.5.1.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/bootstrap/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/pace/pace.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/main.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/sweetalert2@11.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/alertas.js'; ?>"></script>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
    <script src="<?php echo BASE_URL . 'Assets/js/pages/login.js'; ?>"></script>
</body>

</html>