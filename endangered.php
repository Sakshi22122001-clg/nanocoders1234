<!DOCTYPE html>
<html lang="en">

<head>
    <title>Template</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="slide.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">


    <style>
        .artificialbody {
            width: 100%;
            margin-top: 5px;
        }
        
        .main {
            width: 100%;
            height: 900px;
            background-color: papayawhip;
        }
        
        .row1 {
            width: 100%;
            height: 50px;
        }
        
        .row1 h2 {
            color: black;
            text-align: center;
            margin-bottom: 10px;
        }
        
        .row2 {
            width: 1005;
            height: 70px;
        }
        
        .row2 p {
            text-align: center;
            margin-left: 15%;
            color: gray;
            margin-right: 15%;
            margin-top: 10px 7;
            margin-bottom: 20px;
        }
        
        .row3 {
            width: 100%;
            height: 330px;
        }
        
        .r3col1 {
            width: 25%;
            margin-left: 7.5%;
            margin-top: 15px;
            background-color: white;
            height: 300px;
            float: left;
        }
        
        .r3col2 {
            width: 25%;
            margin-left: 5%;
            margin-top: 15px;
            background-color: white;
            height: 300px;
            float: left;
        }
        
        .r3col3 {
            width: 25%;
            margin-left: 5%;
            margin-top: 15px;
            background-color: white;
            height: 300px;
            float: left;
        }
        
        .row3 .vl {
            border-left: 6px solid gray;
            height: 200px;
            margin-left: 5%;
            margin-top: 20px;
        }
        
        .row3 .content {
            float: left;
            margin-top: 25px;
            color: black;
            margin-left: 15px;
            margin-right: 10px;
        }
        
        .row3 .content-image img {
            border-radius: 50%;
            margin-top: 10px;
            margin-left: 5%;
            float: left;
            border: 1px solid black;
        }
        
        .row3 .content-name {
            color: red;
            float: left;
            margin-left: 5%;
            margin-top: 20px;
        }
        
        .row3 .content-name:hover {
            color: black;
            cursor: pointer;
            font-weight: bolder;
        }
        
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
    <script>
        function doChange1() {
            document.getElementById("about").style.color = "darkblack";
            document.getElementById("about").style.textDecoration = "underline";
            var j = setTimeout(dur, 3000)

            function dur() {
                document.getElementById('about').style.color = "black";
                document.getElementById('about').style.textDecoration = "none";
            }

        }

        function doChange2() {
            document.getElementById("links").style.color = "darkblack";
            document.getElementById("links").style.textDecoration = "underline";
            var j = setTimeout(dur, 3000)

            function dur() {
                document.getElementById('links').style.color = "black";
                document.getElementById('links').style.textDecoration = "none";
            }

        }

        function doChange3() {
            document.getElementById("info").style.color = "darkblack";
            document.getElementById("info").style.textDecoration = "underline";
            var j = setTimeout(dur, 3000)

            function dur() {
                document.getElementById('info').style.color = "black";
                document.getElementById('info').style.textDecoration = "none";
            }

        }

    </script>
</head>

