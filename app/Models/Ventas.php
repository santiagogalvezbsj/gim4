<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Ventas extends Model{
        protected $table = 'ventas';
        protected $primaryKey = 'id_venta';
        protected $allowedFields = ['id_venta','id_vendedor','id_producto', 'id_cliente'];
    }
?>