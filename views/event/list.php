<?php
include 'views/layout/header.php';
include 'views/layout/sidebar.php';
?>
<div class="flex-grow-1 p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>List of Events</h4>
        <a href="index.php?page=event&action=add" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Add Events
        </a>
    </div>
 
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Date</th>
                <th>Location</th>
                <th>Type</th>
                <th>Status</th>
                <th>Fund (₹)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $index => $event): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($event['title']) ?></td>
                    <td><?= $event['event_date'] ?></td>
                    <td><?= htmlspecialchars($event['location']) ?></td>
                    <td><?= htmlspecialchars($event['event_type']) ?></td>
                    <td><?= ucfirst($event['status']) ?></td>
                    <td><?= number_format($event['raised_fund'] ?? 0, 2) ?> /
                        <?= number_format($event['expected_fund'] ?? 0, 2) ?></td>
                    <td>
                    <a href="index.php?page=event&action=edit&id=<?= $event['id']  ?>"
                            class="btn btn-sm btn-outline-primary me-1" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="index.php?page=event&action=delete&id=<?= $event['id'] ?>"
                            class="btn btn-sm btn-outline-danger" title="Delete"
                            onclick="return confirm('Delete this event?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php include 'views/layout/footer.php'; ?>