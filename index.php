<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
 <meta charset="UTF-8">
    <title>Document</title>
    <!--font awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="jquery/jquery-1.8.2.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        $(document).ready(function() {
            var jassusA = false;
            var jassusB = false;
            var jassusC = false;
            var jassusD = false;
            var jassusE = false;
            /////////////////==AJAX-UID==////////////////
            $("#uid").blur(function() {
                var uid = $("#uid").val();
                var actionUrl = "uid-ajax.php?uid=" + uid;
                $.get(actionUrl, function(response) {
                    $("#spnuid").html(response);
                });
            });
            //////////////////==UID-REGULAR EXPRESSION==/////////////////////
            $("#uid").blur(function() {
                var txt = $("#uid").val();
                if (txt == "") {
                    $("#smalluid").html("Fill the user id").css("color", "red");
                    jassusA = false;
                } else {
                    $("#smalluid").html("Successfull").css("color", "green");
                    jassusA = true;
                }

            });
            //////////////////==PWD-REGULAR-EXPRESSION==///////////////////
            $("#pwd").blur(function() {
                var r = /(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
                var txt = $("#pwd").val();
                if (txt == "") {
                    jassusB = false;

                    $("#spnpwd").html("Kindly enter the password").css("color", "red");
                } else if (r.test(txt) == false) {
                    jassusB = false;

                    $("#spnpwd").html("Min-8 length, Numerics, Spl symbol,Small and capital alphabets").css("color", "orange");
                } else {
                    $("#spnpwd").html("Password saved").css("color", "green");
                    jassusB = true;
                }

            });
            ///////////////////==MOBILE-REGULAR-EXPRESSION/////////////////////
            $("#mobile").blur(function() {
                var r = /^[6-9]{1}[0-9]{9}$/;
                var tmob = $("#mobile").val();
                if (r.test(tmob) == false) {
                    jassusC = false;

                    $("#smallmobile").html("Invalid Mobile number").css("color", "red");
                } else if (tmob == "") {
                    jassusC = false;

                    $("#smallmobile").html("Kindly enter the mobile no.").css("color", "orange");
                } else {
                    jassusC = true;

                    $("#smallmobile").html("Mobile no. saved").css("color", "green");
                }
            });
            ////////////////==EYE==//////////////////////
            $("#eye").click(function() {
                if ($("#pwd").prop("type") == "password") {
                    $("#pwd").prop("type", "text");
                    $("#eye").html('<i class="fa fa-low-vision"></i>');
                } else {
                    $("#pwd").prop("type", "password");
                    $("#eye").html('<i class="fa fa-eye"></i>');
                }

            });
            $("#logineye").click(function() {
                if ($("#loginpwd").prop("type") == "password") {
                    $("#loginpwd").prop("type", "text");
                    $("#logineye").html('<i class="fa fa-eye-slash"></i>');
                } else {
                    $("#loginpwd").prop("type", "password");
                    $("#logineye").html('<i class="fa fa-eye"></i>');
                }

            });
            $("#pwd").keydown(function() {
                var pwd = $(this).val();
                if (pwd.length <= "4") {
                    $("#spnpwd").html("Password Strength: Weak").css("color", "red");
                    jassusD = false;
                } else
                if (pwd.length > "4" && pwd.length <= "7") {
                    jassusD = false;
                    $("#spnpwd").html("Password Strength: Average").css("color", "orange");
                } else {
                    jassusD = true;
                    $("#spnpwd").html("Password Strength: Strong").css("color", "green");
                }

            });
            ////////////////==ALAX-SUBMIT==///////////////
            $("#btnsubmit").click(function() {
                var uid = $("#uid").val();
                var pwd = $("#pwd").val();
                var mobile = $("#mobile").val();
                var category = $("#category").val();
                var url = "signup-process.php?uid=" + uid + "&pwd=" + pwd + "&mobile=" + mobile + "&category=" + category;
                $.get(url, function(response) {
                    $("#signRes").html(response);
                });

            });
            /////////////////==AJAX-LOGIN==////////////
            $("#btnlogin").click(function() {
                var uid = $("#loginuid").val();
                var pwd = $("#loginpwd").val();
                var url = "login-process.php?uid=" + uid + "&pwd=" + pwd;
                $.get(url, function(response) {
                    if (response == "citizen") {
                        location.href = "dash-people.php";
                    } else
                    if (response == "ngo") {
                        location.href = "dash-ngo.php"
                    } else {
                        $("#loginRes").html(response);
                    }
                });
            });
            /////////////==AJAX-FORGOT-PASSWORD==///////////
            $("#btnpwd").click(function() {
                var forgotpwduid = $("#forgotpwduid").val();
                var url = "forgot-pwd-ajax.php?forgotpwduid=" + forgotpwduid;
                var actionurlmsg = "msg-forgot-pwd.php?forgotpwduid=" + forgotpwduid;
                $.get(url, function(msglogin) {
                    if (msglogin == "") {
                        $("#spnforgotpwd").html("ID is not registered...kindly Signin first").css("color", "red");
                    } else
                        $("#spnforgotpwd").html(msglogin);
                });
                /////////////////==MESSAGING==/////////////
                $.get(actionurlmsg, function(msg) {
                    alert(msg);
                });
            });
        });

    </script>
    <style>
        .carousel-caption {
            background-color: snow;
            opacity: 0.75;
        }

        @media(max-width: 768px) {
            h1 {
                font-size: 14px;
            }
        }

        #button:hover {
            background-color: lemonchiffon;
            box-shadow: 5px 5px 5px black;
            text-shadow: 3px 3px 3px grey;
        }

        #btnsubmit {
            background-color: #ce0058;
            color: white;
            border-radius: 5px 10px 5px 10px white;
        }

        #btnsubmit:hover {

            background-color: powderblue;
            color: black;
            border-radius: 5px 10px 5px 10px white;
            ;
            box-shadow: 5px 5px 5px black;
            text-shadow: 3px 3px 3px grey;
        }

        #btnpwd {
            background-color: #ce0058;
            color: white;
            border-radius: 5px 10px 5px 10px white;
        }

        #btnpwd:hover {

            background-color: powderblue;
            color: black;
            border-radius: 5px 10px 5px 10px white;
            ;
            box-shadow: 5px 5px 5px black;
            text-shadow: 3px 3px 3px grey;
        }

        #btnlogin {
            background-color: #ce0058;
            color: white;
            border-radius: 5px 10px 5px 10px white;
        }

        #btnlogin:hover {

            background-color: powderblue;
            color: black;
            border-radius: 5px 10px 5px 10px white;
            ;
            box-shadow: 5px 5px 5px black;
            text-shadow: 3px 3px 3px grey;
        }
        #top{
           position:fixed;
            margin-right: 5rem;
            margin-bottom: 2rem;
            margin-top: 42rem;
            display:block;
            color:#ce0058;
            cursor:pointer;
            box-shadow:5px 5px 5px 5px black;
            background-color:lightgoldenrodyellow;
            border: 0.1rem black solid;
            border-radius:50%;
            
        } #top:hover{
            transform: scale(1.09);
            background-color: powderblue;
                        box-shadow:5px 5px 5px 5px grey;

        }
        nav {
            background-color: royalblue;
        }

        #header {
            background-color: #ce0058;
            color: snow;
        }

        #spnsubmit {
            font-family: cursive;
            font-size: 20px;
            color: darkblue;
        }

        #spnlogin {
            font-family: cursive;
            font-size: 20px;
            color: darkblue;
        }

        #spnforgotpwd {
            font-family: cursive;
            font-size: 20px;
            color: darkblue;
        }

        #frgtpwd {
            font-family: cursive;
            color: deepskyblue;
            font-size: 19px;
        }

        #frgtpwd:hover {
            color: red;
            font-size: 20px;
        }

        a {
            text-decoration: red;
        }

        #box {
            box-shadow: 0px 0px 40px grey;
        }

        #new {
            border-top: dotted;
        }

        #carda {
            box-shadow: 5px 5px 5px 5px grey;
            border-radius: 40px 0px 0px 0px;
            background: #41273B;
            background-image: url(pics/20201119_160928.jpg);
            background-blend-mode: overlay;
            background-position: center;
            color: white;
        }

        #cardb {
            box-shadow: 5px 5px 5px 5px grey;
            border-radius: 0px 0px 0px 40px;
            background: #41273B;
            color: white;
            background-image: url(pics/bright-bulb-close-up-1108572-1130x565.jpg);
            background-blend-mode: overlay;

        }

        #cardd {
            box-shadow: 5px 5px 5px 5px grey;
            border-radius: 0px 0px 40px 0px;
            background: #41273B;
            color: white;
            background-image: url(pics/oil_refinery006_16x9.jpg);

            background-blend-mode: overlay;

        }

        #cardc {
            box-shadow: 5px 5px 5px 5px grey;
            border-radius: 0px 40px 0px 0px;
            background: #41273B;
            color: white;
            background-image: url(pics/c465d192-5e36-4533-90fc-e198da3f061a.jpeg);
            background-blend-mode: overlay;
        }

        #carda:hover {
            box-shadow: 6px 6px 6px 6px black;
            background-color: powderblue;
            transform: rotate(3deg);
            color: black;
            background-blend-mode: overlay;
            transform: scale(1.09);
            transition: ease all 0.5s;


        }

        #cardd:hover {
            box-shadow: 6px 6px 6px 6px black;
            background-color: powderblue;
            transform: rotate(3deg);
            color: black;
            background-blend-mode: overlay;
            transform: scale(1.09);
            transition: ease all 0.5s;

        }

        #cardb:hover {
            box-shadow: 6px 6px 6px 6px black;
            background-color: powderblue;
            transform: rotate(3deg);
            color: black;
            background-blend-mode: overlay;
            transform: scale(1.09);
            transition: ease all 0.5s;
        }

        #cardc:hover {
            box-shadow: 6px 6px 6px 6px black;
            background-color: powderblue;
            transform: rotate(3deg);
            color: black;
            background-blend-mode: overlay;
            transform: scale(1.09);
            transition: ease all 0.5s;
        }
        #bgabtsite{
             background-image: url(pics/b.jpg);
            background-blend-mode: overlay;
        }
        #meet {
            border-radius: 50%;
            background-repeat: no-repeat;
            background-position: center;


        }

        #meet:hover {
            border-radius: 50%;
            transform: scale(1.5);
            transition: ease all 1s;

        }

    </style>
    <style>
        #iii {
            box-shadow: 10px 10px 5px grey;
        }

        #button {

            background-color: #ce0058;
            color: white;
            border-radius: 5px 10px 5px 10px white;
        }

        #button:hover {
            background-color: powderblue;
            box-shadow: 6px 6px 6px 6px black;
            color: black;


        }

        #rot {
            transform: rotate(18deg);
            transition: ease all 3s;
        }

        #rot:hover {
            transform: rotate(360deg);
            transition: ease all 2s;
        }

        #dashboard {
            background-color: snow;
        }

        #ser {
            transform: rotate3d(360deg);
            transition: ease all 2s;

        }

        ul {
            font-size: 125%;
        }

        #bg {
            box-shadow: 40% grey;
        }

        #bg:hover {
            font-size: 125%;
            color: #ce0058;
        }

    </style>
    </head>
    <body>
       
        <nav class="navbar navbar-expand-lg navbar-light" id="dashboard"><b>
            <h1>
               <img src="pics/collage1-removebg-preview.png" class="img-fluid" alt="Responsive image">
                <font face="Algerian" color="black">NGO's </font><font face="Algerian" color="#ce0058">Open to </font><font face="Algerian" color="black">CITIZEN</font>
            </h1>
        </b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="bg"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutsite">
                        <font id="bg" color="black">&nbsp;&nbsp;&nbsp;<i class="fa fa-map" aria-hidden="true"></i>&nbsp;About Site</font>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#overview">
                        <font id="bg" color="black">&nbsp;&nbsp;&nbsp;<i class="fa fa-list" aria-hidden="true"></i>&nbsp;Overview</font>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <font color="black" id="bg"> &nbsp;&nbsp;&nbsp; More</font>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#videos">Videos</a>
                        <a class="dropdown-item" href="#meetd">Info Facts</a>
                        <a class="dropdown-item" href="#loc">Location & Facebook link</a>
                    </div>
                </li>
            </ul>
            <div class="btn btn-light btn-lg ml-lg-3" data-toggle="modal" data-target="#signin" id="button"><i class="fa fa-user-plus"></i> Signup</div>
            <div class="btn btn-light btn-lg ml-lg-3" data-toggle="modal" data-target="#login" id="button"><i class='fas fa-user-check'></i> Login</div>
        </div>
    </nav>
       
       
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pics/cropped-forest.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="pics/b6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="pics/b7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="pics/b4.jpg" class="d-block w-100" alt="...">
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
       
        <div class="media-body" style="background-color:#ffd7dc" id="aboutsite">

        <marquee behavior="alternate" scrolldelay="800" direction="up">
            <font color="black">
                <h3>
                    <div class="row mt-1 ml-5">
                        <center>
                            <i class="fa fa-clock-o" aria-hidden="true"></i><i class="fa fa-clock-o ml-5" aria-hidden="true"></i><i class="fa fa-clock-o ml-5" aria-hidden="true"></i><i class="fa fa-clock-o ml-5" aria-hidden="true"></i>&nbsp;.......................... Don't be Greedy , Its time to be Greeny ............................ &nbsp;<i class="fa fa-clock-o mr-5" aria-hidden="true"></i><i class="fa fa-clock-o mr-5" aria-hidden="true"></i><i class="fa fa-clock-o mr-5" aria-hidden="true"></i><i class="fa fa-clock-o mr-5" aria-hidden="true"></i>
                        </center>
                    </div>
                </h3>
            </font>
        </marquee>

    </div>
    <div class="media" style="background-color:#ce0058" id="bgabtsite">
        <i class='fab fa-slack ml-3 mt-3' id="rot" style='font-size:800%; color:white'></i>
        <div class="media-body">
            <font color="white">
                <h1 class="mt-0 ml-3 mt-3"><b>
                        <font face="Matura MT Script Capitals"> &nbsp;&nbsp;About Site</font>
                    </b></h1>
                <h2>
                    <p class="ml-3" id="overview">The site is basically for the connection between NGOs and the CITIZENS for finding eachother and contribute towards the betterment of the enviornment.</p>
                </h2>
            </font>
        </div>
    </div>
    <div class="media-body" style="background-color:rgb(232,232,232)">

       <center>
            <font color="#41273B">
                <h3>
                    <div class="row mt-1 ml-5 md-1"><center>&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        &nbsp;|| SEARCH NGOs ||
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        || SEARCH PARTICIPANTS ||
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        || DONATE ||
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        || CONNECT ||
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        || HELP ||
                        &nbsp;
                        &nbsp;
                        &nbsp;</center>
                       </div>
                </h3>
            </font>
        </center>

    </div>

    <div class="container mt-4" style="background-color:rgba(230, 221, 208, 0.5);">
        <div class="row mt-2">
            <div class="col-md-3 card" id="carda">
              <style>a {
    color: white;
    text-decoration: none;
}
                  a:hover 
{
     color:black; 
     text-decoration:none; 
     cursor:pointer;  
}
</style>
               <a href="endangered.php" target="_blank">
                <div class="card-body">
                    <h6 class="card-title mt-3"><br><br><br>
                        <hr color="white">
                        
                            <center><b>ENDANGERED SPECIES</b></center>
                        
                    </h6>
                    <hr color="white"><br><br><br>
                    
                </div>
                </a>
               </div>
            <div class="col-md-3 card ml-3" id="cardc"><a href="ngos.php" target="_blank">
                <div class="card-body">
                    <h5 class="card-title"><br><br><br>
                        <hr color="white">
                       
                            <center><b>NGOs</b></center>
                       
                    </h5>
                    <hr color="white"><br><br><br>
                </div>
                </a>
            </div>
            <div class="col-md-5 ml-5">
                <h1 class="text-right mt-2">
                    <font color="#ce0058" face="arial black"><b>OVERVIEW</b></font>
                </h1>
                <hr color="#41273B">
                <h4>
                    <p class="text-right">
                        <font color="#41273B" face="Goudy Old Style"><b>This site is designed to help and save the ENVIRONMENT from further distortion contributing towards the great work taking place. The species at verge of extinction are taken into count and will be rescued from further harm ...</b></font>
                    </p>
                </h4>
            </div>
        </div>
        <div class="row mt-2">

            <div class="cardnews col-md-3 card" id="cardb"><a href="news.php" target="_blank">
                <div class="card-body">
                    <h5 class="card-title"><br><br><br>
                        <hr color="white">
                       
                            <center><b>NEWS</b></center>
                       
                    </h5>
                    <hr color="white"><br><br><br>
                    
                </div></a>
    </div>
            <br>
            <div class="col-md-3 card  ml-3" id="cardd"><a href="effects.php" target="_blank">
                <div class="card-body">
                    <h5 class="card-title"><br><br><br>
                        <hr color="white">
                            <center><b>EFFECTS</b></center>
                    </h5>
                    <hr color="white"><br><br><br>
                </div></a>
            </div>
            <div class="col-md-5 ml-5">
                <h4>
                    <p class="text-right">
                        <font color="#41273B" face="Goudy Old Style"><b>It helps citizen to join certain NGO's which are also working for the same .Also,new emerging NGO's will be able to register themselves on the platform to invite more people to join them . Here , people can donate to the NGO's currently working for the betterment of flora and fauna ...</b></font>
                    </p>
                </h4>
            </div>


        </div>
    </div>

    <div class="media-body mt-3" style="background-color:bisque" id="videos">

        <marquee behavior="alternate" scrolldelay="30">
            <font color="#ce0058" face="Showcard Gothic">
                <h3>
                    <div class="row mt-1">
                        <font color="#41273B">||</font>&nbsp; The Earth is what we all have in common. &nbsp;<font color="#41273B">||</font>
                    </div>
                </h3>
            </font>
        </marquee>

    </div>

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                <h3>
                    <p class="text-right mt-5">
                        <font color="#ce0058" face="Goudy Old Style"><br>
                            <hr color="#ce0058"><b>The <font color="black">NGOs</font> which are doing there best to SAVE our ENVIRONMENT and making a better SOCIETY to breath in.</b></font>
                    </p>
                </h3>
            </div>
            <div class="col-md-8">
                <!-- 21:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9 ml-5" id="iii">
                   <iframe width="560" height="315" src="https://www.youtube.com/embed/a7-SiEo6RcE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <hr color="#41273B">
    <hr color="#41273B">
    <div class="row"><div class="col-md-6">
         <img src="pics/undraw_environment_iaus.png" class="img-fluid" width="100%" height="100%" alt="Responsive image">
    </div>
        <style>
            #tress{
                font-family:fantasy;
                text-align: center;
            }
            #xyz{
                font-family:berlin sans FB;
                text-align: center;
            }
        </style>
    <div class="col-md-6 mt-3"><h1><center>
        <font color="#35172e" id="tress">"Trees bring greenery and greenery brings happiness."</font></center>
        <h4>
        <ul class="mt-5 align-left" id="xyz">
            <font color="black"><b>SAVE TRESS</b></font> <font color="#ce0058"><br>Trees are responsible for the survival. They give us Oxygen which is needed for our respiration. Even, trees can only stop soil erosion. Therefore, we must understand the importance of trees...</font>
