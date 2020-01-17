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
            <h1>Welcome to the world of Genetics!</h1>
            <hr>
            <p>This portal has been created to explain the genetic algorithms and other concepts 
                in computational intelligence in a simple and well-formed manner.
            </p>
            <h4>Meet our team:</h4>
            <br>
            <div class="panel-group"> 

            <div class="panel panel-team" >                     
                <div class="top-menu">                              
                    <img src="team1.jpg" alt="A girl with blue shirt" class="img-circle team-image">
                    <div class="beside-profile-image">
                        <h4>Amalia Black</h4>
                        <p>
                        Amalia is highly dedicated full stack web developer at Webs 
                    Optimization Software Solution. Being enthusiastic in nature 
                    he would always work hard to achieve winning solutions for any 
                    robust requirement. He is an end-to-end product developer with a 
                    deep-rooted knowledge in each and every area. Amalia is highly motivated
                     and he would always pursue to keep himself along with the latest trends in the industry.   
                        </p>
                   
                    </div>                                                                         
                </div>            
            </div>

            <div class="panel panel-team" >                     
                <div class="top-menu">                              
                    <img src="team2.jpg" alt="A girl with blue shirt" class="img-circle team-image">                  
                    <div class="beside-profile-image">
                        <h4>John Doe</h4>
                        <p>John Dave is the Co-Founder & CTO at Capsicum Media works,
                             a Web Design & Development Agency based out of Mumbai, 
                             India that specializes in all things Web Design & WordPress 
                             Development. He Worships WordPress and Loves to read anything 
                             and everything about this exceptional CMS.</p>
                    </div>                                                                         
                </div>            
            </div>

            <div class="panel panel-team" >                     
                <div class="top-menu">                              
                    <img src="team3.jpg" alt="A girl with blue shirt" class="img-circle team-image">
                    <div class="beside-profile-image">
                    <h4>Elizabeth Starratt</h4>
                    <p>I started working on the web in primary school. Since then,
                         I have accumulated a lot of experience and always strive 
                         to write simple and efficient code. When I am not coding, 
                         you will find me in nature or sitting comfortably in front of a good movie.</p>
                    </div>                                                                         
                </div>            
            </div>

            <div class="panel panel-team" >                     
                <div class="top-menu">                              
                    <img src="team4.jpg" alt="A girl with blue shirt" class="img-circle team-image">
                    <div class="beside-profile-image">
                    <h4>Tiffany Barham</h4>
                    <p>I am a senior developer at Google-fond, a startup focused 
                        on bringing observability to serverless cloud applications. 
                        I have a cyber-security background, with experience in
                         reverse engineering, networks analysis and breaking things 
                         as a habit. Currently focused on using distributed tracing 
                         and AI technologies to tackle the unique observability challenges
                          in serverless environments. Apart from that, I am a
                           huge rock climbing enthusiast!.</p>
                    </div> 
                    </div>                                                                         
                </div>            
            </div>

            </div>

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