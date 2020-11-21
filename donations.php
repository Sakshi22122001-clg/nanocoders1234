<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(isset($_SESSION["activeuser"])==false)
    {
        header("location:index.php");
    }
    ?>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script>
    var module = angular.module("module", []);
        module.controller("control", function($scope, $http) {
            $scope.catArray;
            $scope.fetchAll = function() {
              
                $http.get("fetch-donations.php").then(okA, notA);

                function okA(response) {
                    $scope.array = response.data;
                }

                function notA(response) {
                    alert(response.data);
                }
            }
            
        });

    </script>

</head>
<body ng-app="module" ng-controller="control" ng-init="fetchAll();">
    <div class="container-xl" style="font-family:cursive">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tr ng-repeat="obj in array">
                <td>
                    {{$index+1}}
                </td>
                <td>
                    {{obj.cardname}}
                </td>
                <td>
                    {{obj.amount}}
                </td>
                <td>
                    {{obj.date}}
                </td>
                </tr>
        </table>
    </div>
</body>
</html>