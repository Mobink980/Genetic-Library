<?php
// session_start();
include_once 'includes/dbh.inc.php';
?>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title></title>
<style>
      /* Extra small devices (phones, 600px and down) */
      @media only screen and (max-width: 450px) {
  .panel-top{
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
      }
      .break {
            clear: both;
        }
      .login-btn{
        background-color: #33A230;
        padding: 3px 18px 3px 18px;
        width: 100%;
        margin-right:10px;
        margin-top:20px;
        color: white;
        font-size: 0.53em;
        border:1.7px solid white;
      }
      .login-btn:hover{
        background-color: #10c694;
        color: white;
      }
      #fixed-width{
          margin-top: 120px;
          width:50%;
      }
      #title{
            padding: 15px;
            margin-bottom: 58px;
            font-size: 2.6em;
            font-weight: bold;
            font-family: 'Segoe UI';
            color: white;
        }
        .search-top{
            width: 100%;
            margin-right: 3px;
            margin-top: 0px !important; 
        }
        .search-btn{
            background-color:#33A531;
            color: white;
            margin-bottom: 3px;
        }
        .search-btn:hover{
            background-color:#55C753;
        }
      .btn-width{
          width: 95%;
          height: 2.6em;
          margin: auto;  
      }
      .text-width{
          width: 95%;
          height: 3em;
          margin: auto;  
      }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }
      #topics {
        margin-left:0px;
        margin-bottom:0px;
      }

      #topics a {
          text-decoration: none;
          color: white;
      }

      #topics a:hover {
          color: #10c694;
      }
      #topics ul {
        height: 35px;
        width: 100%;
        padding: 8px 0 0 0;
        font-size: 0.9em;
        font-weight: 750;
        }

      #topics li {
          list-style: none;
          float: left;            
          color: white;
          padding: 0 4px;  
        }

        .profile-image{
          width: 85px ;
          height: 85px;
          float: right;
          margin-right:80px;
      }
      .below-profile-image{
        float: right;
        text-align: center;
        margin-right:100px;
        font-size: 12px;
        font-weight:600;
        margin-top: 5px;
      }
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (min-width: 451px) and (max-width: 600px) {
  .panel-top{
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
      }
      .break {
            clear: both;
        }
      .login-btn{
        background-color: #33A230;
        float: right;
        padding: 3px 18px 3px 18px;
        margin-right:10px;
        margin-top:40px;
        color: white;
        font-size: 0.53em;
        border:1.7px solid white;
      }
      .login-btn:hover{
        background-color: #10c694;
        color: white;
      }
      #fixed-width{
          margin-top: 120px;
          width:50%;
      }
      #title{
            padding: 15px;
            margin-bottom: 58px;
            font-size: 2.6em;
            font-weight: bold;
            font-family: 'Segoe UI';
            color: white;
        }
        .search-top{
            width: 25%;
            margin-right: 3px;
            margin-bottom: 0px;
            float: right;
        }
        .search-btn{
            background-color:#33A531;
            color: white;
            margin-bottom: 3px;
        }
        .search-btn:hover{
            background-color:#55C753;
        }
      .btn-width{
          width: 95%;
          height: 2.6em;
          margin: auto;  
      }
      .text-width{
          width: 95%;
          height: 3em;
          margin: auto;  
      }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }
      #topics {
        margin-left:0px;
        margin-bottom:0px;
      }

      #topics a {
          text-decoration: none;
          color: white;
      }

      #topics a:hover {
          color: #10c694;
      }
      #topics ul {
        height: 35px;
        width: 100%;
        padding: 8px 0 0 0;
        font-size: 0.66em;
        font-weight: 750;
        }

      #topics li {
          list-style: none;
          float: left;            
          color: white;
          padding: 0 2px;  
        }

        .profile-image{
          width: 85px ;
          height: 85px;
          float: right;
          margin-right:30px;
      }
      .below-profile-image{
        float: right;
        text-align: center;
        margin-right:48px;
        font-size: 12px;
        font-weight:600;
        margin-top: 5px;
      }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 601px) and (max-width: 767px){
  .panel-top{
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
      }
      .break {
            clear: both;
        }
      .login-btn{
        background-color: #33A230;
        float: right;
        padding: 3px 18px 3px 18px;
        margin-right:25px;
        margin-top:40px;
        color: white;
        font-size: 0.53em;
        border:1.7px solid white;
      }
      .login-btn:hover{
        background-color: #10c694;
        color: white;
      }
      #fixed-width{
          margin-top: 120px;
          width:50%;
      }
      #title{
            padding: 15px;
            margin-bottom: 58px;
            font-size: 2.6em;
            font-weight: bold;
            font-family: 'Segoe UI';
            color: white;
        }
        .search-top{
            width: 25%;
            margin-right: 15px;
            margin-bottom: 0px;
            float: right;
        }
        .search-btn{
            background-color:#33A531;
            color: white;
            margin-bottom: 3px;
        }
        .search-btn:hover{
            background-color:#55C753;
        }
      .btn-width{
          width: 95%;
          height: 2.6em;
          margin: auto;  
      }
      .text-width{
          width: 95%;
          height: 3em;
          margin: auto;  
      }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }
      #topics {
        margin-left:0px;
        margin-bottom:0px;
      }

      #topics a {
          text-decoration: none;
          color: white;
      }

      #topics a:hover {
          color: #10c694;
      }
      #topics ul {
        height: 35px;
        width: 100%;
        padding: 8px 0 0 0;
        font-size: 0.85em;
        font-weight: 600;
        }

      #topics li {
          list-style: none;
          float: left;            
          color: white;
          padding: 0 4px;  
        }

        .profile-image{
          width: 85px ;
          height: 85px;
          float: right;
          margin-right:50px;
      }
      .below-profile-image{
        float: right;
        text-align: center;
        margin-right:70px;
        font-size: 12px;
        font-weight:600;
        margin-top: 5px;
      }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) and (max-width: 991px){
  .panel-top{
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
      }
      .break {
            clear: both;
        }
      .login-btn{
        background-color: #33A230;
        float: right;
        padding: 3px 18px 3px 18px;
        margin-right:75px;
        margin-top:40px;
        color: white;
        font-size: 0.53em;
        border:1.7px solid white;
      }
      .login-btn:hover{
        background-color: #10c694;
        color: white;
      }
      #fixed-width{
          margin-top: 120px;
          width:50%;
      }
      #title{
            padding: 15px;
            margin-bottom: 58px;
            font-size: 2.6em;
            font-weight: bold;
            font-family: 'Segoe UI';
            color: white;
        }
        .search-top{
            width: 25%;
            margin-right: 45px;
            margin-bottom: 0px;
            float: right;
        }
        .search-btn{
            background-color:#33A531;
            color: white;
            margin-bottom: 3px;
        }
        .search-btn:hover{
            background-color:#55C753;
        }
      .btn-width{
          width: 95%;
          height: 2.6em;
          margin: auto;  
      }
      .text-width{
          width: 95%;
          height: 3em;
          margin: auto;  
      }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }
      #topics {
        margin-left:0px;
        margin-bottom:0px;
      }

      #topics a {
          text-decoration: none;
          color: white;
      }

      #topics a:hover {
          color: #10c694;
      }
      #topics ul {
        height: 35px;
        width: 100%;
        padding: 8px 0 0 0;
        font-size: 0.9em;
        font-weight: 600;
        }

      #topics li {
          list-style: none;
          float: left;            
          color: white;
          padding: 0 10px;  
        }

        .profile-image{
          width: 85px ;
          height: 85px;
          float: right;
          margin-right:80px;
      }
      .below-profile-image{
        float: right;
        text-align: center;
        margin-right:100px;
        font-size: 12px;
        font-weight:600;
        margin-top: 5px;
      }
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) and (max-width: 1199px){
  .panel-top{
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
      }
      .break {
            clear: both;
        }
      .login-btn{
        background-color: #33A230;
        float: right;
        padding: 3px 18px 3px 18px;
        margin-right:125px;
        margin-top:40px;
        color: white;
        font-size: 0.53em;
        border:1.7px solid white;
      }
      .login-btn:hover{
        background-color: #10c694;
        color: white;
      }
      #fixed-width{
          margin-top: 120px;
          width:50%;
      }
      #title{
            padding: 15px;
            margin-bottom: 58px;
            font-size: 2.6em;
            font-weight: bold;
            font-family: 'Segoe UI';
            color: white;
        }
        .search-top{
            width: 25%;
            margin-right: 100px;
            margin-bottom: 0px;
            float: right;
        }
        .search-btn{
            background-color:#33A531;
            color: white;
            margin-bottom: 3px;
        }
        .search-btn:hover{
            background-color:#55C753;
        }
      .btn-width{
          width: 95%;
          height: 2.6em;
          margin: auto;  
      }
      .text-width{
          width: 95%;
          height: 3em;
          margin: auto;  
      }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }
      #topics {
        margin-left:0px;
        margin-bottom:0px;
      }

      #topics a {
          text-decoration: none;
          color: white;
      }

      #topics a:hover {
          color: #10c694;
      }
      #topics ul {
        height: 35px;
        width: 100%;
        padding: 8px 0 0 0;
        font-size: 1.1em;
        }

      #topics li {
          list-style: none;
          float: left;            
          color: white;
          padding: 0 10px;  
        }

        .profile-image{
          width: 85px ;
          height: 85px;
          float: right;
          margin-right:80px;
      }
      .below-profile-image{
        float: right;
        text-align: center;
        margin-right:100px;
        font-size: 12px;
        font-weight:600;
        margin-top: 5px;
      }
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .panel-top{
        background-image: linear-gradient(#35B135, #318F2B, #1B592A);
      }
      .break {
            clear: both;
        }
      .login-btn{
        background-color: #33A230;
        float: right;
        padding: 3px 18px 3px 18px;
        margin-right:150px;
        margin-top:40px;
        color: white;
        font-size: 0.53em;
        border:1.7px solid white;
      }
      .login-btn:hover{
        background-color: #10c694;
        color: white;
      }
      #fixed-width{
          margin-top: 120px;
          width:50%;
      }
      #title{
            padding: 15px;
            margin-bottom: 58px;
            font-size: 2.6em;
            font-weight: bold;
            font-family: 'Segoe UI';
            color: white;
        }
        .search-top{
            width: 25%;
            margin-right: 200px;
            margin-bottom: 0px;
            float: right;
        }
        .search-btn{
            background-color:#33A531;
            color: white;
            margin-bottom: 3px;
        }
        .search-btn:hover{
            background-color:#55C753;
        }
      .btn-width{
          width: 95%;
          height: 2.6em;
          margin: auto;  
      }
      .text-width{
          width: 95%;
          height: 3em;
          margin: auto;  
      }
      .link{
          color: rgba(55, 232, 255, 0.842);
      }
      #topics {
        margin-left:0px;
        margin-bottom:0px;
      }

      #topics a {
          text-decoration: none;
          color: white;
      }

      #topics a:hover {
          color: #10c694;
      }
      #topics ul {
        height: 35px;
        width: 100%;
        padding: 8px 0 0 0;
        font-size: 1.1em;
        }

      #topics li {
          list-style: none;
          float: left;            
          color: white;
          padding: 0 10px;  
        }

        .profile-image{
          width: 85px ;
          height: 85px;
          float: right;
          margin-right:80px;
      }
      .below-profile-image{
        float: right;
        text-align: center;
        margin-right:100px;
        font-size: 12px;
        font-weight:600;
        margin-top: 5px;
      }
}


  </style>
