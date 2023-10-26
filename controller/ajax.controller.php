<?php
require_once('./model/producto.php');
class AjaxController
{
    private $modelProd;


    public function __CONSTRUCT()
    {
        $this->modelProd = new Producto();
    }
    //SAVE PRODUCT FORM    
    public function SaveProd()
    {
        $objLoad = (object) array(
            'validate'             => TRUE
        );
        $prod = new Producto();
        $prod->nombre =  $_REQUEST['nombre'];
        $prod->ref = $_REQUEST['referencia'];
        $prod->precio = $_REQUEST['precio'];
        $prod->peso = $_REQUEST['peso'];
        $prod->categoria = $_REQUEST['categoria'];
        $prod->stock = $_REQUEST['stock'];
        if ($_REQUEST['action'] == 'editar') {
            $prod->id = $_REQUEST['id'];
            $objLoad->producto = $this->modelProd->Update($prod);
        } else {
            $objLoad->producto = $this->modelProd->Create($prod);
        }

        echo json_encode($objLoad);
    }
    //SAVE PRODUCT FORM    
    public function SaveVenta()
    {
        $objLoad = (object) array(
            'validate'             => TRUE
        );
        $prod = new Producto();
        $prod->stock = $_REQUEST['stock'];
        $prod->cant_vendida = $_REQUEST['cant_vendida'];
        $prod->id = $_REQUEST['idprod'];
        $objLoad->producto = $this->modelProd->Venta($prod);
        echo json_encode($_REQUEST);
    }
}
