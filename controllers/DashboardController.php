<?php
require_once 'models/Donor.php';
require_once 'models/Event.php';

class DashboardController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function list() {
        $donorModel = new Donor($this->pdo);
        $eventModel = new Event($this->pdo);

        $donorCount = count($donorModel->getAll());
        $eventCount = count($eventModel->getAll());

        include 'views/dashboard/index.php';
    }
}
