<?php
class Carpetas extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        ## VALIDAR SESION
        if (empty($_SESSION['id'])) {
            header('Location: ' . BASE_URL);
            exit;
        }
    }
    public function eliminar($id_carpeta)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && is_numeric($id_carpeta)) {
            $carpeta = $this->model->getCarpeta($id_carpeta);
            if (!empty($carpeta)) {
                $rutaCarpeta = 'Assets/archivos/' . $id_carpeta;

                // Verificar que la carpeta existe en el sistema de archivos
                if (is_dir($rutaCarpeta)) {
                    // Eliminar todos los archivos dentro de la carpeta
                    $archivos = glob($rutaCarpeta . '/*'); // Obtener todos los archivos de la carpeta
                    foreach ($archivos as $archivo) {
                        if (is_file($archivo)) {
                            unlink($archivo); // Eliminar archivo individual
                        }
                    }

                    // Eliminar la carpeta misma
                    rmdir($rutaCarpeta);
                }
                // Eliminar la carpeta de la base de datos
                $data = $this->model->eliminarCarpeta($id_carpeta);
                $data = $this->model->eliminarArchivosCarpeta($id_carpeta);

                if ($data) {
                    $res = array('mensaje' => 'CARPETA ELIMINADA', 'tipo' => 'success');
                } else {
                    $res = array('mensaje' => 'ERROR AL ELIMINAR', 'tipo' => 'error');
                }
            } else {
                $res = array('mensaje' => 'Carpeta no encontrada', 'tipo' => 'error');
            }

            echo json_encode($res, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}
