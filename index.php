<!DOCTYPE html>
<html>

<head>
    <title>Chung An Chiu</title>
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
        <div class="col-md-4 pull-right">
            <img class="img-fluid img-rounded" src="https://scontent.ford1-1.fna.fbcdn.net/v/t1.0-9/62446_546259315414512_1579918889_n.jpg?oh=6d11dedafd8b45f6083319d4dd4b918f&oe=5A8E5F53" alt="profile-picture">
        </div>
        <div>
            <h2><strong>About</strong></h2>
            <hr>
            <p>After joining the workforce for 2 years as a software engineer, I decided to persue a formal master's degree in Computer Science at the University of Chicago, hoping this is leading my life to a rather more challenging journey.</p>
            <p>Born and raised in Taipei, Taiwan, I completed my bachelor at National Taiwan University. As a student in the discipline of Entomology(Insect), who later on launched a career in coding, I always tell people that I am a <em>professional bug-dealer</em>.</p>
        </div>
    </div>

    <div id="portfolio" class="row text-center text-muted">
        <h2><strong>Portfolio</strong></h2>
        <hr>
        <div class="col-sm-6 col-xs-12">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" alt="Image">
            <p>Comming Soon</p>
        </div>
        <div class="col-sm-6 col-xs-12">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" alt="Image">
            <p>Comming Soon</p>
        </div>
        <div class="col-sm-6 col-xs-12">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" alt="Image">
            <p>Comming Soon</p>
        </div>
        <div class="col-sm-6 col-xs-12">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" alt="Image">
            <p>Comming Soon</p>
        </div>
    </div>

    <div id="contact" class="text-center">
        <h2><strong>Contact</strong></h2>
        <hr>
        <form action="/send_mail.php" method="get">
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
        <p> Created by <a href="#">Chung-An Chiu</a></p>
        <div>
            <ul>
                <li>
                    <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/chung-an-chiu-62b030147/" target="_blank">
                        <span class="fa fa-linkedin"></span>
                    </a>
                </li>
                <li>
                    <a class="btn btn-social-icon btn-github" target="_blank">
                        <span class="fa fa-github"></span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>

</body>

</html>
