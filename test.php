<!-- // models/Donor.php -->

<!-- header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Earam Trust Management</title>
    <link rel="icon" href="assets/earamlogo.jpg" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/trust_app/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="/trust_app/index.php">
                <img src="/trust_app/assets/earamlogo.jpg" alt="logo" class="rounded-circle"
                    style="width: 60px; height: 60px; object-fit: cover;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-flex ms-auto align-items-center">
                <span class="text-white me-3">Welcome, admin</span>
                <a href="/trust_app/logout.php" class="btn btn-sm btn-light">Logout</a>
            </div>

        </div>
    </nav>

    <!-- Begin page layout -->
    <div class="d-flex">
        <div class="d-flex flex-grow-1">
            <!-- sidebar.php -->
            <nav id="sidebar" class="bg-light border-end" style="width: 220px;">
                <div class="p-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/trust_app/index.php?page=dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/trust_app/index.php?page=donor">Donors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/trust_app/index.php?page=event">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/trust_app/index.php?page=contribution">Contributions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/trust_app/index.php?page=user">Users</a>
                        </li>
                    </ul>
                </div>
            </nav>

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
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter donor name" required>
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
                <!-- footer.php -->
            </div>
        </div>
        <footer class="bg-light border-end text-center py-3 mt-auto">

            <p class="mb-0 text-muted">
                &copy;
                <script>document.write(new Date().getFullYear());</script> EARAM, Puducherry
            </p>
        </footer>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/trust_app/assets/js/script.js"></script>

</body>

</html>