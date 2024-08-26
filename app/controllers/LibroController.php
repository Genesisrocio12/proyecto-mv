<?php

require_once '../app/models/Libro.php';

class LibroController {
    private $libroModel;

    public function __construct() {
        $this->libroModel = new Libro();
    }

    public function index() {
        $libros = $this->libroModel->getAll();
        header('Content-Type: application/json');
        echo json_encode($libros);
    }

    public function create() {
        $data = $_POST;
        $this->libroModel->create($data);
        echo 'Libro creado';
    }

    public function update() {
        $data = $_POST;
        $this->libroModel->update($data);
        echo 'Libro actualizado';
    }

    public function edit() {
        $id = $_GET['id'];
        $libro = $this->libroModel->getById($id);
        include '../app/views/libros/edit.php';
    }

    public function delete() {
        $id = $_GET['id'];
        $this->libroModel->delete($id);
        echo 'Libro eliminado';
    }
}
