<!DOCTYPE html>
<html lang="en">
<?php session_start();
    if(isset($_SESSION["activeuser"])==false)
    {
        header("location:index.php");
    }?>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script>
        var module = angular.module("mymodule", []);
        module.controller("mycontrol", function($scope, $http) {
            $scope.selectArry;
            
            $scope.doFetchAll = function() {
                $http.get("ngos-fetch-all.php").then(okfx, notokfx);

                function okfx(response) {
                    $scope.selectArry = response.data;
                    if (response.data == "") {
                        alert("No Ngos Found");
                    }
                }

                function notokfx(response) {
                    alert(response.data);
                }
            }
        });

    </script>
</head>

<body ng-app="mymodule" ng-controller="mycontrol" ng-init="doFetchAll();">
    <div class="container">
        <div class="row">
            <div class="col-md-3" ng-repeat="obj in selectArry">
                <a href=""style="text-decoration: none;color: black">
                    <div class="card cd" style="background:#f0f0f0">
                        <center class="pt-3"><img src="uploads/{{obj.pic}}" height="100" class="card-img-top img" alt="..."></center>
                        <div class="card-body">
                            <h3 class="card-title" align="center"> {{obj.name}}</h3>
                            <p class="card-text">Email: {{obj.email}}</p>
                            <p class="card-text">Bio: {{obj.bio}}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
