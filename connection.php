<?php
class DBConnection {
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "Doctrina";
  private $conn;
  
  public function __construct() {
    try {
      $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("Erro de conexão: " . $e->getMessage());
    }
  }
  
  public function getConnection() {
    return $this->conn;
  }
}

$db = new DBConnection();
$conn = $db->getConnection();

//$stmt = $conn->prepare("Select * from Aluno;");
//$stmt->execute();
//$result = $stmt->fetchAll();

//print_r($result);

?>
