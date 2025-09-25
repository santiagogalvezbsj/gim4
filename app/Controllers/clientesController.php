<?php
    namespace App\Controllers;

use App\Models\Ciudadanos;
use CodeIgniter\Controller;

    class ControladorCiudadanos extends BaseController{
        public function verCiudadanos(){
            $db = \Config\Database::connect();
            $builder = $db->table('ciudadanos');
            $builder->select('ciudadanos.*, municipios.nombre as nombre_municipio, nivelesacademicos.nombre as nombre_nivel_acad');
            $builder->join('municipios', 'municipios.cod_muni = ciudadanos.lugar_nacimiento', 'left');
            $builder->join('nivelesacademicos', 'nivelesacademicos.cod_nivel_acad = ciudadanos.cod_nivel_acad', 'left');
            $query = $builder->get();
            $datosBD['datosBD'] = $query->getResultArray();
            return view('ciudadanos',$datosBD);
        }

        public function guardarCiudadano(){
            $dpi = $this->request->getVar('txt_codigo');
            $apellido = $this->request->getVar('txt_apellido');
            $nombre = $this->request->getVar('txt_nombre');
            $direccion = $this->request->getVar('txt_direccion');
            $telCasa = $this->request->getVar('txt_tel_casa');
            $telCelular = $this->request->getVar('txt_tel_movil');
            $email = $this->request->getVar('txt_email');
            $fechaNac = $this->request->getVar('txt_fechanac');
            $nivelAcad = $this->request->getVar('txt_cod_nivel_acad');
            $municipio = $this->request->getVar('txt_cod_muni');
            $pass = $this->request->getVar('txt_contra');
    
            $ciudadano = new Ciudadanos();
            $datos=['dpi'=>$dpi,
                    'apellido'=>$apellido,
                    'nombre'=>$nombre,
                    'direccion'=>$direccion,
                    'tel_casa'=>$telCasa,
                    'tel_movil'=>$telCelular,
                    'email'=>$email,
                    'fechanac'=>$fechaNac,
                    'cod_nivel_acad'=>$nivelAcad,
                    'cod_muni'=>$municipio,
                    'contra'=>$pass
                    ];
            $ciudadano->insert($datos);
            return $this->verCiudadanos();
        }
    
        public function eliminarCiudadano($dpi=null){
            $ciudadano = new Ciudadanos();
            $ciudadano->delete($dpi);
            return $this->verCiudadanos();
        }
    
        public function localizarCiudadano($dpi=null){  
            $ciudadano = new Ciudadanos();
            $datosCiudadano['datosCiudadano']=$ciudadano->where('dpi',$dpi)->first();
            return view('frm_actualizarCiudadano',$datosCiudadano);  
        }
    
        public function modificarCiudadano(){
            $dpi = $this->request->getVar('txt_codigo');
            $apellido = $this->request->getVar('txt_apellido');
            $nombre = $this->request->getVar('txt_nombre');
            $direccion = $this->request->getVar('txt_direccion');
            $telCasa = $this->request->getVar('txt_tel_casa');
            $telCelular = $this->request->getVar('txt_tel_movil');
            $email = $this->request->getVar('txt_email');
            $fechaNac = $this->request->getVar('txt_fechanac');
            $nivelAcad = $this->request->getVar('txt_cod_nivel_acad');
            $municipio = $this->request->getVar('txt_cod_muni');
            $pass = $this->request->getVar('txt_contra');
    
            $ciudadano = new Ciudadanos();
            $datos=['dpi'=>$dpi,
                    'apellido'=>$apellido,
                    'nombre'=>$nombre,
                    'direccion'=>$direccion,
                    'tel_casa'=>$telCasa,
                    'tel_movil'=>$telCelular,
                    'email'=>$email,
                    'fechanac'=>$fechaNac,
                    'cod_nivel_acad'=>$nivelAcad,
                    'cod_muni'=>$municipio,
                    'contra'=>$pass
                    ];
    
    
            $ciudadano->update($dpi,$datos);
            return $this->verCiudadanos();
        }
    }