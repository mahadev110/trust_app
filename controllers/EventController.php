<?php
// controllers/EventController.php
require_once 'models/Event.php';

class EventController {
    private $model;

    public function __construct($pdo) {
        $this->model = new Event($pdo);
    }

    public function list() {
        $events = $this->model->getAll();
        include 'views/event/list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->add($_POST);
            header("Location: index.php?page=event&action=list");
            exit;
        } else {
            include 'views/event/add.php';
        }
    }

    public function edit() {
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->update($id, $_POST);
            header("Location: index.php?page=event&action=list");
        } else {
            $event = $this->model->get($id);
            include 'views/event/edit.php';
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->delete($id);
        header("Location: index.php?page=event&action=list");
    }
}
