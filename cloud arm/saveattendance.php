<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=cloud_arm', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database: " . $e->getMessage();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $u_id = $_POST['u_id'];
    $date = $_POST['date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    $sql = 'INSERT INTO attendance (u_id, date, start_time, end_time) VALUES (:u_id, :date, :start_time, :end_time)';
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':u_id', $u_id, PDO::PARAM_INT);
    $stmt->bindParam(':date', $date, PDO::PARAM_STR);
    $stmt->bindParam(':start_time', $start_time, PDO::PARAM_STR);
    $stmt->bindParam(':end_time', $end_time, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo '<script language="javascript">';
        echo 'alert("Attendance Successfully Recorded")';
        echo '</script>';
        echo "<script> location.href='attendancepage.php';</script>";
    } else {
        echo "Attendance Not Recorded, Try Again";
    }
}
?>
