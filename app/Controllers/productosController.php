<?php
    namespace App\Controllers;

use App\Models\Productos;
use CodeIgniter\Controller;

    class productosController extends BaseController{


        public function verProductos(){
            $producto = new Productos();
            $datosBD['datosBD'] = $producto->findAll();
            return view('menuProductos',$datosBD);
        }


            public function guardarProductos(){
                $id_producto = $this->request->getVar('txt_id_producto');
                $nombre = $this->request->getVar('txt_nombre');
                $precio = $this->request->getVar('txt_precio');
    
               $producto = new Productos();
                $datos=['id_producto'=>$id_producto,    
                        'nombre'=>$nombre,
                        'precio'=>$precio
                        ];              
                $producto->insert($datos);
                return $this->verProductos();
                }

        public function eliminarProducto($id_producto=null){
            $producto = new Productos();
            $producto->delete($id_producto);
            return $this->verProductos();
        }

        public function localizarProducto($id_producto=null){  
            $producto = new Productos();
            $datosProducto['datosProducto']=$producto->where('id_producto',$id_producto)->first();
            return view('frm_actualizarProducto',$datosProducto);  
        }

            public function modificarProducto(){
                $id_producto = $this->request->getVar('txt_id_producto');
                $nombre = $this->request->getVar('txt_nombre');
                $precio = $this->request->getVar('txt_precio');
    
               $producto = new Productos();
                $datos=['id_producto'=>$id_producto,    
                        'nombre'=>$nombre,
                        'precio'=>$precio
                        ];              
                $producto->update($id_producto,$datos);
                return $this->verProductos();
                }
    }