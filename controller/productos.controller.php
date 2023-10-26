<?php
require_once('model/producto.php');

class ProductosController
{
	private $model;

	public function __CONSTRUCT()
	{
		$this->model = new Producto();
	}
	public function Index()
	{
		$productos  = $this->model->Read();
		require_once 'view/productos/productos.php';
	}
	public function New()
	{
		if (isset($_REQUEST['id'])) {
			$producto = $this->model->Get($_REQUEST['id']);
		}
		require_once 'view/productos/productos-new.php';
	}
	public function Venta()
	{
		if (isset($_REQUEST['id'])) {
			$producto = $this->model->Get($_REQUEST['id']);
		}
		require_once 'view/productos/productos-venta.php';
	}
}
