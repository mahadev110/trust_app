<?php
// controllers/DonorController.php
require_once 'models/Donor.php';

class DonorController {
    private $model;

    public function __construct($pdo) {
        $this->model = new Donor($pdo);
    }

    public function list() {
        $donors = $this->model->getAll();
        include 'views/donor/list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->add($_POST);
            header("Location: index.php?page=donor&action=list");
            exit;
        } else {
            include 'views/donor/add.php';
        }
    }

    public function edit() {
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->update($id, $_POST);
            header("Location: index.php?page=donor&action=list");
        } else {
            $donor = $this->model->get($id);
            include 'views/donor/edit.php';
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->delete($id);
        header("Location: index.php?page=donor&action=list");
    }
}

?>