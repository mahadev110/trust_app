<?php 
include 'views/layout/header.php'; 
include 'views/layout/sidebar.php'; 
?>

<div class="flex-grow-1 p-4">
    <h4 class="mb-4">Dashboard</h4>

    <div class="row g-4">
        <!-- Donors Card -->
        <div class="col-md-6">
            <div class="card shadow rounded-4 border-0 bg-light position-relative overflow-hidden">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3 text-primary">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <div>
                        <h5 class="card-title text-dark mb-1">Total Donors</h5>
                        <p class="card-text fs-2 fw-bold text-dark"><?= $donorCount ?></p>
                    </div>
                </div>

                <!-- Add Donor Button (bottom right) -->
                <a href="index.php?page=donor&action=add" 
                   class="position-absolute text-decoration-none text-primary d-flex align-items-center"
                   style="bottom: 10px; right: 15px; font-size: 0.95rem;">
                    <i class="fas fa-plus-circle me-1"></i> Add Donor
                </a>
            </div>
        </div>

        <!-- Events Card -->
        <div class="col-md-6">
            <div class="card shadow rounded-4 border-0 bg-light position-relative overflow-hidden">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3 text-success">
                        <i class="fas fa-calendar-alt fa-3x"></i>
                    </div>
                    <div>
                        <h5 class="card-title text-dark mb-1">Total Events</h5>
                        <p class="card-text fs-2 fw-bold text-dark"><?= $eventCount ?></p>
                    </div>
                </div>

                <!-- Add Event Button (bottom right) -->
                <a href="index.php?page=event&action=add" 
                   class="position-absolute text-decoration-none text-success d-flex align-items-center"
                   style="bottom: 10px; right: 15px; font-size: 0.95rem;">
                    <i class="fas fa-plus-circle me-1"></i> Add Event
                </a>
            </div>
        </div>
    </div>
</div>



<?php include 'views/layout/footer.php'; ?>
