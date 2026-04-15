<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: crm_dashboard.php");
    exit;
}

$admin_user = "admin";
$admin_pass = "Admin@123";

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['loggedin'] = true;
        header("Location: crm_dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>CRM Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f3f5;
        }

        .login-card {
            max-width: 420px;
            margin: 80px auto;
        }
    </style>
</head>

<body>

    <div class="card shadow login-card p-4">
        <h3 class="text-center mb-3">🔐 CRM Login</h3>

        <?php if ($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST" class="mt-2">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control form-control-lg" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" required>
            </div>

            <button class="btn btn-primary w-100 btn-lg">Login</button>
        </form>
    </div>

</body>

</html>