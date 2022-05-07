<?php
 session_start();
if (!isset($_SESSION['S_no'])) {
	header('location:login.php');
}
else {
    $full_name = $_SESSION['full_name'];
    $S_no = $_SESSION['S_no'];
    $Mobile =$_SESSION['Mobile'];
    require 'config/config.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RESCUE FOOD</title>

        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/homepage.css">
        <script src="./js/angular.min.js"></script>
        <!-- <script src="./js/app.js"></script> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                crossorigin="anonymous">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,700;0,900;1,900&display=swap"
                rel="stylesheet">
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="alerts-boxes/js/sweetalert.min.js"></script>
        <script>
        var login = angular.module('login', []);

        login.controller('controller', ($scope) => {
                $scope.arraypost = [];
                $scope.arraypost_d = [];
                // <?php
                //         $full_name = $_SESSION['full_name'];
                //         $S_no = $_SESSION['S_no'];
                //         $Mobile =$_SESSION['Mobile'];
                // ?>
                // $scope.food = 'none';
                $scope.name = 'Chintan patel';
                $scope.your_number = '9723280340';

                $scope.list = function() {
                        $scope.show = 'none';
                }
                $scope.homepage = () => {
                        $scope.show = 'block';
                }

                $scope.btn1 = () => {
                        $scope.title = 'food Donation Form';
                        $scope.food = 'form_Donete_food';
                }

                $scope.btn2 = () => {
                        $scope.title = 'Request to get food';
                        $scope.food = 'form_Request_food';
                }

                $scope.Request_food_post_submit = function() {
                        var obj = {
                                Quantity: $scope.Quantity_val,
                                full_adds: $scope.full_adds,
                                notes: $scope.notes,
                                loc: $scope.loc
                        };

                        $scope.arraypost.push(obj);
                        console.log($scope.arraypost);
                }

                $scope.Donete_food_post_submit = function() {
                        var objs = {
                                Quantity_val_d: $scope.Quantity_val_d,
                                full_adds_d: $scope.full_adds_d,
                                radio: $scope.radio,
                                loc: $scope.loc
                        };

                        $scope.arraypost_d.push(objs);
                        console.log($scope.arraypost_d);
                }
        });


        function del() {

                swal({
                                title: "Are you sure?",
                                text: "You want to logout!",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                        })
                        .then((willDelete) => {
                                if (willDelete) {
                                        document.location.href = href = "logout.php";
                                } else {
                                        swal("welcome back!");
                                }
                        });
        }
        </script>
</head>

<body ng-app="login" ng-controller="controller">
        <div class="card-header sticky-top" style="background-color: rgb(255 255 255)">
                <div class="d-flex flex-column flex-md-row ">
                        <!-- align-items-center -->
                        <nav class=" d-inline-flex mt-2 mt-md-0 ">
                                <svg xmlns=" http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor"
                                        class="bi bi-justify" viewBox="0 0 16 16" class="navbar-toggler" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                                        aria-controls="offcanvasNavbar">
                                        <path fill-rule="evenodd"
                                                d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <b style="margin-left: 20px;" ng-click="homepage()">RESCUE FOOD</b>
                        </nav>
                        <nav class="navbar">
                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                                        aria-labelledby="offcanvasNavbarLabel">
                                        <div class="offcanvas-header">
                                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                                        RESCUE FOOD
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                                <form class="d-flex">
                                                        <input class="form-control me-2" type="search"
                                                                placeholder="Search" aria-label="Search">
                                                        <button class="btn btn-outline-success"
                                                                type="submit">Search</button>
                                                </form>
                                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                                        <li class="nav-item">
                                                                <a class="nav-link active" aria-current="page"
                                                                        ng-click="btn1()" data-bs-toggle="modal"
                                                                        data-bs-target="#staticBackdrop" href="#">Donete
                                                                        food</a>
                                                        </li>
                                                        <li class="nav-item">
                                                                <a class="nav-link" href="#" ng-click="btn2()"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#staticBackdrop2">Request
                                                                        food</a>
                                                        </li>
                                                        <li class="nav-item">
                                                                <a class="nav-link" data-bs-dismiss="offcanvas"
                                                                        ng-click="list()" href="#">Donete/Request food
                                                                        list</a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                                <a class="nav-link dropdown-toggle" href="#"
                                                                        id="offcanvasNavbarDropdown" role="button"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Dropdown
                                                                </a>
                                                                <ul class="dropdown-menu"
                                                                        aria-labelledby="offcanvasNavbarDropdown">
                                                                        <li><a class="dropdown-item" href="#">Farmer</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Another
                                                                                        action</a>
                                                                        </li>
                                                                        <li>
                                                                                <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">NGO</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item">
                                                                <a class="nav-link active" aria-current="page" href="#"
                                                                        onclick="del()">Logout</a>
                                                        </li>
                                                </ul>

                                        </div>
                                </div>

                        </nav>
                </div>
        </div>
        <div class="show" style="display: {{show}};">
                <div class="container homepagebox">
                        <div class="card">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="0" class="active" aria-current="true"
                                                        aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                        <img src="./img/1.jpg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                        <img src="./img/2.jpg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                        <img src="./img/1.jpg" cl ass="d-block w-100" alt="...">
                                                </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                        </button>
                                </div>

                        </div>
                </div>
                <div class="textbox">
                        <main>
                                <header>
                                        RESCUE FOOD
                                </header>
                                <p>
                                        A citizen-led initative to ensure nobody goes hungry.
                                </p>
                                Use this webside to:
                                <ul>
                                        <li>Request for food wherever you are </li>
                                        <li>Donate food in your locality</li>
                                </ul>
                        </main>
                </div>
                <article>
                        <div class="row" ng-click="btn1()" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <div class="col">
                                        <div class="imgbox">
                                                <img src="./img/icon/1.jpg" alt="" srcset="">
                                        </div>
                                        <samp class="text">Donete food</samp>
                                </div>
                        </div>
                        <div class="row" ng-click="btn2()" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                <div class="col">
                                        <div class="imgbox">
                                                <img src="./img/icon/2.jpg" alt="" srcset="">
                                        </div>
                                        <samp class="text">Request food</samp>
                                </div>
                        </div>

                        <div class="recodes">
                                <!-- Modal1 -->
                                <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                                <div class="modal-content">
                                                        <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                                        {{title}}</h5>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                                <div class="card-body"
                                                                        ng-repeat="val in addedglobalArray">

                                                                </div>
                                                                <div class="form_Donete_food">
                                                                        <header>kindly provide necessary information
                                                                        </header>
                                                                        <div><?php echo $_SESSION['full_name'];?>
                                                                        </div>
                                                                        <div><?php echo $_SESSION['Mobile'];?></div>
                                                                        <label for="offcanvasNavbarDropdown"
                                                                                class="form-label">Quantity (Enough to
                                                                                feed
                                                                                mininum)</label>
                                                                        <select class="form-select form-select-sm"
                                                                                aria-label=".form-select-sm example">
                                                                                <!-- ng-model="Quantity_val_d" -->
                                                                                <option selected value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="10">10</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100+more</option>
                                                                        </select><br>
                                                                        <div class="input-group">
                                                                                <span class="input-group-text">Full
                                                                                        address</span>
                                                                                <textarea class="form-control"
                                                                                        aria-label="With textarea"
                                                                                        placeholder="Full address"
                                                                                        ng-model="full_adds_d"></textarea>
                                                                        </div><br>
                                                                        <div class="form-radio" ng-model="radio">
                                                                                <input type="radio" name="radio" id=""
                                                                                        checked>
                                                                                <span>i well drop the food myself</span>
                                                                                <input type="radio" name="radio" id="">
                                                                                <span>Schedule a pickup</span>
                                                                        </div>
                                                                        <p class="demo" ng-model="loc" id="demo"></p>
                                                                        <p>Note:Once you submit the form, avoluteer in
                                                                                your
                                                                                locality will reach out to you for more
                                                                                information.</p>
                                                                        <div class="dropdown-divider"></div>
                                                                        <button type="button" class="btn btn-primary"
                                                                                onclick="getLocation()">Customize
                                                                                location
                                                                        </button>
                                                                        <button type="submit" class="btn btn-primary"
                                                                                ng-click="Donete_food_post_submit()">Submit
                                                                        </button>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <!-- modal2 -->
                                <div class="modal fade" id="staticBackdrop2" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                                <div class="modal-content">
                                                        <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                                        {{title}}</h5>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                                <div class="card-body"
                                                                        ng-repeat="val in addedglobalArray">

                                                                </div>
                                                                <div class="form_Request_food">
                                                                        <header>kindly provide necessary information to
                                                                                get food
                                                                                to your place.</header>
                                                                        <div> your name:{{name}}</div>
                                                                        <div>your no:{{your_number}}</div>
                                                                        <label for="offcanvasNavbarDropdown"
                                                                                class="form-label">Quantity (Enough to
                                                                                feed
                                                                                mininum)</label>
                                                                        <select class="form-select form-select-sm"
                                                                                aria-label=".form-select-sm example">
                                                                                <!-- ng-model="Quantity_val" -->
                                                                                <option selected value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="10">10</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100+more</option>
                                                                        </select><br>
                                                                        <div class="input-group">
                                                                                <span class="input-group-text">Full
                                                                                        address</span>
                                                                                <textarea class="form-control"
                                                                                        aria-label="With textarea"
                                                                                        placeholder="Full address"
                                                                                        ng-model="full_adds"></textarea>
                                                                        </div><br>

                                                                        <div class="input-group mb-3">
                                                                                <span class="input-group-text"
                                                                                        id="basic-addon1">notes</span>
                                                                                <input type="text" class="form-control"
                                                                                        placeholder="notes: what food do you need?"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1"
                                                                                        ng-model="notes">
                                                                        </div>
                                                                        <p class="demo" ng-model="loc" id="demo1"></p>
                                                                        <p>Note:Once you submit the form, avoluteer in
                                                                                your
                                                                                locality will reach out to you for more
                                                                                information.</p>
                                                                        <div class="dropdown-divider"></div>
                                                                        <button type="button" class="btn btn-primary"
                                                                                onclick="getLocation()">Customize
                                                                                location
                                                                        </button>
                                                                        <button type="submit" class="btn btn-primary"
                                                                                ng-click="Request_food_post_submit()">Submit
                                                                        </button>


                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>

                </article>
        </div>
        <hr>
        <div class="show_post" ng-repeat="val in arraypost">
                Quantity: {{val.Quantity}}
                full_adds: {{val.full_adds}}
                notes: {{val.notes}}
                loc: {{val.loc}}
        </div>
        <hr>
        <div class="show_post" ng-repeat="val in arraypost_d">
                Quantity_val_d: {{val.Quantity_val_d}}
                full_adds_d: {{val.full_adds_d}}
                radio: {{val.}}
                loc: {{val.loc}}
        </div>
        <hr>
        <footer>
                @2022 RESCUE FOOD
        </footer>

        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script>
        //var x = document.getElementById("demo");
        //var x = document.getElementsByClassName("demo");
        var x = document.getElementById("demo");
        var y = document.getElementById("demo1");

        function getLocation() {
                console.log('getlocation')
                if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showPosition);
                        console.log('done')
                } else {
                        x.innerHTML = "Geolocation is not supported by this browser.";
                        y.innerHTML = "Geolocation is not supported by this browser.";
                        console.log('not found')
                }
        }

        function showPosition(position) {
                console.log("working");
                x.innerHTML = "Latitude: " + position.coords.latitude +
                        "<br>Longitude: " + position.coords.longitude;
                y.innerHTML = "Latitude: " + position.coords.latitude +
                        "<br>Longitude: " + position.coords.longitude;

        }
        </script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>

</body>

</html>