<?php include_once 'Views/template/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1><?php echo $data['title']; ?></h1>
            </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-outline-primary mb-3" type="button" id="btnNuevo">Nuevo</button>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover display nowrap" style="width:100%" id="tblUsuarios">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Usuario</th>
                                    <th>Nombres</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Dirección</th>
                                    <th>Perfil</th>
                                    <th>F. registro</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalRegistro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color:#46B4B4;">
                <h5 class="modal-title" id="title">Título del Modal</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formulario" autocomplete="off">
                <input type="hidden" id="id_usuario" name="id_usuario">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="usuario" class="form-label">Usuario</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">person</i></span>
                                <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Usuario" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">list</i></span>
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="apellido" class="form-label">Apellido</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">list</i></span>
                                <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="correo" class="form-label">Correo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">email</i></span>
                                <input class="form-control" type="email" id="correo" name="correo" placeholder="Correo" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">phone</i></span>
                                <input class="form-control" type="number" id="telefono" name="telefono" placeholder="Teléfono" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="direccion" class="form-label">Dirección</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">location_on</i></span>
                                <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Dirección" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="clave" class="form-label">Clave</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">key</i></span>
                                <input class="form-control" type="password" id="clave" name="clave" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="rol" class="form-label">Rol</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">person</i></span>
                                <select name="rol" id="rol" class="form-select" required>
                                    <option value="1">ADMINISTRADOR</option>
                                    <option value="2">USUARIO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="material-icons">save</i> Guardar
                    </button>
                    <button class="btn btn-outline-danger" type="button" data-bs-dismiss="modal">
                        <i class="material-icons">cancel</i> Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once 'Views/template/footer.php'; ?>
