<?php

class Product
{
	public function getData()
	{
		$host = 'db'; // Docker useage: Docker service name for MySQL
		$db = 'product_db'; // Database name
		$user = 'product_db_user'; // Database username
		$pass = 'secret'; // Database password
		$charset = 'utf8mb4'; // Character set

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=3306"; // Data Source Name
		$options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES   => false,
		];

		try {
			$pdo = new PDO($dsn, $user, $pass, $options); // Create a new PDO instance
			// echo "Connected successfully"; // Connection successful
			$stmt = $pdo->query("SELECT * FROM product");
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			throw new PDOException($e->getMessage(), (int)$e->getCode()); // Throw exception on error
		}
	}
}
