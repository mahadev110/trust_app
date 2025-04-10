<?php
include 'views/layout/header.php';
include 'views/layout/sidebar.php';
?>
<div class="flex-grow-1 p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Donor List</h4>
        <a href="index.php?page=donor&action=add" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Add Donor
        </a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($donors as $donor): ?>
                <tr>
                    <td><?= $donor['name'] ?></td>
                    <td><?= $donor['email'] ?></td>
                    <td><?= $donor['phone'] ?></td>
                    <td>
                        <a href="index.php?page=donor&action=edit&id=<?= $donor['id'] ?>"
                            class="btn btn-sm btn-outline-primary me-1" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="index.php?page=donor&action=delete&id=<?= $donor['id'] ?>"
                            class="btn btn-sm btn-outline-danger" title="Delete"
                            onclick="return confirm('Delete this donor?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'views/layout/footer.php'; ?>