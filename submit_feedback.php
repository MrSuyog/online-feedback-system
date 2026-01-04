<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Feedback Submitted Successfully');
            window.location='index.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
