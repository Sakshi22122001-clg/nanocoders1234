<?php session_start();
    if(isset($_SESSION["activeuser"])==false)
    {
        header("location:index.php");
    }?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <style>
        .checked {
            color: orange;
        }

        #model {
            background-color: snow;
        }

        #btn {
            background-color: #ce0058;
            border-radius: 10px 10px 10px 10px;
        }

        #btn:hover {
            background-color: powderblue;
            box-shadow: 6px 6px 6px 6px black;

        }

        #btnrate {
            background-color: #ce0058;
            border-radius: 10px 10px 10px 10px;
        }

        #btnrate:hover {
            background-color: powderblue;
            box-shadow: 6px 6px 6px 6px black;

        }

        #postrate {
            background-color: #ce0058;
            border-radius: 10px 10px 10px 10px;
        }

        #postrate:hover {
            background-color: powderblue;
            box-shadow: 6px 6px 6px 6px black;

        }

        #btnreq {
            background-color: #ce0058;
            border-radius: 10px 10px 10px 10px;
        }

        #btnreq:hover {
            background-color: powderblue;
            box-shadow: 6px 6px 6px 6px black;

        }

        #btndel {
            background-color: #ce0058;
            border-radius: 10px 10px 10px 10px;
        }

        #btndel:hover {
            background-color: powderblue;
            box-shadow: 6px 6px 6px 6px black;

        }

        body {
            background-color: azure;
        }

        #post {
            background-color: deepskyblue;
        }

        #nav {
            background-color: deepskyblue;
        }

        #a {
            text-decoration: none;
            cursor: pointer;
        }

        #dashboard {
            background-color: #ce0058;
        }

        #carda {
            box-shadow: 5px 5px 5px 5px grey;
            border-radius: 40px 40px 40px 40px;
            background: #41273B;
            background-image: url(ppp/e2.jpg);
            background-blend-mode: overlay;
color:white;
        }

        #post {
            background-color: #ce0058;
        }

        #carda:hover {
            box-shadow: 6px 6px 6px 6px black;
            background-color:cadetblue;
            transform: rotate(3deg);
            color: black;
            background-blend-mode: overlay;
        }

        body {
            background-image: url(pics/gif1.gif);
        }

        #see {
            background-color: snow;
        }

        th {
            background-color: lightgoldenrodyellow;
        }
        #cars{
            box-shadow: 20px 20px 20px 20px grey;
        }
    </style>
<style>
        #rrrate {

            background-color: #ce0058;
            border-radius: 10px 10px 10px 10px;
        }

        #rrrate:hover {
            background-color: powderblue;
            box-shadow: 6px 6px 6px 6px black;

        }

        .hide {
            display: none;
        }

        label {
            font-size: 2rem;
        }

        .rating {
            direction: rtl;
        }

        .rating>label:hover::before,
        .rating>label:hover~label:before,
        .rating>input:checked~label:before {
            color: gold;
            content: "\2605";
            position: absolute;
        }

        .rating>label:hover::before,

    </style>
   <style>
        #btnlogout {
            background-color: lightgoldenrodyellow;
            border-radius: 5px 10px 5px 10px black;
        }

        #btnlogout:hover {

            background-color: powderblue;
            color: #ce0058;
            border-radius: 5px 10px 5px 10px black;
            ;
            box-shadow: 5px 5px 5px black;
            text-shadow: 3px 3px 3px grey;
        }

    </style>
</head>

<body style="font-family: cursive;" ng-app="ourmodule" ng-controller="ourcontroller">
   
   
   <div class="row" id="dashboard">
        <div class="col-md-9 ml-5 mt-2 h1">
            <center><b>
                    <font face="Showcard Gothic" size="30" color="snow">NOC-NGO'S DASHBOARD</font>
                </b></center>

        </div>
        <div class="col-md-2">
            <div class="btn  btn-lg mt-3 ml-5" data-toggle="modal" id="btnlogout"><i class="fa fa-sign-out fa-1x"></i><a href="logout.php" style="color:black"> Logout</a> </div>
        </div>
    </div>
   
   
   
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 card ml-5" id="carda">
                <a href="ngo-profile.php" style="text-decoration: none;color: black">
                    <div class="card-body">
                        <h5 class="card-title">
                            <hr color="white">
                            <font color="white">
                                <center><b><h2>PROFILE</h2></b></center>
                            </font>
                        </h5>
                        <hr color="white">
                        <p class="card-text mt-5"><center><h3>
                            <font color="white"><b>All the ngo's can fill and update their profile over here for the official use.</b><br><br><br><br></font></h3></center>
                        </p>
                    </div>
                </a>
            </div>
            
            <div class="col-md-4 ml-5 card" id="carda">
                <a href="donations.php" style="text-decoration: none;color: black">
                    <div class="card-body">
                        <h5 class="card-title">
                            <hr color="white">
                            <font color="white">
                                <center><b><h2>DONATIONS</h2></b></center>
                            </font>
                        </h5>
                        <hr color="white">
                        <p class="card-text mt-5"><center><h3>
                            <font color="white"><b>See the donation's list</b><br><br><br><br></font></h3></center>
                        </p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</body>

</html>
