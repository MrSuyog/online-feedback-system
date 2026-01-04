<!-- <?php
include "config.php";
$result = mysqli_query($conn, "SELECT * FROM feedback ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Feedback</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2 style="text-align:center;">All Feedback</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Date</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html> -->
<?php
include "config.php";
$result = mysqli_query($conn, "SELECT * FROM feedback ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | Feedback Table</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="table-page">
    <div class="glass-table-card">
        <h1>📋 Feedback Records</h1>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Feedback</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td class="message"><?php echo $row['message']; ?></td>
                        <td><?php echo date("d M Y", strtotime($row['created_at'])); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

</body>
</html>
