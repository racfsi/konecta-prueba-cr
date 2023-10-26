<?php
require_once 'database.php';
class Config
{
    private $pdo;

    public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}