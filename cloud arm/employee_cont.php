<?php
try {
    // Establish a connection to the database
    $pdo = new PDO('mysql:host=localhost;dbname=cloud_arm', 'root', '');
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection errors
    echo "Failed to connect to the database: " . $e->getMessage();
    exit;
}

if (isset($_POST['send'])) {
    // Retrieve user input
    $u_name = isset($_POST['u_name']) ? $_POST['u_name'] : '';
    $u_mobile_no = isset($_POST['u_mobile_no']) ? $_POST['u_mobile_no'] : '';
    $u_address = isset($_POST['u_address']) ? $_POST['u_address'] : '';

    // Check if all fields are filled out
    if ($u_name === "" || $u_mobile_no === "" || $u_address === "") {
        echo "All fields must be filled out";
        exit;
    }

    // Prepare SQL statement
    $sql = 'INSERT INTO user (u_name, u_mobile_no, u_address) VALUES (:u_name, :u_mobile_no, :u_address)';
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':u_name', $u_name, PDO::PARAM_STR);
    $stmt->bindParam(':u_mobile_no', $u_mobile_no, PDO::PARAM_STR);
    $stmt->bindParam(':u_address', $u_address, PDO::PARAM_STR);

    // Execute the statement and check if successful
    if ($stmt->execute()) {
        echo '<script language="javascript">';
        echo 'alert("User Successfully Added")';
        echo '</script>';
        echo "<script> location.href='displayemployee.php';</script>";
    } else {
        echo "User Not Saved, Try Again";
    }
}
?>