</head>

<body>
    <header>
<!--when you have sensitive data, you gotta use post method, because with get method you can see everything in the url-->
            <div> <!--send the user to a php file, run a script to determine if the user has the right to login-->
                <?php

                    $username = $_SESSION['userUid']; 
                    $id = $_SESSION['userId'];
                    $sqlImg = "SELECT * FROM profileimg WHERE idUsers='$id'";
                    $resultImg = mysqli_query($conn, $sqlImg);
                    $rowImg = mysqli_fetch_assoc($resultImg);
                    //will show the top menu in every page
                    echo '<div class="panel panel-top" >                     
                    <div class="top-menu">
                    <div id="title">
                        Genetic Library'; 
                       
                    if($rowImg['status'] == 0){ //this means we already uploaded an image
                    //  mt_rand() helps us to load the image profile immediately after the user chooses the image. No needs for refreshing.
                      echo  "<a href='uploadImageProfile.php'><img class='img-circle profile-image' src='uploads/profile".$id.".jpg?".mt_rand()."'></a>";
                    }else{
                        echo  "<a href='uploadImageProfile.php'><img class='img-circle profile-image' src='profile-pic.jpg'></a>";
                    }
                      echo '
                        <div class="break"></div>
                        <div class="below-profile-image">
                        <div>'.$username.'</div>
                        <a href="includes/logout.inc.php" class="link">Sign out</a>
                        </div>
                                           
                    </div>                   
                    
                    <form action="page_search.php" method="POST" >
                    <div class="input-group input-group-md search-top"> 
                          <input type="text" class="form-control search-field" name="search" placeholder="Search" />
                         <div  class= "input-group-addon search-btn">
                         <span class="glyphicon glyphicon-search"></span>
                          <button class="btn btn-success " id="btn" type="submit" name="submit-search" ></button>
                      </div> 
                          </div>
                  </form>
                    </div>

                    <!--This line of code, protects the above elements from the effect of float.-->
                    
                    
                    <div id="topics">
                    <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="randomSelection.php">Selection</a></li>
                    <li><a href="onePointCrossover.php">Crossover</a></li>
                    <li><a href="bitFlipMutation.php">Mutation</a></li>
                    <li><a href="forum.php">CI Forum</a></li>
                    <li><a href="search/index.php">Articles</a></li>
                    </ul>
                    </div>
                    
                  </div>';




                ?>


            </div>
        
    </header>
</body>
</html>