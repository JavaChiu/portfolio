<!DOCTYPE html>
<html>

<head>
    <title>Chung An Chiu</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="./js/index.js"></script>
</head>

<body>

    <nav id="top" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#top">ChungAn</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#portfolio">PORTFOLIO</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <!--
                <li>
                    <button class="btn btn-default navbar-btn"><a href="#">CONTACT</a></button>
                </li>
-->
                </ul>
            </div>
        </div>
    </nav>

    <div id="about" class="row text-center">
<?php
  session_start();
  if(isset($_SESSION['message'])){
    if($_SESSION['is_success']){
      echo '<div class="alert alert-success alert-dismissable">';
    }else{
      echo '<div class="alert alert-danger alert-dismissable">';
    }
    echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
    echo $_SESSION['message'];
    echo '</div>';
  }
  unset($_SESSION['message']);
  unset($_SESSION['is_success']);
?>
        <div class="col-md-4 pull-right">
            <img class="img-fluid img-rounded" src="./img/profile-picture.jpg" alt="profile-picture">
        </div>
        <div>
            <h2><strong>About</strong></h2>
            <hr>
            <p>After joining the workforce for 2 years as a software engineer, I decided to pursue a formal master's degree in Computer Science at the University of Chicago, hoping this is leading my life to a rather more challenging journey.</p>
            <p>Born and raised in Taipei, Taiwan, I completed my bachelor at National Taiwan University. As a student in the discipline of Entomology(Insect), who later on launched a career in coding, I always tell people that I am a <em>professional bug-dealer</em>.</p>
        </div>
    </div>

    <div id="portfolio" class="row text-center text-muted">
        <h2><strong>Portfolio</strong></h2>
        <hr>
        <div class="col-sm-6 col-xs-12">
            <a href="https://powerful-atoll-43424.herokuapp.com/weather.php">
                <img src="./img/weather_snapshot.png" class="img-responsive" alt="Local Weather App">
            </a>
            <p>Local Weather App</p>
        </div>
        <div class="col-sm-6 col-xs-12">
            <a href="./tweet.php">
                <img src="./img/tweet_snapshot.png" class="img-responsive" alt="Random Quote Machine">
            </a>
            <p>Random Quote Machine</p>
        </div>
        <div class="col-sm-6 col-xs-12 h-100">
            <a href="https://peaceful-fortress-80870.herokuapp.com/swagger-ui.html#/">
                <img src="./img/swagger-api.png" class="img-responsive" alt="Image">
            </a>
            <p>Java Spring-boot rest api</p>
        </div>
        <div class="col-sm-6 col-xs-12 h-100">
            <img src="./img/genmo.png" class="img-responsive" alt="Image">
            <p>Comming Soon</p>
        </div>
    </div>

    <div id="contact" class="text-center">
        <h2><strong>Contact</strong></h2>
        <hr>
        <form class="row" action="/send_mail.php" method="post">
            <div class="form-group col-sm-6 col-xs-12">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group col-sm-6 col-xs-12">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-sm-6 col-xs-12">
                <label for="first-name">First Name</label>
                <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First Name">
            </div>
            <div class="form-group col-sm-6 col-xs-12">
                <label for="last-name">Last Name</label>
                <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last Name">
            </div>
            <div class="form-group col-sm-12 col-xs-12">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Send</button>
        </form>
    </div>

    <footer class="container-fluid text-center">
        <p> Created by <a href="http://www.chunganchiu.com/">Chung-An Chiu</a></p>
        <div>
            <ul>
                <li>
                    <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/andrew-chung-an-chiu-62b030147/" target="_blank">
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

</html>
