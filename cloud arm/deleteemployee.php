<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require('db.php');

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE u_id='$user_id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

// Delete user account
if (isset($_POST['delete'])) {
    $delete_query = "DELETE FROM users WHERE u_id='$user_id'";
    mysqli_query($con, $delete_query);
    
    echo "<script>alert('Your account has been successfully deleted!'); window.location.href = 'displayemployee.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete User Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: 100px auto;
            background: #ffffff9f;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
        }

        .delete-button {
            display: block;
            margin: 0 auto;
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Delete User Account</h1>
    <form method="post" action="">
        <p>Are you sure you want to delete your account?</p>
        <input class="delete-button" type="submit" name="delete" value="Delete Account">
    </form>
</div>
</body>
</html>
