<?php
class CarpetasModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCarpeta($id)
    {
        $sql = "SELECT id FROM carpetas WHERE id = $id";
        return $this->select($sql);
    }

    public function eliminarCarpeta($id)
    {
        return $this->save("DELETE FROM carpetas WHERE id = ?", [$id]);
    }

    public function eliminarArchivosCarpeta($id_carpeta)
    {
        return $this->save("DELETE FROM archivos WHERE id_carpeta = ?", [$id_carpeta]);
    }

}

?>