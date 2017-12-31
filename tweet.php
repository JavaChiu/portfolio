<!DOCTYPE html>
<html>
   <head>
      <title>Chung An Chiu</title>
      <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
      <link rel="stylesheet" type="text/css" href="./css/tweet.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
      <script src="./js/tweet.js"></script>
   </head>
   <body>
      <div id="main" class="container-fluid">
         <h1 class="text-center">Random Quote Machine</h1>
         <div id="card" class="row text-center">
            <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
               <div class="card mb-3">
                  <div class="card-body">
                     <blockquote class="blockquote mb-0">
                        <p id="quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer id="citation" class="blockquote-footer text-right">Someone famous</footer>
                     </blockquote>
                  </div>
               </div>
            </div>
         </div>
         <div class="text-center">
            <button type="button" onclick="changeQuote()" class="btn btn-primary">New Quote</button>
         </div>
      </div>
      <footer id="footer" class="container-fluid text-center">
         <hr>
         <p> Created by <a  href="#">Chung-An Chiu</a></p>
         <div>
            <ul>
               <li><a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/chung-an-chiu-62b030147/" target="_blank">
                  <span class="fa fa-linkedin"></span>
                  </a>
               </li>
               <li><a class="btn btn-social-icon btn-github" href="https://github.com/JavaChiu" target="_blank">
                  <span class="fa fa-github"></span>
                  </a>
               </li>
            </ul>
         </div>
      </footer>
   </body>
