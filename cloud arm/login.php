<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employees</title>
  <link rel="stylesheet" type="text/css" href="login-userstyle.css">
  <link href='https://css.gg/log-in.css' rel='stylesheet'>
</head>
    
<body>
<header>
    <div class="logo"><a href="#">cloud arm</a></div>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
         
        </ul>
    </div>
    </nav>
</header>

<div id="page-container">
   <div id="content-wrap">
    <div class="container login-box">
        <h2>Admin Login</h2>
        <form action="logcontrol.php" method="post" enctype="multipart/form-data" name="adminloginform">
            <div class="user-box">
                <input type="text" class="form-control" name="username" placeholder="Enter Your Username" required data-error="Please enter your Username">
            </div>
            <div class="user-box">
                <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required data-error="Please enter your Password">
            </div>
            <div class="user-box">
                <select class="form-control" name="role">
                    
                    <option value="accountadmin">Account Admin</option>
                    
                </select>
            </div>
            <button class="btn-login" type="Submit" name="login" onclick="return validatelogin();">Login</button>
        </form>
    </div>
   </div>
</div>
<br><br><br><br>
    <footer id="footer">
<p>athsara bimalka</p>
</footer>
</body>
</html>