<?php
include_once '../config.php';

class Connection {
  private $host;
  private $user;
  private $pass;
  private $db;

  public function __construct() {
    $this->host = HOST;
    $this->user = USER;
    $this->pass = PASSWORD;
    $this->db = DATABASE;
  }
  // Recuerda que debes quitar la frase que está en el echo para que ya no se muestre ese mensaje
  public function connect() {
    try {
      $connection = 'mysql:host='.$this->host.';dbname='.$this->db.';charset=utf8';
      $attributes = [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION];
      $pdo = new PDO($connection, $this->user, $this->pass, $attributes);
      return $pdo;

    } catch(PDOException $error) {
      die('Error message: '.$error->getMessage());
    }
  }
}
?>

?>