<br>
                <font color="black"><b>PLANT TRESS</b></font> <font color="#ce0058"><br> we must plant a tree whenever we are cutting down a single . Campaigns, processions and rallies are organised to promote reforestation and tree planting...</font><br>
                <font color="black"><b>NEED</b></font> <font color="#ce0058"><br>As the biggest plants on the planet, they give us oxygen, store carbon, stabilise the soil and give life to the world's wildlife...</font>
            
            </ul></h4>
    </h1></div>
    </div>
    <div class="container" style="background-color:#35172e">
        <div class="row">
            <div class="col-md-7 mt-3">
                <img src="pics/Screenshot%20(539).png" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-5" id="meetd" bgcolor="#ffe9ec">
                <h2 class="mt-2"><center>
                    <font color="#ce0058" face="arial black"><b>Info Facts</b></font></center>
                </h2><hr color="white" width="80%">
                <marquee direction="up" behavior="scroll" scrollamount="5" onmouseout="start();" onmouseover="stop();">
                    <ol>
                        <font color="white" face="comic sans ms">
                            <b>
                                <li>Every year, an estimated 2.2 billion tons of waste is dumped in our oceans...</li>
                            </b>
                            <b>
                                <li>It took us only 55 years to wipe out 90% of the ocean’s predators causing a disruption of the marine ecosystem...
                                </li>
                            </b>
                            <b>
                                <li>There is more water vapor in the atmosphere than all the combined rivers on the planet....</li>
                            </b>
                            <b>
                                <li>6 to 8 million people die annually from water-borne diseases and disasters.</li>
                            </b>
                            <b>
                                <li> Agriculture uses up 70% of our global freshwater. It goes up to 90% in fast developing countries...</li>
                            </b>
                            <b>
                                <li>We have already destroyed 27% of our coral reefs which is home to 25% of our marine life....</li>
                            </b>
                             <b>
                                <li>We have explored more of Space than our terrestrial oceans...</li>
                            </b>
                             <b>
                                <li>The Ice in Antarctica is as much as the water in the Atlantic Ocean...</li>
                            </b>
                            <br>
                        </font>
                    </ol>
                </marquee>
            </div>

        </div>
    </div>
    <hr color="#41273B" id="meetd">
    <hr color="#41273B">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <h1 class="ml-5">
                    <font color="#ce0058" face="broadway">LOCATION OF KANCHANJURI</font>
                </h1>
                <hr color="#ce0058" width="80%">
                <div class="row">
                    <div class="col-md-1"> <i class="fa fa-map-marker" style="font-size:700%;color:#41273B"></i> </div>
                    <div class="col-md-8 ml-5 mt-4">
                        <p class="ml-5 mt-3"><b>
                                <h4>
                                    <font face="Goudy Old Style">Get to know about the location of Kaziranga National Park where endagered,vulnerable,threatened species are taken care of...</font>
                                </h4>
                            </b> </p>

                    </div>
                </div>
            </div>
            <div class="col-md-6" id="loc">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28544.410467352984!2d93.15594208547637!3d26.58272877931576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3744412d379f65df%3A0x8b2b74b6e7c99458!2sKaziranga%20National%20Park!5e0!3m2!1sen!2sin!4v1605857477241!5m2!1sen!2sin" width="105%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FWtcs-111432227311778%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300%" height="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="col-md-7 ml-5">
                <h1 class="ml-5">
                    <font color="#ce0058" face="broadway">Facebook Page</font>
                </h1>
                <hr class="ml-5" color="#ce0058">
                <font color="#41273B">
                    <h3>
                        <font face="Bahnschrift SemiBold SemiConden">
                            <p class="ml-5 mt-3"><b>Get to more about the site and the events happening from its facebook page .</b> </p>
                            <p class="ml-5">Do like and share the page so that all the people of India can be helped through it and make it a special cause for solving the basic daily problems and making this interaction more easy....<br><br></p>
                        </font>
                    </h3>
                </font>
            </div>
        </div>
    </div>
     <hr color="#41273B">
    <hr color="#41273B">
    <style>        
        .row4 {
            width: 100%;
            height: 300px;
            background-color: lightgray;
        }
        
        .r4col1 {
            width: 45%;
            height: 280px;
            float: left;
            margin-top: 30px;
            margin-left: 5%;
        }
        
        .r4col2 {
            width: 20%;
            height: 280px;
            float: left;
            margin-top: 10px;
            margin-left: 5%;
        }
        
        .r4col3 {
            width: 15%;
            height: 280px;
            float: left;
            margin-top: 10px;
            margin-left: 5%;
        }
        
        .r4col1-content {
            margin-top: 20px;
            text-align: left;
        }
        
        .r4col2 .links a {
            margin-top: 15px;
            text-decoration: none;
            color: black;
        }
        
        .r4col2 .links a:hover {
            text-decoration: none;
            color: black;
            cursor: pointer;
            font-weight: bolder;
        }
        
        .r4col2 hr {
            border-bottom: black;
        }
        
        .r4col2 h5 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bolder;
            margin-bottom: 20px;
            margin-top: 30px;
        }
        
        .r4col3 h5 {
            font-weight: bolder;
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        
        .r4col3 .icons a {
            line-height: 40px;
            margin-top: 30px;
            text-decoration: none;
            color: black;
        }
        
        .r4col3 .icons a:hover {
            cursor: pointer;
            font-weight: bolder;
        }

    </style>
    
    <style>
        #footer
        {
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        }
        #footer:hover{
            background: rgba(0, 0, 0, 0.6);
        }
        #aa:hover{
            color:yellow;
        }
    </style>
                <div class="row" id="footer">
                <div class="col-md-5 ml-2 mt-3" id="a">
                    <h3 id="about">About Eviornment Protection</h3>
