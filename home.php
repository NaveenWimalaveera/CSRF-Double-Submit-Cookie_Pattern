
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Assets/css/styles.css">
        <link rel="stylesheet" type="text/css" href="Assets/css/demo.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>

        <script>
            $(document).ready(function(){

                var decodedCookie = decodeURIComponent(document.cookie);
                var values = decodedCookie.split(';');
                
                var cookie_CSRF = "ssd_csrf" + "=";
                var CSRF = "";

                for(var i = 0; i <values.length; i++) {
                    var d = values[i];
                    while (d.charAt(0) == ' ') {
                        d = d.substring(1);
                    }
                    if (d.indexOf(cookie_CSRF) == 0) {
                        CSRF = d.substring(cookie_CSRF.length, d.length);
                        document.getElementById("token").setAttribute('value', CSRF);
                    }
                }
            });
        </script>
	</head>
	<body>

        <?php
        if(isset($_GET['er'])){
            echo '<h3><b> style="text-align:center;color:green;">'.$_GET['er'].'</h3>';
        }
        ?>
        <div class="container-fluid">
            <header>

                <div class="limiter">
                    <h1>Cross Site Request Forgery - Double-Submit Cookie Pattern </h1>
                </div>

            </header>

            <!-- Logout - seesion will destroy and redirected into index page -->
            <div class ="logout">
                <a href="logoutClass.php">
                    <button class="btn btn-danger logoutbtn">Logout</button>  </a>

                <button onclick="myFunction()" class="btn btn-default viewbtn" >Token</button>
            </div>

            <div class="containerForm">
                <div class="heading">
                    <h2>Welcome to Post me!</h2>
                </div>
                <div class="main">
                    <form action="tokenValidatorClass.php" method="post" >

                        <div class="form-group owner">
                            <label for="email">Your Text</label>
                            <input type="text" name="request" class="form-control" id="request">
                        </div>

                        <div class="form-group index">
                            <label for="index no">Index No</label>
                            <input type="text" class="form-control" id="INDEX NO">
                        </div>
                        <div class="form-group" id="submit" >
                            <button type="submit" class="btn btn-default" >Confirm</button>
                        </div>

                        <!-- Auto generated token added each time -->
                        <div class="form-group token" >
                            <label for="token"></label>
                            <input type="text" class="form-control" value="" id="token" name="token">
                        </div>



                    </form>
                </div>
            </div>
        </div>




        <script>
            function myFunction() {
                var x = document.getElementById("token");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>


    </body>
</html>