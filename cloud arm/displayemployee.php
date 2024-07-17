<html>
<head>
    <title>User Page</title>
    <link rel="stylesheet" type="text/css" href="displayusersstyle.css">
</head>
<body>

<ul>
    <li class="logout-link"><a href="login.php" onclick="return confirm('Are you sure you want to log out?')">Logout</a></li>
</ul>

<h1>User Information</h1>
<table>
    <tr>
        <th>User ID</th>
        <th>User Name</th>
        <th>User Mobile No</th>
        <th>User Address</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>

    <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=cloud_arm', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database: " . $e->getMessage();
        exit;
    }

    $sql = 'SELECT * FROM user';
    $queryresult = $pdo->query($sql);

    foreach($queryresult as $row) {
    ?>
        <tr>
            <td><?php echo $row['u_id'] ?></td>
            <td><?php echo $row['u_name'] ?></td>
            <td><?php echo $row['u_mobile_no'] ?></td>
            <td><?php echo $row['u_address'] ?></td>
            <td><button><a href="deleteemployee.php?uid=<?php echo $row['u_id'] ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a></button></td>
            <td><button><a href="attendanceform.php?uid=<?php echo $row['u_id'] ?>">Attendance</a></button></td>
        </tr>
    <?php } ?>
</table>
<button><a href="accountadmin.html">Back</a></button>
</body>
</html>
