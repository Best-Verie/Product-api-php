<?php
class Product {

    private $conn;
    private $table_name = "products";

    private $id;
    private $name;
    private $description;
    private $price;
    private $category_id;
    private $category_name;
    private $created;

    public function __construct($db) {
        $this->conn = $db;
    }
}
?>