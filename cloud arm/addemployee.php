<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add employees</title>
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

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1;
        }

        .logo a {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            padding: 10px;
        }

        nav ul {
            display: flex;
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #555;
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
        input[type="email"],
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

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo"><a href="index.html">Home</a></div>
        <nav>
            <ul>
                <li><a href="#">Welcome Admin</a></li>
            </ul>
        </nav>
    </header>

    <form action="employee_cont.php" method="post" onsubmit="return validateForm()">
        <h1>Add User</h1>
        <label for="u_name">User Name</label>
        <input type="text" id="u_name" name="u_name" placeholder="User name" required>

        <label for="u_mobile_no">User Mobile No</label>
        <input type="text" id="u_mobile_no" name="u_mobile_no" placeholder="User Mobile No" required>

        <label for="u_address">User Address</label>
        <input type="text" id="u_address" name="u_address" placeholder="User Address" required>

        <input type="submit" value="Save" name="send">
    </form>

    <footer>
        <p>Athsara bimalka</p>
    </footer>

    <script>
        function validateForm() {
            let u_name = document.getElementById('u_name').value;
            let u_mobile_no = document.getElementById('u_mobile_no').value;
            let u_address = document.getElementById('u_address').value;

            if (u_name === "" || u_mobile_no === "" || u_address === "") {
                alert("All fields must be filled out");
                return false;
            }

           
            let mobilePattern = /^[0-9]{10}$/;
            if (!mobilePattern.test(u_mobile_no)) {
                alert("Invalid mobile number format");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
