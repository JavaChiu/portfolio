<!DOCTYPE html>
<html>

<head>
    <title>Chung An Chiu</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="./css/weather.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="./js/weather.js"></script>
</head>

<body onload="getWeather()">
    <div id="main" class="container-fluid">
        <h1 class="text-center">Local Weather App</h1>
        <h2 id="city" class="text-center"></h2>
        <div id="content" class="row">
            <div class="col-md-4 col-sm-4 card text-center">
                <div class="card-body">
                    <!--<h4 class="card-title">Special title treatment</h4>-->
                    <p id="description" class="card-text"></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 card text-center">
                <div class="card-body">
                    <p id="degree" class="card-text"></p>
                    <button type="button" onclick="convertDegree()" class="btn btn-outline-secondary btn-sm">Convert</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 card">
                <div class="card-body text-center">
                    <img id="icon" src="" alt="weather icon">
                </div>
            </div>
        </div>
        <div class="text-center">
        </div>

    </div>

    <footer id="footer" class="container-fluid text-center">
        <!--<hr>-->
        <p> Created by <a href="http://www.chunganchiu.com/">Chung-An Chiu</a></p>
        <div>
            <ul>
                <li>
                    <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/chung-an-chiu-62b030147/" target="_blank">
                        <span class="fa fa-linkedin"></span>
                    </a>
                </li>
                <li>
                    <a class="btn btn-social-icon btn-github" href="https://github.com/JavaChiu" target="_blank">
                        <span class="fa fa-github"></span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</body>
