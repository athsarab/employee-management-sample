<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, rgb(128, 128, 128) 0%, rgb(31, 31, 31) 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        form {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="time"],
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            box-sizing: border-box;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #636364;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #000000;
        }
    </style>
</head>
<body>
    <form action="saveattendance.php" method="post">
        <h1>Record Attendance</h1>
        <input type="hidden" name="u_id" value="<?php echo $_GET['uid']; ?>">
        
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required>

        <label for="start_time">Start Time</label>
        <input type="time" id="start_time" name="start_time" required>

        <label for="end_time">End Time</label>
        <input type="time" id="end_time" name="end_time" required>

        <input type="submit" value="Save Attendance">
    </form>
</body>
</html>
