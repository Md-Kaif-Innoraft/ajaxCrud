<?php

// Include vendors autoloading file.
require_once 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * Class ConnectDb for database connection.
 */
class ConnectDb {

  /**
   * @var string $servername
   *  It stores servername.
   */
  private $servername;

  /**
   * @var string $username
   *  It stores username.
   */
  private $username;

  /**
   * @var string $password
   *  It stores password of database.
   */
  private $password;

  /**
   * @var string $database
   *  It stores database name.
   */
  private $database;

  /**
   * @var object $conn
   *  It stores connection.
   */
  private $conn;

  /**
   * Constructor to set username, servername, password and database name.
   */
  function __construct() {
    $this->servername = $_ENV['SERVERNAME'];
    $this->username = $_ENV['USERNAME'];
    $this->password = $_ENV['PASSWORD'];
    $this->database = $_ENV['DATABASE'];
  }

  /**
   * Function to connect database.
   *
   * @return object
   *  Return connection.
   */
  public function connect() {
    try {
    $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
    // Set the PDO error mode to exception.
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    return $this->conn;
  }
}

$connect = new ConnectDb();
$conn = $connect->connect();
