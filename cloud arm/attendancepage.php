<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Page</title>
    <link rel="stylesheet" type="text/css" href="displayattendancestyle.css">
</head>
<body>

<ul>
    <li class="logout-link"><a href="login.php" onclick="return confirm('Are you sure you want to log out?')">Logout</a></li>
</ul>

<h1>Attendance Information</h1>
<table>
    <tr>
        <th>Attendance ID</th>
        <th>User ID</th>
        <th>Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Delete</th>
       
    </tr>

    <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=cloud_arm', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database: " . $e->getMessage();
        exit;
    }

    $sql = 'SELECT * FROM attendance';
    $queryresult = $pdo->query($sql);

    foreach($queryresult as $row) {
    ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['u_id'] ?></td>
            <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['start_time'] ?></td>
            <td><?php echo $row['end_time'] ?></td>
            <td><button><a href="deleteattendance.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></button></td>
           
        </tr>
    <?php } ?>
</table>
<button><a href="accountadmin.html">Back</a></button>
</body>
</html>
