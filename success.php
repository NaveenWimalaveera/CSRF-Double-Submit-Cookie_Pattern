<!DOCTYPE html>
<html lang="en">
<head>

    <title>Welcome!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/errorlogin.css">
</head>
<body>

<div class="container">
    <h2><b>Hey!,</b></h2>
    <div class="alert alert-success">
        <strong>Success!</strong> CSRF Validation successful :)
    </div>

    <?php
    if(isset($_GET['er'])){
        echo ' <div class="alert alert-success"> '.$_GET['er'].'</div></h1><br />';

    }
    ?>

</div>

<!-- Logout - seesion will destroy and redirected into index page -->
<div class ="logout">
    <a href="http://localhost:63342/CSRF/index.php?_ijt=udeokp9c89f9ol9u7bicba0kus">
        <button class="btn btn-danger logoutbtn">Logout</button>  </a>
</div>
</body>
</html>

