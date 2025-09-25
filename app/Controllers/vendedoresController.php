<?php
    namespace App\Controllers;

use App\Models\Vendedores;
use CodeIgniter\Controller;

    class vendedoresController extends BaseController{

        public function verVendedores(){
            $vendedor = new Vendedores();
            $datosBD['datosBD'] = $vendedor->findAll();
            return view('menuVendedores',$datosBD);
        }


        public function guardarVendedores(){
            $id_vendedor = $this->request->getVar('txt_id_vendedor');
            $nombre = $this->request->getVar('txt_nombre');
            $telefono = $this->request->getVar('txt_telefono');
            $correo = $this->request->getVar('txt_correo');

           $vendedor = new Vendedores();
            $datos=['id_vendedor'=>$id_vendedor,    
                    'nombre'=>$nombre,
                    'telefono'=>$telefono,
                    'correo'=>$correo
                    ];              
            $vendedor->insert($datos);
            return $this->verVendedores();
            }

        public function localizarVendedor($id_vendedor=null){  
            $vendedor = new Vendedores();
            $datosVendedor['datosVendedor']=$vendedor->where('id_vendedor',$id_vendedor)->first();
            return view('frm_actualizarVendedor',$datosVendedor);  
        }

            public function modificarVendedor(){
                $id_vendedor = $this->request->getVar('txt_id_vendedor');
                $nombre = $this->request->getVar('txt_nombre');
                $telefono = $this->request->getVar('txt_telefono');
                $correo = $this->request->getVar('txt_correo');
    
               $vendedor = new Vendedores();
                $datos=['id_vendedor'=>$id_vendedor,    
                        'nombre'=>$nombre,
                        'telefono'=>$telefono,
                        'correo'=>$correo
                        ];              
                $vendedor->update($id_vendedor,$datos);
                return $this->verVendedores();
                }
    }
    