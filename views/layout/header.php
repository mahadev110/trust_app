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

<body  class="d-flex flex-column min-vh-100">

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

            <?php if (isset($_SESSION['username'])): ?>
                <div class="d-flex ms-auto align-items-center">
                    <span class="text-white me-3">Welcome, <?= $_SESSION['username'] ?></span>
                    <a href="/trust_app/logout.php" class="btn btn-sm btn-light">Logout</a>
                </div>
            <?php endif; ?>

        </div>
    </nav>

    <!-- Begin page layout -->
    <div class="d-flex">