<?php
    namespace App\Controllers;

use App\Models\Clientes;
use CodeIgniter\Controller;

    class clientesController extends BaseController{
        
        public function verClientes(){
            $cliente = new Clientes();
            $datosBD['datosBD'] = $cliente->findAll();
            return view('menuClientes',$datosBD);
        }


         public function guardarCliente(){
                    $id_cliente = $this->request->getVar('txt_id_cliente');
                    $nombre = $this->request->getVar('txt_nombre');
                    $telefono = $this->request->getVar('txt_telefono');
                    $correo = $this->request->getVar('txt_correo');
        
                   $cliente = new Clientes();
                    $datos=['id_cliente'=>$id_cliente,    
                            'nombre'=>$nombre,
                            'telefono'=>$telefono,
                            'correo'=>$correo
                            ];              
                    $cliente->insert($datos);
                    return $this->verClientes();
                    }

        public function eliminarCliente($id_cliente=null){
            $cliente = new Clientes();
            $cliente->delete($id_cliente);
            return $this->verClientes();
        }

        public function localizarCliente($id_cliente=null){  
            $cliente = new Clientes(); 
             $datosCleinte['datosCliente']=$producto->where('id_cliente',$id_cliente)->first();
            return view('frm_actualizarCliente',$datosCliente);  
        }     



        public function modificarCliente(){
                    $id_cliente = $this->request->getVar('txt_id_cliente');
                    $nombre = $this->request->getVar('txt_nombre');
                    $telefono = $this->request->getVar('txt_telefono');
                    $correo = $this->request->getVar('txt_correo');
        
                   $cliente = new Clientes();
                    $datos=['id_cliente'=>$id_cliente,    
                            'nombre'=>$nombre,
                            'telefono'=>$telefono,
                            'correo'=>$correo
                            ];              
                    $cliente->update($id_cliente,$datos);
                    return $this->verClientes();
                    }
    }