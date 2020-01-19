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
        .btn-style{
            background-image: linear-gradient(#7AB789, #487B54, #487051, #376041, #1F4929);
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
            margin-right: 300px;
            margin-bottom: 0px;
            float: right;
        }       

        .search-field{
            height:20px;
        }

        .search-btn{
            background-color:#33A531;
            color: white;
            height:10px;

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

        #innerbox
{
   width:30px; /* or whatever width you want. */
   max-width:30px; /* or whatever width you want. */
   display: inline-block;
}
 
  </style>
</head>

<body>
    <header>
<!--when you have sensitive data, you gotta use post method, because with get method you can see everything in the url-->
            <div> <!--send the user to a php file, run a script to determine if the user has the right to login-->
                <?php
                    //will show the top menu in every page
                    echo '<div class="panel panel-top" >                     
                


                    <div class="top-menu">
                    <div id="title">
                        Genetic Library                       
                    </div>                   


                    
                    <form action="page_search.php" method="POST" >
                      <div class="input-group input-group-md search-top"> 
                            <input type="text" class="form-control search-field" name="search" placeholder="Search" />
                           <div id="innerbox" class= "input-group-addon search-btn">
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
                    <li><a href="signin.php">Computational Intelligence Forum</a></li>
                    </ul>
                    </div>
                    
                  </div>';
                ?>


            </div>
        
    </header>
</body>
</html>