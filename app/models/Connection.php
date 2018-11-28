<?php 

namespace app\models;

use PDO;

class Connection {

	public function connect() {

		$config = Bind::get('config')->database;

		$pdo = new PDO("mysql:host=$config->host;dbname=$config->dbname;charset=$config->charset", $config->username, $config->password, $config->options);
		return $pdo;
	}
}
