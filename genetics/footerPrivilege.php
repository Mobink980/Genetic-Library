<?php
    // session_start();
    //session_reset();
    // echo 'Welcome back ', $_SESSION['userUid'] , '!';
?>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="responsive-styles/footer.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="header.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title></title>
<style>
  
 /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 450px) {
    .break {
            clear: both;
        }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }

      .footer {
        position: absolute;
        margin-bottom: -8190px;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 18%;
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
        color: white;
        text-align: center;
        margin-top:20%;
        font-size: 1.3em;
        font-weight: 450;
        }

            .footer ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                text-align: center;
                padding: 15px 0 15px 0; /*45px from top and 25px from bottom*/
            }

            .footer li {
                display: inline;
                margin-right: 10px;
                font-size: 0.85em;
                font-weight: 450;
            }

                .footer li a {
                    text-decoration: none;
                    color: white;
                }

            .footer p {
                margin-top: 20px;
                text-align: center;
                color: white;
            }

            .footer a:hover {
                color: #10c694;
            }

            .btn-circle {
                width: 54px;
                height: 54px;
                text-align: center;
                padding: 13px 0;
                font-size: 16px;
                line-height: 1.42;
                border-radius: 27px;
            }

            #go-up{
                background-image: linear-gradient(#296A29, #153F15);
            }
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (min-width: 451px) and (max-width: 600px) {
    .break {
            clear: both;
        }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }

      .footer {
        position: absolute;
        margin-bottom: -8190px;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 18%;
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
        color: white;
        text-align: center;
        margin-top:20%;
        font-size: 1.3em;
        font-weight: 450;
        }

            .footer ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                text-align: center;
                padding: 15px 0 15px 0; /*45px from top and 25px from bottom*/
            }

            .footer li {
                display: inline;
                margin-right: 15px;
            }

                .footer li a {
                    text-decoration: none;
                    color: white;
                }

            .footer p {
                margin-top: 18px;
                text-align: center;
                color: white;
            }

            .footer a:hover {
                color: #10c694;
            }

            .btn-circle {
                width: 54px;
                height: 54px;
                text-align: center;
                padding: 13px 0;
                font-size: 16px;
                line-height: 1.42;
                border-radius: 27px;
            }

            #go-up{
                background-image: linear-gradient(#296A29, #153F15);
            }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 601px) and (max-width: 767px){
    .break {
            clear: both;
        }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }

      .footer {
        position: absolute;
        margin-bottom: -8190px;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 18%;
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
        color: white;
        text-align: center;
        margin-top:20%;
        font-size: 1.3em;
        font-weight: 450;
        }

            .footer ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                text-align: center;
                padding: 15px 0 15px 0; /*45px from top and 25px from bottom*/
            }

            .footer li {
                display: inline;
                margin-right: 30px;
            }

                .footer li a {
                    text-decoration: none;
                    color: white;
                }

            .footer p {
                margin-top: 20px;
                text-align: center;
                color: white;
            }

            .footer a:hover {
                color: #10c694;
            }

            .btn-circle {
                width: 54px;
                height: 54px;
                text-align: center;
                padding: 13px 0;
                font-size: 16px;
                line-height: 1.42;
                border-radius: 27px;
            }

            #go-up{
                background-image: linear-gradient(#296A29, #153F15);
            }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) and (max-width: 991px){
    .break {
            clear: both;
        }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }

      .footer {
        position: absolute;
        margin-bottom: -8190px;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 18%;
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
        color: white;
        text-align: center;
        margin-top:20%;
        font-size: 1.3em;
        font-weight: 450;
        }

            .footer ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                text-align: center;
                padding: 15px 0 15px 0; /*45px from top and 25px from bottom*/
            }

            .footer li {
                display: inline;
                margin-right: 30px;
            }

                .footer li a {
                    text-decoration: none;
                    color: white;
                }

            .footer p {
                margin-top: 20px;
                text-align: center;
                color: white;
            }

            .footer a:hover {
                color: #10c694;
            }

            .btn-circle {
                width: 54px;
                height: 54px;
                text-align: center;
                padding: 13px 0;
                font-size: 16px;
                line-height: 1.42;
                border-radius: 27px;
            }

            #go-up{
                background-image: linear-gradient(#296A29, #153F15);
            }
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) and (max-width: 1199px){
    .break {
            clear: both;
        }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }

      .footer {
        position: absolute;
        margin-bottom: -8190px;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 18%;
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
        color: white;
        text-align: center;
        margin-top:20%;
        font-size: 1.3em;
        font-weight: 450;
        }

            .footer ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                text-align: center;
                padding: 15px 0 15px 0; /*15px from top and 15px from bottom*/
            }

            .footer li {
                display: inline;
                margin-right: 40px;
            }

                .footer li a {
                    text-decoration: none;
                    color: white;
                }

            .footer p {
                margin-top: 20px;
                text-align: center;
                color: white;
            }

            .footer a:hover {
                color: #10c694;
            }

            .btn-circle {
                width: 54px;
                height: 54px;
                text-align: center;
                padding: 13px 0;
                font-size: 16px;
                line-height: 1.42;
                border-radius: 27px;
            }

            #go-up{
                background-image: linear-gradient(#296A29, #153F15);
            }
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    .break {
            clear: both;
        }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }

      .footer {
        position: absolute;
        margin-bottom: -8190px;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 18%;
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
        color: white;
        text-align: center;
        margin-top:20%;
        font-size: 1.3em;
        font-weight: 450;
        }

            .footer ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                text-align: center;
                padding: 15px 0 15px 0; /*45px from top and 25px from bottom*/
            }

            .footer li {
                display: inline;
                margin-right: 120px;
            }

                .footer li a {
                    text-decoration: none;
                    color: white;
                }

            .footer p {
                margin-top: 20px;
                text-align: center;
                color: white;
            }

            .footer a:hover {
                color: #10c694;
            }

            .btn-circle {
                width: 54px;
                height: 54px;
                text-align: center;
                padding: 13px 0;
                font-size: 16px;
                line-height: 1.42;
                border-radius: 27px;
            }

            #go-up{
                background-image: linear-gradient(#296A29, #153F15);
            }
}

  </style>
</head>

<body>
    <header>
<!--when you have sensitive data, you gotta use post method, because with get method you can see everything in the url-->
            <div> <!--send the user to a php file, run a script to determine if the user has the right to login-->
                <?php
                //will show the bottom menu in every page
                    echo '
                    <div class="footer">
                    <ul>
                        <li><a href="aboutus.php">About us</a></li>
                        <li><a href="cookiepolicy.php">Cookies policy</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="contribution.php">Contribution</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <a id="go-up"  style="color:white; float:right; margin-right:35px;" role="button" class="btn btn-circle">top</a> 
                    <p> &copy;Copyright 2019. All rights Reserved.</p>
                </div>
               ';


                ?>


            </div>
        
    </header>
        <!--We code java script in the end of body tag. then we move it to a seperate file like css -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

$('#myBtn').click(function(){

    if(window.location.href == "http:// ...."){ //used to find the current page location 
        location.href = "#abc"; //at the bottom of page
    }
    else{
        location.href = "http:// .... ";//the next page you want to take the user to
    }

});

});

jQuery(document).ready(function() {
  
  var btn = $('#go-up');

  $(window).scroll();

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '1700');
  });

});
    </script>
</body>
</html>