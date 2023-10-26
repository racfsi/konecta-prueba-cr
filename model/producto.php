<?php

class Producto
{
    private $pdo;


    public $id;
    public $nombre;
    public $ref;
    public $precio;
    public $peso;
    public $categoria;
    public $stock;
    public $cant_vendida;
    public $fecha_creacion;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Read()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM productos ORDER BY id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Get($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM productos WHERE id = ?");
            $stm->execute(array($id));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Create(Producto $data)
    {
        $date = date("Y-m-d");
        try {
            $sql = "INSERT INTO productos (nombre,ref,precio,peso,categoria,stock,cant_vendida,fecha_creacion) VALUES (?,?,?,?,?,?,?,?)";
            $this->pdo->prepare($sql)->execute(
                array(
                    $data->nombre,
                    $data->ref,
                    $data->precio,
                    $data->peso,
                    $data->categoria,
                    $data->stock,
                    0,
                    $date
                )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Update(Producto $data)
    {
        try {
            $sql = "UPDATE productos SET nombre=?,ref=?,precio=?,peso=?,categoria=?,stock=? WHERE id = ?";
            $this->pdo->prepare($sql)->execute(
                array(
                    $data->nombre,
                    $data->ref,
                    $data->precio,
                    $data->peso,
                    $data->categoria,
                    $data->stock,
                    $data->id
                )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Venta(Producto $data)
    {
        try {
            $sql = "UPDATE productos SET stock=?,cant_vendida=? WHERE id = ?";
            $this->pdo->prepare($sql)->execute(
                array(
                    $data->stock,
                    $data->cant_vendida,
                    $data->id
                )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
