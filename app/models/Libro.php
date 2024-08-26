<?php

require_once __DIR__ . '/../../core/Database.php';

class Libro {
    private $conn;
    private $table_name = 'libros';

    public $id;
    public $titulo;
    public $autor;
    public $año_publicacion;
    public $genero;

    public function __construct() {
        $this->conn = (new Database())->getConnection();
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (titulo, autor, año_publicacion, genero) VALUES (:titulo, :autor, :año_publicacion, :genero)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':año_publicacion', $this->año_publicacion);
        $stmt->bindParam(':genero', $this->genero);

        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET titulo = :titulo, autor = :autor, año_publicacion = :año_publicacion, genero = :genero WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':año_publicacion', $this->año_publicacion);
        $stmt->bindParam(':genero', $this->genero);

        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }
}

