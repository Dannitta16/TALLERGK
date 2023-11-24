<?php
class conexion {
    private $server = 'localhost';
    private $user = 'root';
    private $password = '1234';
    private $database = 'g';

    private $db; // Agrega una propiedad para almacenar la conexión PDO

    public function __construct() {
        try {
            $this->db = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->database, $this->user, $this->password);
        } catch (PDOException $error) {
            die("Error al conectarse: " . $error->getMessage());
        }
    }

    public function getDB() {
        return $this->db;
    }
}
?>