<hr width=100% style="border:1px white dashed;" >
                    <h5>
                        <p class="mt-5">
                        Environmental protection is the practice of protecting the natural environment. Its objectives are to conserve natural resources and the existing natural environment. Discussion concerning environmental protection often focuses on the role of government, legislation. However, in its broadest sense, environmental protection may be seen to be the responsibility of all the people and not simply that of government. Decisions impacting environment ideally involve range of stakeholders,industry, indigenous groups, environmental group.
                        </p></h5>                </div>
                <div class="col-md-3 mt-3 ml-3" id="a">
                    <h3>Follow These Links</h3><hr width=100% style="border:1px white dashed;" >
                    <div class="links mt-5">
                        <a href="https://www.c2es.org/" id="aa" target="_blank">
                            <h5>Climate and energy solutions</h5>
                        </a>
                        <hr width=100% style="border:1px white dashed;" >
                        <a href="https://www.fws.gov/endangered/" id="aa" target="_blank">
                            <h5>Endagered Species and Help</h5>
                        </a>
                        <hr width=100% style="border:1px white dashed;" >
                        <a href="https://oceanservice.noaa.gov/" id="aa" target="_blank">
                            <h5>Ocean Services</h5>
                        </a>
                        <hr width=100% style="border:1px white dashed;" >
                        <a href="https://www.ncei.noaa.gov/" id="aa" target="_blank">
                            <h5>National Center for Environment Protection</h5>
                        </a><hr width=100% style="border:1px white dashed;" >
                    </div>
                </div>
                <div class="col-md-3 mt-3 ml-5" id="a">
                    <h3 >For More Info Visit</h3><h5><hr width=100% style="border:1px white dashed;" >
                    <div class="icons mt-5 ml-5">
                        <a href="https://www.facebook.com/sakshi03162227" target="_blank" id="aa"><i class="fab fa-facebook-square mt-4"></i>&nbsp; <b>Facebook</b></a>
                        <br>
                        <a href="#" id="aa"><i class="fab fa-twitter-square mt-4"></i>&nbsp; <b>Twitter</b></a>
                        <br>
                        <a href="#" id="aa"><i class="fab fa-instagram mt-4"></i>&nbsp; <b>Instagram</b></a>
                        <br>
                        <a href="#" id="aa"><i class="fab fa-whatsapp-square mt-4"></i>&nbsp; <b>Whatsapp</b></a>
                    </div></h5>
                </div>
    </div>
        
    <div class="media-body" style="background-color:rgb(232,232,232)">

        <marquee behavior="alternate" scrolldelay="50">
            <font color="#41273B" face="Times New Roman">
                <h3>
                    <div class="row mt-2">
                        Thanks for vistiong our site...&copy; copy rights reserved...
                    </div>
                </h3>
            </font>
        </marquee>

    </div>
    <form id="form">
        <div class="modal fade" tabindex="-1" role="dialog" id="signin">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="header">
                        <h5 class="modal-title ml-sm-auto h3">
                            <center>Signup here...</center>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="uid">
                                    <h5>User ID</h5>
                                </label><span id="spnuid"></span>
                                <div class="col-12">
                                    <div class="input-group mb-2">

                                        <input type="text" class="form-control" required id="uid" name="uid" placeholder="Enter your User ID">
                                        <div class="input-group-prepend">
                                            <div class="btn input-group-text"><i class="fa fa-users"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <small id="smalluid" class="form-text"></small></div>
                            </div>
                            <div class="form-group">
                                <label for="pwd">
                                    <h5>Password</h5>
                                </label>
                                <div class="col-12">
                                    <div class="input-group mb-2">
                                        <input type="password" class="form-control" required id="pwd" name="pwd" placeholder="Enter password with minimum 8 characters">
                                        <div class="input-group-prepend">
                                            <div class="btn input-group-text" id="eye"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <small id="spnpwd" class="form-text"></small>
                            </div>
                            <div class="form-group">
                                <label for="mobile">
                                    <h5>Mobile Number</h5>
                                </label>
                                <div class="col-12">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" required id="mobile" name="mobile" placeholder="Enter your mobile no. plz">
                                        <div class="input-group-prepend">
                                            <div class="btn input-group-text"><i class="fa fa-phone"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <small id="smallmobile" class="form-text"></small>
                            </div>
                            <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" id="category" name="category">
                            <option value="none">--Select Category--</option>
                            <option value="ngo">NGO</option>
                            <option value="citizen">Citizen</option>
                        </select>
                    </div>
                        </form>
                    </div>
                    <div class="modal-footer"><i class='fa fa-user-plus fa-2x' style="color:#ce0058"></i>
                       <span id="signRes"></span>
                        <input type="button" class="btn btn-lg" id="btnsubmit" value="Signup">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form id="formlogin">
        <div class="modal fade" tabindex="-1" role="dialog" id="login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="header">
                        <h5 class="modal-title">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="form-group">
                                <label for="loginuid">
                                    <h5>User ID</h5>
                                </label>
                                <div class="col-12">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="loginuid" name="loginuid" placeholder="Enter your User ID plz...">
                                        <div class="input-group-prepend">
                                            <div class="btn input-group-text"><i class="fa fa-users"></i></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="loginpwd">
                                    <h5>Password</h5>
                                </label>
                                <div class="col-12">
                                    <div class="input-group mb-2">
                                        <input type="password" class="form-control" id="loginpwd" name="loginpwd" placeholder="Enter password with minimum 8 characters">
                                        <div class="input-group-prepend">
                                            <div class="btn input-group-text" id="logineye"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="ml-4" data-toggle="modal"><span class="badge-warning ml-5" id="clickpwd"><a data-dismiss="modal" data-toggle="modal" href="#forgotpwd" style="text-decoration-color:red;">
                                <h5 id="frgtpwd">Forgot Password?</h5>
                            </a></span></div>
                    <div style="margin-left:30px"><span id="loginRes"></span></div>

                    <div class="modal-footer">
                        <i class='fas fa-user-check fa-2x' style="color:#ce0058"></i> &nbsp;
                        <input type="button" value="Login" class="btn btn-lg" id="btnlogin">

                    </div>
                </div>
            </div>
        </div>
    </form>
    <form id="formforgotpwd">
        <div class="modal fade" tabindex="-1" role="dialog" id="forgotpwd">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="header">
                        <h5 class="modal-title">Forgot Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form">
                            <div class="form-group">
                                <label for="forgotpwduid">
                                    <h5>User ID</h5>
                                </label>
                                <input type="text" class="form-control" id="forgotpwduid" name="forgotpwduid" placeholder="Enter your User ID plz...">
                            </div>
                        </form>
                    </div>
                    <div style="margin-left:30px"><span id="spnforgotpwd">&nbsp;</span></div>
                    <div class="modal-footer">
                        <i class='fas fa-key fa-2x' style="color:#ce0058"></i>&nbsp;
                        <input type="button" class="btn btn-primary" id="btnpwd" value="Forgot Password">

                    </div>
                </div>
            </div>
        </div>
    </form>
    </body>