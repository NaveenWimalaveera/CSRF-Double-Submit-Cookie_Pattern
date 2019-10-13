
<?php
// If user already logged in, index page redirected to home page
ob_start();
session_start();
if(isset($_SESSION['USERNAME'])){
	header("location: ./views/home.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
        <title>Cross Site Request Forgery Protection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Assets/css/registration-form.css">
	</head>
	<body>

    <div class="container1">
        <?php
        if(isset($_GET['er'])){
            echo '<h2>Hey!,</h2>
        <div class="alert alert-danger">
            <strong>User name or Password Incorrect!</strong> Authentication Failed!
            <a href = "http://localhost:63342/CSRF/index.php?_ijt=udeokp9c89f9ol9u7bicba0kus">Click here</a> to go back
        </div>'.$_GET['er'].'</h1><br />';

        }
        ?>
    </div>
    <h1> Cross Site Request Forgery - Double-Submit Cookie Pattern </h1>

		<form action="validateClass.php" method="post">

            <div class="container" id="registration-form">
                <div class="image"></div>
                <div class="frm">
                    <h2>Log in</h2>
                    <form>
                        <div class="form-group">
                            <label for="uname">Username:</label>
                            <input type="text" name="uname" class="form-control" id="user_name" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="psw">Password:</label>
                            <input type="password" name="psw" class="form-control" id="password" placeholder="Enter password">
                        </div>

                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success btn-lg" value="Login" >Login</button>

                            <a href="">Don't You have a Account !</a>
                        </div>



                    </form>
                </div>
            </div>



		</form>
	</body>
</html>