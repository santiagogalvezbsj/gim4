<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Planes extends Model{
        protected $table = 'planes';
        protected $primaryKey = 'id_plan';
        protected $allowedFields = ['id_plan','nombre'];
    }
?>