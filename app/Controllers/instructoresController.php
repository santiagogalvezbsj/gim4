    	<?php
    namespace App\Controllers;

use App\Models\Instructores;
use CodeIgniter\Controller;

    class instructoresController extends BaseController{

        public function verInstructores(){
            $instructor = new Instructores();
            $datosBD['datosBD'] = $instructor->findAll();
            return view('menuInstructores',$datosBD);
        }

        public function guardarInstructores(){
            $id_instructor = $this->request->getVar('txt_id_instructor');
            $nombre = $this->request->getVar('txt_nombre');
            $telefono = $this->request->getVar('txt_telefono');
            $correo = $this->request->getVar('txt_correo');

           $instructor = new Instructores();
            $datos=['id_instructor'=>$id_instructor,    
                    'nombre'=>$nombre,
                    'telefono'=>$telefono,
                    'correo'=>$correo
                    ];              
            $instructor->insert($datos);
            return $this->verInstructores();
            }

        public function eliminarInstructor($id_instructor=null){
            $instructor = new Instructores();
            $instructor->delete($id_instructor);
            return $this->verInstructores();
        }

        public function localizarInstructor($id_instructor=null){  
            $instructor = new Instructores();
            $datosInstructor['datosInstructor']=$instructor->where('id_instructor',$id_instructor)->first();
            return view('frm_actualizarInstructor',$datosInstructor);  
        }

        public function modificarInstructor(){
            $id_instructor = $this->request->getVar('txt_id_instructor');
            $nombre = $this->request->getVar('txt_nombre');
            $telefono = $this->request->getVar('txt_telefono');
            $correo = $this->request->getVar('txt_correo');

           $instructor = new Instructores();
            $datos=['id_instructor'=>$id_instructor,    
                    'nombre'=>$nombre,
                    'telefono'=>$telefono,
                    'correo'=>$correo
                    ];              
            $instructor->update($id_instructor,$datos);
            return $this->verInstructores();
            }
    }