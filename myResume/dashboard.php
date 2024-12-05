<?php
session_start();
include_once "header.php";
?>

<?php
require_once("modals.php");

if (isset($_SESSION['success'])) {
    echo "<script>showSuccessModal('{$_SESSION['success']}');</script>";
    unset($_SESSION['success']);
} elseif (isset($_SESSION['error'])) {
    echo "<script>showErrorModal('{$_SESSION['error']}');</script>";
    unset($_SESSION['error']);
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<body class="bg-light">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white" href="dashboard.php">Welcome | User</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="dashboard.php">Home</a></li>

                    <li class="nav-item"><a class="nav-link text-white" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="tutorial.php">Tutorial</a></li>
                    <?php if (isset($_SESSION['user'])): ?>
                        <?php if ($_SESSION['user']['haveResume'] == false): ?>
                            <li class="nav-item"><a class="nav-link text-white" href="createResume.php">Create Resume</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a class="nav-link text-white" href="resumePage.php">My Resume</a></li>
                        <?php endif; ?>
                        <li class="nav-item"><a class="nav-link text-white" href="registration.php">Logout</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link text-white" href="registration.php">Sign in</a></li>
                    <?php endif; ?>


                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Left Side: Image -->
            <div class="col-lg-8 mb-3">
                <img src="download.jpeg" alt="Barangay Image" class="img-fluid rounded shadow-sm w-100"
                    style="height: 100%; object-fit: cover;">
            </div>

            <!-- Right Side: Bulletin Board -->
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0 text-center">Bulletin Board</h5>
                    </div>
                    <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Important Update:</strong> Registration deadline is tomorrow!
                            </li>
                            <li class="list-group-item">
                                <strong>New Tutorial:</strong> How to create your resume.
                            </li>
                            <li class="list-group-item">
                                <strong>Notice:</strong> System maintenance at midnight.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050;">
        <div id="toast-message" class="toast" style="background-color: #28a745; color: white;">
            <div class="toast-body">Success: Operation completed!</div>
        </div>
    </div>

    <!-- Notification Script -->
    <script>
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');
            toastMessage.querySelector('.toast-body').textContent = message;
            const bsToast = new bootstrap.Toast(toastMessage);
            bsToast.show();
        }

        <?php if (isset($_SESSION['success'])): ?>
            showToast("<?php echo $_SESSION['success']; ?>");
        <?php endif; ?>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php
include_once "footer.php";
?>