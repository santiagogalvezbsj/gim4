<?php
    namespace App\Controllers;

use App\Models\Ventas;
use CodeIgniter\Controller;

    class ventasController extends BaseController{

       

        public function verVentas(){
            $servicio = new Servicios();
            $datosBD['datosBD'] = $servicio->findAll();
            return view('menuServicios',$datosBD);
        }


            public function guardarVentas(){
                $id_venta = $this->request->getVar('txt_id_venta');
                $id_cliente = $this->request->getVar('txt_id_cliente');
                $id_vendedor = $this->request->getVar('txt_id_vendedor');
                $id_servicio = $this->request->getVar('txt_id_servicio');
    
               $venta = new Ventas();
                $datos=['id_venta'=>$id_venta,    
                        'id_cliente'=>$id_cliente,
                        'id_vendedor'=>$id_vendedor,
                        'id_servicio'=>$id_servicio
                        ];              
                $venta->insert($datos);
                return $this->verVentas();
                }

    
        public function eliminarVentas($id_venta=null){
            $venta = new Ventas();
            $venta->delete($id_venta);
            return $this->verVentas();
        }


            public function modificarVenta(){
                $id_venta = $this->request->getVar('txt_id_venta');
                $id_cliente = $this->request->getVar('txt_id_cliente');
                $id_vendedor = $this->request->getVar('txt_id_vendedor');
                $id_servicio = $this->request->getVar('txt_id_servicio');
    
               $venta = new Ventas();
                $datos=['id_venta'=>$id_venta,    
                        'id_cliente'=>$id_cliente,
                        'id_vendedor'=>$id_vendedor,
                        'id_servicio'=>$id_servicio
                        ];              
                $venta->update($id_venta,$datos);
                return $this->verVentas();
                }

                public function localizarVenta($id_venta=null){  
                    $venta = new Ventas();
                    $datosVenta['datosVenta']=$venta->where('id_venta',$id_venta)->first();
                    return view('frm_actualizarVenta',$datosVenta);  
                }
    }