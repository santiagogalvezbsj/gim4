<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Servicios extends Model{
        protected $table = 'servicios';
        protected $primaryKey = 'id_servicio';
        protected $allowedFields = ['id_servicio','nombre','id_instructor'];
    }
?>