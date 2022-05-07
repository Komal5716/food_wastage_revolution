<?php
 require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">

        <script src="./js/angular.min.js"></script>
        <script src="./new_js/angular.min.js"></script>
        <script src="./js/Sign_up.js"></script>
        <script src="alerts-boxes/js/sweetalert.min.js"></script>

</head>

<body ng-app="login" ng-controller="controller1" class="bodypage" style="background-image: url(./img/2.jpg);">
        <div class="container">
                <section class="section2">

                        <div class="form sign_up" id="sign_up">
                                <a href="login.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                        </svg>
                                </a>
                                <h5>Sign up</h5>
                                <form name="f1" method="post" action="Sign_up.php">
                                        <!-- fullname -->
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-container="body"
                                                data-bs-toggle="popover" data-bs-placement="right"
                                                data-bs-content="Right popover">
                                                Popover on right
                                        </button> -->
                                        <label for="fullname" class="form-label">Full Name</label>
                                        <div>
                                                <input name="fname" type="text" class="form-control input" id="fullname"
                                                        ng-minlength="3" placeh0older="enter your full name"
                                                        ng-maxlength="15" ng-model="fname" required class="input-txt"
                                                        data-bs-container="body" data-bs-toggle="popover"
                                                        data-bs-placement="right" data-bs-content="Right popover">
                                        </div>
                                        <!-- <span ng-show="f1.fname.$error.required">full name is required !!</span>
                                        <span ng-show="f1.fname.$error.maxlength">full name is too large
                                                !!!</span>
                                        <span ng-show="f1.fname.$error.minlength">full name is too small
                                                !!</span>
                                        <span class="span-valid" ng-show="f1.fname.$valid">Valid !</span><br> -->

                                        <!-- Email -->
                                        <label for="Email_id" class="form-label">Email address</label>
                                        <input type="email" class="form-control input" id="Email_id"
                                                placeholder="email@example.com" ng-model="Ename" name="Ename" required>
                                        <!-- <span ng-show="f1.Ename.$error.required">Email is required !!</span>
                                        <span class="span-valid" ng-show="f1.Ename.$valid">Valid !</span><br> -->

                                        <!-- password -->
                                        <label for="password_id" class="form-label">Password</label>
                                        <input type="password" class="form-control input" id="password_id"
                                                placeholder="Password" ng-minlength="6" ng-maxlength="15" name="Pass"
                                                ng-model="Pass" required>
                                        <!-- <span ng-show="f1.Pass.$error.required">password is required !!</span>
                                        
                                        <span ng-show="f1.Pass.$error.minlength">password is too small
                                                !!</span>
                                        <span class="span-valid" ng-show="f1.Pass.$valid">Valid !</span><br> -->

                                        <!-- Confim password -->
                                        <label for="password_id_c" class="form-label">Confim
                                                Password</label>
                                        <input type="password" class="form-control input" id="password_id_c"
                                                placeholder="Password" name="Passc">
                                        <label for="Mobile_no" class="form-label">Mobile_no</label>
                                        <input type="number" class="form-control input" id="Mobile_no"
                                                placeholder="Mobile no." name="mobile"><br>
                                        <div class="col">
                                                <label for="type" class="form-label">Option</label>
                                                <select class="form-select" id="type" name="type" required>
                                                        <option selected Value="User">Choose...</option>
                                                        <option Value="User">User</option>
                                                        <option Value="Farmer">Farmer</option>
                                                        <option Value="NGO">NGO</option>
                                                </select>

                                                <!-- <input type="radio" name="type" Value="User" id="">User
                                                <input type="radio" name="type" Value="Farmer" id="">Farmer
                                                <input type="radio" name="type" Value="NGO" id="">NGO -->
                                                <div class="invalid-feedback">
                                                        Please select a valid state.
                                                </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <!-- <button type="submit" class="btn btn-primary" ng-click="sign_up()"
                                                onclick="Submit()">Sign
                                                up</button> -->
                                        <button type="submit" class="btn btn-primary" name="submit" ng-click="sign_up()"
                                                onclick="Submit()">Sign
                                                up</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>

                                </form>
                                <div id="new"></div>
                        </div>
                </section>

        </div>
        <?php
                if(isset($_POST['submit']))
                {
                    //echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';
                    $fname=$_POST['fname'];
                    $Ename =$_POST['Ename'];
                    $Pass =$_POST['Pass'];
                    $Passc =$_POST['Passc'];
                    $mobile =$_POST['mobile'];
                    $type =$_REQUEST['type'];
                    
                    
                    if($Pass==$Passc){
                        $query=("SELECT * FROM users WHERE Email='$Ename' AND Mobile='$mobile'");
                
                        $query_run =mysqli_query($conf,$query);
                        if(mysqli_num_rows($query_run)>0)
                        {   //echo '<script type="text/javascript">swal("Information!", "code run!,", "info");</script>'; 
                            echo '<script type="text/javascript"> 
                                    
                                         swal("Information!", "users already exist try another Email or Mobile!,", "info");
                                    
                                    </script>'; 
                        }else{       
                            $query="insert into users values('','$fname','$Ename','$Pass','$mobile','$type')";
                            $query_run = mysqli_query($conf,$query);

                            if($query_run)
                            {
                              echo '<script type="text/javascript"> 
                                        swal({
                                            title: "user registered",
                                            text: "",
                                            icon: "success",
                                            })
                                            .then((willDelete) => {
                                            if (willDelete) {
                                                document.location.href = href="login.php";
                                            }
                                            }); 
                                    </script>'; 
                            }
                            else
                            {
                                echo '<script type="text/javascript">
                                        swal("Warning!", " registered Error!,", "error"); 
                                      </script>'; 
                            }
                        }
                    }
                    else
                    {
                     echo '<script type="text/javascript"> 
                                    
                                        swal("Warning!", "password and Comform password does not mactch!!!,", "info");
                                    
                                    </script>';
                    }
                }
            ?>

        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/popper.min.js"></script>
</body>


</html>