<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Clientes extends Model{
        protected $table = 'clientes';
        protected $primaryKey = 'idcliente';
        protected $allowedFields = ['id_cliente','nombres','apellidos', 'edad','teléfono','id_plan'];
    }
?>