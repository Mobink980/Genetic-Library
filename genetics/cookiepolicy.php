<?php
session_start();
if(isset($_SESSION['userId'])){
   require "topMenuWithImage.php";

}else{
    require "topMenuWithLogin.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<style>
   #leftSideBar  {
            list-style-type: none;
            margin-top: -19px !important;
            padding: 0;
            width: 15%; /*the width from left of the screen*/
            background-color: #DDDDDD;
            position: absolute; /* Full height */
            height: 8600px !important; /* Make it stick, even on scroll */
            overflow:auto; /* Enable scrolling if the sidenav has too much content */
            
        }

        #leftSideBar li a {
            display: block;
            color: #000;
            text-align: center;
            font-size: 1.0em;
            font-weight: bold;
            font-family: 'Microsoft Sans Serif';
            padding: 8px 16px;
            text-decoration: none;
        }


        #leftSideBar li a:hover {
            background-color: #888;
            color: white;
        }

        #leftBarFirst {
            text-align: center;
            font-size: 1.3em;
            font-weight: bold;
            color: white;
            background-image: linear-gradient(#21672A, #21772B);
            padding: 10px 0 10px 0;
            font-family: 'Microsoft Sans Serif';
        }

        #leftSideBarSelected {
            background-color: #9BD29A;
        }
        .main {
            margin-left: 15%; /*the distance from left of the screen*/
            padding: 1px 16px;
            height: 1000px;
        }

        .explain {
            width: 75%;
            margin: 0 auto 0 5px;
            font-family: 'Segoe UI';
        }
       
            .explain p {
                font-size: 1.5em;
            }

            .explain h1 {
                font-size: 2.4em;
                font-weight: bolder;            
            }

            .explain h2 {
                font-size: 2.1em;
                font-weight: bold;
            }

            .explain h3 {
                font-size: 1.9em;
                font-weight: bold;
            }

            .explain h4 {
                font-size: 1.7em;
                font-weight: bold;
            }

            .explain hr {
                height: 7px;
                border: 1px;
                background-color: #337AB7;
                border-radius: 2px;
                margin-top: 1px;
            }

            .explain ul {
                margin-top: 0;
            }

            .explain li {
                font-size: 1.5em;
            }

.right-side-panel{ 
    background-color: #EEEEEE;
    width: 20%;
    height: 8600px !important; /* Make it stick, even on scroll */
    margin-top: -21px !important;
    position: absolute;
    right: 0;
  }

.algorithm{
            background-color: #4C674F;
            color: white;
            border-radius: 5px;
            position: center;
            text-align: left;
            width: 85%;
            padding: 19px 15px;
            font-size: 0.9em;
        }

  .accordion {
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  height: 45px !important;
  border: none;
  text-align: left;
  outline: none;
  font-size: 0.9em;
  transition: 0.4s;
  margin-top: 5px !important;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.passive:after{
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-right: 15px;
}

.active:after {
  content: "\2212"; /**the minus sign */
  color: white;
  font-weight: bold;
  float: right;
  margin-right: 15px;
}

.panel {
  padding: 20px 18px;
  background-color: #efefef;
  max-height: 5000px;
  overflow: hidden;
  transition: max-height 0.3s ease-out;
 
}
.panel-team{
    background-image: linear-gradient(#E9E9E9, #E1E1E1, #E7E7E7, #F3F3F3);   
}
.team-image{
          width: 100px;
          height: 100px;
          float: left;
          margin-right:100px;
      }

.beside-profile-image{
    float: right;
    width: 75%;
    font-size: 0.7em;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet" />
<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="jquery-ui-1.12.1.custom/jquery.js"></script>
<script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<body>

<div id="leftSideBar" style="margin-top: 90px;">

    </div>

        
    <div class="main">
    <div class="right-side-panel"></div> <!--The empty space at the right of the page-->
    
   
        <div class="explain">
            <h1>Cookies Policy</h1>
            <hr>
            <p>
            A cookie policy is a declaration to your users on what cookies are active on your website,
                    what user data they track, for what purpose, and where in the world this data is sent.
                    Also, a cookie policy should contain information on how your users may opt out of the cookies
                    or change their settings in regard to the cookies on your website.
                    Many website owners choose to incorporate the cookie policy as a section of their
                    privacy policy. You can also leave your website cookie policy as a stand-alone section.
                    Regardless, you are legally required to have one available to your users.
                    The privacy policy is a document, usually a page on the website, in which all
                    of the methods and purposes of the data processing activities on the site are
                    outlined, including contact forms, mailing lists etc.
                    Cookies are a potential privacy risk, because they are able to track, store and share user behaviour.
                    Whereas most of the remaining privacy policy may be static, the cookies used on a
                    website are dynamic and might change often. Therefore, an adequate cookie policy should
                    be regularly updated to make sure that the information is accurate.
                    How does the GDPR affect my cookie policy?
            </p>
            <p>
                    The EU law on personal data, the General Data Protection Regulation (GDPR),
                    gives website visitors the right to receive specific, up-to date information
                    on what data is registered about them at all times, for what purpose, and where
                    in the world it is sent (along with the possibility to prevent it from happening).
                    These rules affect your cookie policy as well as your cookie notification,
                    your cookie consent and your documentation of consents.
                    Read more about the GDPR here.
                </p>
                <p>
                    Read more about the ePrivacy Directive (EU cookie law or cookie directive) here.
                    The law means that you need a proper cookie policy on your website,
                    containing specific, accurate, and up to date information on the website's
                    use of cookies and the users' options of accepting and rejecting them.
                    Requirements for my cookie policy
                    Your cookie policy should state:
                    What types of cookies are set,
                    How long they persist on your user’s browser,
                    What data they track,
                    For what purpose (functionality, performance, statistics, marketing, etc.),
                </p>
                <p>
                    Where the data is sent and with whom it is shared,
                    How to reject cookies, and how to subsequently change the status regarding the cookies.
                </p>
                <br><br><br>
                <img src="cookie.jpg" alt="The picture of a cookie!"/>
            <br>
           

        </div>



</body>

</html>

<?php
if(isset($_SESSION['userId'])){
    require "footerPrivilege.php";
 
 }else{
     require "footer.php";
 }
?>