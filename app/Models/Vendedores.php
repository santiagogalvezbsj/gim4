<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Vendedores extends Model{
        protected $table = 'vendedores';
        protected $primaryKey = 'id_vendedor';
        protected $allowedFields = ['id_vendedor','nombres','apellidos', 'edad','teléfono'];
    }
?>