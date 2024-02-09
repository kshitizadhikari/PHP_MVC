<?php
    class GenericMapper
    {
        protected $db;
        protected $tableName;

        public function __construct($db, $tableName) {
            $this->db = $db;
            $this->tableName = $tableName;
        }
        
        protected function getObjectData($obj) {
            return get_object_vars($obj);
        }

        public function save($obj) {
            $data =  $this->getObjectData($obj);
            $columns = implode(', ', array_keys($data));
            $values = implode(', ', array_fill(0, count($data), '?'));
            $sql = "INSERT INTO $this->tableName ($columns) VALUES ($values)";
            return $this->db->query($sql, array_values($data)); //returns boolean value
        }

        public function findById($id) {
            $sql = "SELECT * FROM $this->tableName WHERE id=?";
            $result = $this->db->query($sql, [$id]);
            print_r($result);
            return $result;
        }
        

    }
?>