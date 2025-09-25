<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Productos extends Model{
        protected $table = 'productos';
        protected $primaryKey = 'id_producto';
        protected $allowedFields = ['id_producto','nombre','monto'];
    }
?>