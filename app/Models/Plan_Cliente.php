<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Plan_cliente extends Model{
        protected $table = 'plan_cliente';
        protected $primaryKey = 'id_plan_cliente';
        protected $allowedFields = ['id_plan_cliente','id_cliente','id_plan'];
    }
?>