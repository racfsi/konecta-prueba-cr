<?php
class Database
{
	public static function StartUp()
	{

		try {
			$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=konecta;user=postgres;password=0000');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch (PDOException $e) {
			echo "Error----->".$e->getMessage();
		}
	}
}
