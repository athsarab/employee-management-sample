<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=cloud_arm', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database: " . $e->getMessage();
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'DELETE FROM attendance WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo '<script language="javascript">';
        echo 'alert("Attendance record successfully deleted")';
        echo '</script>';
        echo "<script> location.href='attendancepage.php';</script>";
    } else {
        echo "Failed to delete the attendance record, try again.";
    }
}
?>
