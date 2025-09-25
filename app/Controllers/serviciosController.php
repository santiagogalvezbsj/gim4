	<?php
    namespace App\Controllers;

use App\Models\Servicios;
use CodeIgniter\Controller;

    class serviciosController extends BaseController{
        public function verServicios(){
            $servicio = new Servicios();
            $datosBD['datosBD'] = $servicio->findAll();
            return view('menuServicios',$datosBD);
        }

        public function guardarServicios(){
            $id_servicio = $this->request->getVar('txt_id_servicio');
            $nombre = $this->request->getVar('txt_nombre');
            $id_instructor = $this->request->getVar('txt_id_instructor');

           $servicio = new Servicios();
            $datos=['id_servicio'=>$id_servicio,    
                    'nombre'=>$nombre,
                    'id_instructor'=>$id_instructor
                    ];              
            $servicio->insert($datos);
            return $this->verServicios();
            }

        public function eliminarServicio($id_servicio=null){
            $servicio = new Servicios();
            $servicio->delete($id_servicio);
            return $this->verServicios();
        }


        public function localizarServicio($id_servicio=null){  
            $servicio = new Servicios();
            $datosServicio['datosServicio']=$servicio->where('id_servicio',$id_servicio)->first();
            return view('frm_actualizarServicio',$datosServicio);  
        }
    
        public function modificarServicio(){
            $id_servicio = $this->request->getVar('txt_id_servicio');
            $nombre = $this->request->getVar('txt_nombre');
            $id_instructor = $this->request->getVar('txt_id_instructor');

           $servicio = new Servicios();
            $datos=['id_servicio'=>$id_servicio,    
                    'nombre'=>$nombre,
                    'id_instructor'=>$id_instructor
                    ];              
            $servicio->update($id_servicio,$datos);
            return $this->verServicios();
            }
    }
