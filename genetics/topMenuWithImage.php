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
        color: white;
        font-size: 0.53em;
        border:1.7px solid white;
      }
      .profile-image{
          width: 85px ;
          height: 85px;
          float: right;
          margin-right:100px;
      }
      .below-profile-image{
        float: right;
        text-align: center;
        margin-right:100px;
        font-size: 12px;
        font-weight:600;
        margin-top: 5px;
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
            margin-bottom: 25px;
            font-size: 2.6em;
            font-weight: bold;
            font-family: 'Segoe UI';
            color: white;
        }
        .search-top{
            width: 25%;
            margin-right: 360px;
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
                    
                        <div class="input-group search-top">
                            <input type="text" class="form-control" name="search-place" placeholder="Search" />
                            <div class="input-group-addon btn btn-success search-btn"><span class="glyphicon glyphicon-search"></span></div>
                        </div>
                    </div>

                    <!--This line of code, protects the above elements from the effect of float.-->
                    
                    
                    <div id="topics">
                    <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="randomSelection.php">Selection</a></li>
                    <li><a href="onePointCrossover.php">Crossover</a></li>
                    <li><a href="bitFlipMutation.php">Mutation</a></li>
                    <li><a href="forum.php">Computational Intelligence Forum</a></li>
                    </ul>
                    </div>
                    
                  </div>';




                ?>


            </div>
        
    </header>
</body>
</html>