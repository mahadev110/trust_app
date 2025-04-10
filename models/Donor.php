<!-- // models/Donor.php -->

<?php
class Donor {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM donors");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM donors WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function add($data) {
        $stmt = $this->pdo->prepare("INSERT INTO donors (name, email, phone, address) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['name'], $data['email'], $data['phone'], $data['address']]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE donors SET name=?, email=?, phone=?, address=? WHERE id=?");
        return $stmt->execute([$data['name'], $data['email'], $data['phone'], $data['address'], $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM donors WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

?>