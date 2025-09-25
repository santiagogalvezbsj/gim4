<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Servicio_instructor extends Model{
        protected $table = 'servicio_instructor';
        protected $primaryKey = 'id_servicio_instructor';
        protected $allowedFields = ['id_servicio_instructor','id_servicio','id_instructor'];
    }
?>