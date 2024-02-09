
<?php 
    class Database {
        public $HOSTNAME = "localhost";
        public $USERNAME = "root";
        public $PASSWORD = "";
        public $DATABASE = "mvc";
        public $conn;
        public $result;
    
        public function __construct() {
            try {
                $dsn = "mysql:host=" . $this->HOSTNAME . ";dbname=" . $this->DATABASE;
                $this->conn = new PDO($dsn, $this->USERNAME, $this->PASSWORD);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Database connection error : " . $e->getMessage();
            }
        }
        
        public function query($query, $params = []) {
            try {
                $this->result = $this->conn->prepare($query);
                return $this->result->execute($params);
            } catch (PDOException $e) {
                echo "Query execution error: " . $e->getMessage();
                return false;
            }
        }
    }
?>
