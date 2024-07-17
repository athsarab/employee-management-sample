<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculation</title>
    <link rel="stylesheet" type="text/css" href="displaysalarystyle.css">
</head>
<body>

<ul>
    <li class="logout-link"><a href="login.php" onclick="return confirm('Are you sure you want to log out?')">Logout</a></li>
</ul>

<h1>Employee Salary Details</h1>

<form method="get" action="salarypage.php">
    <label for="uid">Enter User ID:</label>
    <input type="text" id="uid" name="uid" required>
    <input type="submit" value="Calculate Salary">
</form>

<?php
if (isset($_GET['uid'])) {
    $userId = $_GET['uid'];

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=cloud_arm', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Count attendance days
        $sql = 'SELECT COUNT(*) as total_days FROM attendance WHERE u_id = :uid';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':uid', $userId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $totalDaysWorked = $result['total_days'];
        $salaryPerDay = 5; 
        $totalSalary = $totalDaysWorked * $salaryPerDay;

        echo "<h2>Employee ID: $userId</h2>";
        echo "<p>Total Days Worked: $totalDaysWorked</p>";
        echo "<p>Total Salary: LKR $totalSalary</p>";
        
    } catch (PDOException $e) {
        echo "Failed to connect to the database: " . $e->getMessage();
    }
}
?>

<button><a href="accountadmin.html">Back</a></button>
</body>
</html>
