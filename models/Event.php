<?php
class Event {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM events");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM events WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function add($data) {
        $stmt = $this->pdo->prepare("INSERT INTO events (title, description, event_date, location, event_type, organized_by, expected_fund, raised_fund) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([
            $data['title'],
            $data['description'],
            $data['event_date'],
            $data['location'],
            $data['event_type'],
            $data['organized_by'],
            $data['expected_fund'],
            $data['raised_fund']
        ]);
    }
    

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE events SET title=?, description=?, date=?, location=? WHERE id=?");
        return $stmt->execute([$data['title'], $data['description'], $data['date'], $data['location'], $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM events WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
