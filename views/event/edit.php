<?php 
include 'views/layout/header.php'; 
include 'views/layout/sidebar.php'; 
?>

<div class="flex-grow-1 p-4">
    <h2 class="mb-4">Edit Event</h2>

    <form action="index.php?page=event&action=update&id=<?= $event['id'] ?>" method="POST">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-4">
            <div class="mb-3">
                <label for="title" class="form-label">Event Title</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="<?= htmlspecialchars($event['title']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="event_date" class="form-label">Event Date</label>
                <input type="date" class="form-control" id="event_date" name="event_date"
                       value="<?= $event['event_date'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location"
                       value="<?= htmlspecialchars($event['location']) ?>">
            </div>
        </div>

        <!-- Column 2 -->
        <div class="col-md-4">
            <div class="mb-3">
                <label for="event_type" class="form-label">Event Type</label>
                <select class="form-select" id="event_type" name="event_type" required>
                    <?php
                    $types = [
                        'fundraising' => 'Fundraising',
                        'awareness' => 'Awareness',
                        'education' => 'Education',
                        'medical_camp' => 'Medical Camp',
                        'community_service' => 'Community Service',
                        'celebration' => 'Celebration',
                        'others' => 'Others'
                    ];
                    foreach ($types as $key => $label) {
                        $selected = ($event['event_type'] === $key) ? 'selected' : '';
                        echo "<option value=\"$key\" $selected>$label</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="organized_by" class="form-label">Organized By</label>
                <input type="text" class="form-control" id="organized_by" name="organized_by"
                       value="<?= htmlspecialchars($event['organized_by']) ?>">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="planned" <?= $event['status'] === 'planned' ? 'selected' : '' ?>>Planned</option>
                    <option value="completed" <?= $event['status'] === 'completed' ? 'selected' : '' ?>>Completed</option>
                    <option value="cancelled" <?= $event['status'] === 'cancelled' ? 'selected' : '' ?>>Cancelled</option>
                </select>
            </div>
        </div>

        <!-- Column 3 -->
        <div class="col-md-4">
            <div class="mb-3">
                <label for="expected_fund" class="form-label">Expected Fund</label>
                <input type="number" step="0.01" class="form-control" id="expected_fund" name="expected_fund"
                       value="<?= htmlspecialchars($event['expected_fund']) ?>">
            </div>

            <div class="mb-3">
                <label for="raised_fund" class="form-label">Raised Fund</label>
                <input type="number" step="0.01" class="form-control" id="raised_fund" name="raised_fund"
                       value="<?= htmlspecialchars($event['raised_fund']) ?>">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"><?= htmlspecialchars($event['description']) ?></textarea>
            </div>
        </div>
    </div>

    <!-- Buttons -->
    <div class="text-end mt-3">
        <button type="submit" class="btn btn-primary me-2">Update Event</button>
        <a href="index.php?page=event" class="btn btn-secondary">Back to List</a>
    </div>
</form>


  
</div>

<?php include 'views/layout/footer.php'; ?>