<body>


    <div class="artificialbody">
        <div class="main">
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color: lightgrey">
                <a class="navbar-brand" href="#"><strong>ENDANGERED SPECIES</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#about" onclick="doChange1();">About <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#links" onclick="doChange2();">Links</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#info" onclick="doChange3();">Info</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="creature" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         More
        </a>
                            <div class="dropdown-menu" aria-labelledby="creature">
                                <a class="dropdown-item" href="panda.html">Panda</a>
                                <a class="dropdown-item" href="polarbear.html">Polar Bear</a>
                                <a class="dropdown-item" href="tiger.html">Tiger</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row1">
                <h2 style="margin-top: 50px;">It's High Time To Stand Up For Wildlife</h2>
            </div>
            <div class="row2">
                <p>Conservation is the practice of protecting wild plants and animal species and their habitat ..the goal of wild life conservation is to ensure that nature will be around for future generation to enjoy and also recognize wildlife and wildernessfor humans and other species alike.

                </p>
            </div>
            <div class="row3" style="margin-bottom: 50px;">
                <div class="r3col1">
                    <div class="vl">
                        <div class="content">
                            Giant Pandas Are Black And White Bears That Are Only Found In <b>China</b>. They live in the mountains of western China in bamboo forest. Pandas are in danger of becoming extinct and are now very rare in the wild.
                        </div>
                    </div>
                    <div class="content-image">
                        <img src="picc/panda.jpg" style="height: 50px; width: 15%">
                        <span>
                            <h6><a class="content-name" href="panda.html">-Panda</a></65>
                        </span>
                    </div>

                </div>
                <div class="r3col2">
                    <div class="vl">
                        <div class="content">
                            Because of ongoing and potential loss of their sea ice habitat resulting from climate change,
                            <b>polar bears</b> were listed as a threatened species in the US under the Endangered Species Act in <b>May 2008</b>.
                        </div>
                    </div>
                    <div class="content-image">
                        <img src="picc/polar bear.jpg" style="height: 50px; width: 15%">

                        <h6><a class="content-name" href="polarbear.html">-Polar bear</a></h6>

                    </div>
                </div>
                <div class="r3col3">
                    <div class="vl">
                        <div class="content">
                            <b>Tiger </b>populations are stable or increasing in India, Nepal, Bhutan, Russia and China. An estimated <b>3,900 tigers </b>remain in the wild, but much more work is needed to protect this species if we are to secure its future in the wild.
                        </div>
                    </div>
                    <div class="content-image">
                        <img src="picc/tiger.jpg" style="height: 50px; width: 15%">
                        <span>
                            <h6><a class="content-name" href="tiger.html">-Tiger</a></h6>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row4">
                <div class="r4col1">
                    <h4 id="about">About Wildlife Conservation</h4>

                    <div class="r4col1-content">
                        <p>
                            Wildlife conservation is the practice of protecting wild species and their habitats in order to prevent species from going extinct. Major threats to wildlife include habitat destruction/degradation/fragmentation, overexploitation, poaching, pollution and climate change. The IUCN estimates that 27,000 species of the ones assessed are at risk for extinction. Expanding to all existing species, a 2019 UN report on biodiversity put this estimate even higher at a million species. It's also being acknowledged that an increasing number of ecosystems on Earth containing endangered species are disappearing. To address these issues, there have been both national and international governmental efforts to preserve Earth's wildlife.
                        </p>
                    </div>
                </div>
                <div class="r4col2">
                    <h5 id="links">Follow These Links</h5>
                    <div class="links">
                        <a href="https://unitedforwildlife.org/?gclid=EAIaIQobChMIhPexnNPW6QIVFNiWCh3oiQhzEAAYASAAEgISlPD_BwE#!/home" target="_blank">
                            United For Wildlife
                        </a>
                        <hr>
                        <a href="https://wildlifesos.org/about-us/history/?gclid=EAIaIQobChMIhPexnNPW6QIVFNiWCh3oiQhzEAAYAyAAEgJTtvD_BwE" target="_blank">
                            Wildlife Conservation Charity
                        </a>
                        <hr>
                        <a href="https://www.worldwildlife.org/" target="_blank">
                            World Wildlife fund
                        </a>
                        <hr>
                        <a href="https://www.globalwildlife.org/" target="_blank">
                            Global Wildlife Conservation
                        </a>
                    </div>
                </div>
                <div class="r4col3">
                    <h5 id="info">For More Info Visit</h5>
                    <div class="icons">
                        <a href="#"><i class="fab fa-facebook-square"></i>&nbsp; <b>Facebook</b></a>
                        <br>
                        <a href="#"><i class="fab fa-twitter-square"></i>&nbsp; <b>Twitter</b></a>
                        <br>
                        <a href="#"><i class="fab fa-instagram"></i>&nbsp; <b>Instagram</b></a>
                        <br>
                        <a href="#"><i class="fab fa-whatsapp-square"></i>&nbsp; <b>Whatsapp</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
