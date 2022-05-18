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

    function read(){
        $query = "SELECT
                    c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
                FROM
                    " . $this->table_name . " p
                    LEFT JOIN
                        categories c
                            ON p.category_id = c.id
                ORDER BY
                    p.created DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
?>