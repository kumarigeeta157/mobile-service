<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

// Database config
$host = "127.0.0.1";
$db = "u924969600_add_crm";
$user = "u924969600_Pra7456";
$pass = "Service@7456$";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("DB Error: " . $conn->connect_error);
}

$sql = "SELECT * FROM repair_requests ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>CRM Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }

        /* Mobile left-scroll */
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scroll-behavior: smooth;
                padding-bottom: 10px;
            }

            .table-responsive table {
                min-width: 900px;
                /* force left scroll */
            }
        }
    </style>

</head>

<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">📋 CRM Dashboard</span>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </nav>

    <div class="container mt-4">

        <div class="table-responsive shadow">
            <table class="table table-striped table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Issue</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= htmlspecialchars($row['name']) ?></td>
                                <td>
                                    <a href="tel:<?= htmlspecialchars($row['phone']) ?>" class="btn btn-success btn-sm">
                                        📞 Call
                                    </a>
                                </td>

                                <td><?= $row['brand'] ?></td>
                                <td><?= $row['model'] ?></td>
                                <td><?= $row['issue'] ?></td>
                                <td><?= $row['created_at'] ?></td>
                            </tr>
                      <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center py-3">No records found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>

    </div>

</body>

</html>

<?php $conn->close(); ?>