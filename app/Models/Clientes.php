<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Clientes extends Model{
        protected $table = 'clientes';
        protected $primaryKey = 'id_cliente';
        protected $allowedFields = ['id_cliente','nombres','apellidos', 'edad','teléfono','id_plan'];
    }
?>