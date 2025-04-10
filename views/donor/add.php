<?php
include 'views/layout/header.php';
include 'views/layout/sidebar.php';
?>

<div class="flex-grow-1 p-4">
    <h4>Add Donor</h4>
    <div class="container-fluid">
        <div class="card shadow-sm p-4">

            <form action="index.php?page=donor&action=add" method="POST">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Donor Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter donor name"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter donor email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Enter donor phone" required>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="" disabled selected>Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob">
                        </div>

                        <div class="mb-3">
                            <label for="donation_type" class="form-label">Donation Type</label>
                            <select class="form-select" id="donation_type" name="donation_type" required>
                                <option value="" disabled selected>Select donation type</option>
                                <option value="One-time">One-time</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Annual">Annual</option>
                            </select>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="7"
                                placeholder="Enter address" required></textarea>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-success me-2">Save Donor</button>
                    <a href="index.php?page=donor" class="btn btn-secondary">Back to List</a>
                </div>
            </form>
        </div>
    </div>
    <?php include 'views/layout/footer.php'; ?>