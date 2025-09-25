	<?php
    namespace App\Controllers;

use App\Models\Planes;
use CodeIgniter\Controller;

    class planesController extends BaseController{
        

        public function verPlanes(){
            $plan = new Planes();
            $datosBD['datosBD'] = $plan->findAll();
            return view('menuPlanes',$datosBD);
        }

        public function guardarPlanes(){
            $id_plan = $this->request->getVar('txt_id_plan');
            $nombre = $this->request->getVar('txt_nombre');
            $precio = $this->request->getVar('txt_precio');

           $plan = new Planes();
            $datos=['id_plan'=>$id_plan,    
                    'nombre'=>$nombre,
                    'precio'=>$precio
                    ];              
            $plan->insert($datos);
            return $this->verPlanes();
            }

        public function eliminarPlanes($id_plan=null){
            $plan = new Planes();
            $plan->delete($id_plan);
            return $this->verPlanes();
        }

        public function localizarPlan($id_plan=null){  
            $plan = new Planes();
            $datosPlan['datosPlan']=$plan->where('id_plan',$id_plan)->first();
            return view('frm_actualizarPlan',$datosPlan);  
        }
    

         public function modificarPlan(){
                $id_plan = $this->request->getVar('txt_id_plan');
                $nombre = $this->request->getVar('txt_nombre');
                $precio = $this->request->getVar('txt_precio');
    
               $plan = new Planes();
                $datos=['id_plan'=>$id_plan,    
                        'nombre'=>$nombre,
                        'precio'=>$precio
                        ];              
                $plan->update($id_plan,$datos);
                return $this->verPlanes();
                }
    }