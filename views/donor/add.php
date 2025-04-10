<?php 
include 'views/layout/header.php'; 
include 'views/layout/sidebar.php'; 
?>

<div class="flex-grow-1 p-4">
    <h4>Add Donor</h4>

    <form action="index.php?page=donor&action=add" method="POST">

        <div class="mb-3">
            <label for="name" class="form-label">Donor Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter donor name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Donor Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter donor email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Donor Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter donor phone" required>
        </div>
        <div class="mb-3">
    <label for="address" class="form-label">Donor Address</label>
    <textarea class="form-control" id="address" name="address" placeholder="Enter address" required></textarea>
</div>

        <button type="submit" class="btn btn-success">Save Donor</button>
        <a href="index.php?page=donor" class="btn btn-secondary">Back to List</a>
    </form>
</div>

<?php include 'views/layout/footer.php'; ?>
