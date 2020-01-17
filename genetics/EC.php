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
            height: 8650px !important; /* Make it stick, even on scroll */
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
    height: 8650px !important; /* Make it stick, even on scroll */
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
  background-color: #efffff;
  max-height: 5000px;
  overflow: hidden;
  transition: max-height 0.3s ease-out;
 
}

.panel-contribute img{
    width: 650px;
    height: 400px;
    border-radius: 15px;
    margin-left: 10%;

}

.panel-contribute a{
    text-decoration: none !important;
}

.panel-contribute a:hover{
    opacity: 0.65;
}
.panel-contribute p{
    text-align: center;
    font-size: 1.3em;
    font-weight: bold;
    background-color: #222 !important;
    color: white;
    width: 625px;
    margin: auto;
    margin-top: 0px;
    margin-bottom: 5%;
}

.contribute textarea{
    font-size: 1.4em;
    font-weight: 500;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif';
}
.contribute button{
    float: right;
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
        <h1>Contribute to our community</h1>
        <hr>
<p style="margin-bottom: 40px;">You can write your essay in the field of Evolutionary Computation in the following field.</p>
<?php
   //if we got an error in the url then ryn some error messages
   //
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){//getting the url
            echo '<p class="alert alert-danger">Fill in all the fields!</p>';
        }

        else if($_GET['error'] == "sqlerror"){
            echo '<p class="alert alert-danger">Something wrong while submitting your essay!</p>';
        }

        else if($_GET['error'] == "shortessay"){
            echo '<p class="alert alert-warning">Your essay is too short!!</p>';
        }

        else if($_GET['error'] == "titletaken"){
            echo '<p class="alert alert-danger">This title already exists! <br>
            Please change the title of your essay or edit the existing essay.</p>';
        }

    }
    else{
        // if($_GET['submit'] == "success"){
        //     echo '<p class="alert alert-success">Signup was successful!</p>';
        // }
    }

   ?>
<div class="contribute">
    <form action="includes/EC.inc.php" method="POST">
        <input type="text" name="title" placeholder="Title of the article" class="form-control"><br>
        <textarea placeholder="Content of the article"  name="essay" id="essay-area" cols="30" rows="60"  class="form-control"></textarea>
        <br>
        <input type="text" name="author" placeholder="Name of the author" class="form-control"><br>
        <button class="btn btn-success" name="contribute-submit" type="submit">Submit Essay</button>
    </form>
</div>

        </div>

  <script>

</script>

</body>

</html>

<?php
if(isset($_SESSION['userId'])){
    require "footerPrivilege.php";
 
 }else{
     require "footer.php";
 }
?>