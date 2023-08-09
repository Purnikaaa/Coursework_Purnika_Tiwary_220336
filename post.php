<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include the configuration file for database connection
    include 'config.php';

    $topic = $_POST['topic'];
    $descr = $_POST['descri'];
    $blog = $_POST['blog'];

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO save (topic, descr, blog) VALUES (?, ?, ?)";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind the parameters and execute the statement
        mysqli_stmt_bind_param($stmt, "sss", $topic, $descr, $blog);

        if (mysqli_stmt_execute($stmt)) {
            // Redirect to the admin page or show success message
            header('Location: admin.php');
            exit();
        } else {
            echo "Error: The blog could not be posted.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Statement preparation failed.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>