<?php 
 session_start();
 require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/login.css">


        <script src="./js/angular.min.js"></script>
        <script src="./js/app_login.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                crossorigin="anonymous">
        <script src="alerts-boxes/js/sweetalert.min.js"></script>

</head>

<body ng-app="login" ng-controller="controller" style="background-image: url(./img/2.jpg);">
        <section class="bodypage">
                <div class="container">
                        <div class="form login" id="login">
                                <h5>Login</h5>
                                <form method="post" action="login.php">
                                        <label for="exampleDropdownFormEmail1" class="form-label">Email
                                                address</label>
                                        <input type="email" class="form-control input" id="exampleDropdownFormEmail1"
                                                placeholder="email@example.com" name="Email">
                                        <label for="exampleDropdownFormPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control input"
                                                id="exampleDropdownFormPassword" placeholder="Password"
                                                name="password"><br>
                                        <!-- <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                <label class="form-check-label" for="dropdownCheck">Remember me</label>
                                        </div> -->
                                        <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" onclick="myFunction()">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Show
                                                        password</label>
                                        </div>
                                        <button type="submit" id="" name="Login" ng-click="login()"
                                                class="btn btn-primary">Login</button>

                                        <div class="dropdown-divider"></div>
                                        <a href="Sign_up.php">New around here? Sign up</a> <br>
                                        <a href="#">Forgot password?</a>
                                </form>
                        </div>
                </div>
        </section>
        <?php
            if(isset($_POST['Login'])){
    
                $username=$_POST['Email'];
                $password=$_POST['password'];
                $_COOKIE['$username']=$username;
        
                $query=("SELECT * FROM users WHERE Email='$username' AND Password='$password'");
                
                $query_run =mysqli_query($conf,$query);
                if(mysqli_num_rows($query_run)>0)
                {   
                    //valid in Session
                    $row=mysqli_fetch_assoc($query_run);
                    $_SESSION['S_no']=$row['S_no'];
                    $_SESSION['full_name']=$row['full_name'];
                    $_SESSION['Mobile']=$row['Mobile']; 
                    $_SESSION['Type']=$row['Type'];  
                    header('location:index.php');
                }
                else 
                { 
                   
                    //echo '<script type="text/javascript"> alert("invalid uaser!")</script>';
                    echo '<script type="text/javascript"> 

                        swal("invalid user!!", "sorry username & password Wrong", "error");

                    </script>';
                }
            }
            ?>
        </section>

        <script>
        function myFunction() {
                var x = document.getElementById("exampleDropdownFormPassword");
                if (x.type === "password") {
                        x.type = "text";
                } else {
                        x.type = "password";
                }
        }
        </script>


        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/popper.min.js"></script>
</body>

</html>