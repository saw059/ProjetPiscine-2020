<?php
class DB{
	private $host='localhost';
	private $username='root';
	private $password ='root';
	public $database ='panier';
	public $db;

//mettre les infos de connexion
	public function __construct($host=null,$username=null,$password=null,$database=null){
		if ($host!= null) {
			$this->host=$host;
			$this->username=$username;
			$this->password=$password;
			$this->database=$database;

			# code...
		}
		try {
			$this->db = new PDO('mysql:host='.$this->host.';dbname'.$this->database,$this->username,$this->password, array(PDO ::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
				PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING ));
			
		} catch (PDOException $e) {
			die('<h1>impossible de se connecter a la base de données</h1>');
			
		}
		
	}






}