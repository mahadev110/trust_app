<?php 
include 'views/layout/header.php'; 
include 'views/layout/sidebar.php'; 
?>

<div class="flex-grow-1 p-4">
    <h2 class="mb-4">Edit Donor</h2>

    <form action="index.php?page=donor&action=edit&id=<?= $donor['id'] ?>" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Donor Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= htmlspecialchars($donor['name']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" id="email" value="<?= htmlspecialchars($donor['email']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="phone" value="<?= htmlspecialchars($donor['phone']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="address" rows="3"><?= htmlspecialchars($donor['address']) ?></textarea>
        </div>

        <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Update Donor</button>
        <a href="index.php?page=donor&action=list" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>

<?php include 'views/layout/footer.php'; ?>
