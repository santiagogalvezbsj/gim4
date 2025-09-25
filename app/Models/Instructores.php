<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Instructores extends Model{
        protected $table = 'instructores';
        protected $primaryKey = 'id_instructor';
        protected $allowedFields = ['id_instructor','nombres','apellidos', 'edad','teléfono','id_servicio'];
    }
?>