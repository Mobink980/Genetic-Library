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
        <h1>Frequently Asked Questions</h1>
        <hr>
<p style="margin-bottom: 40px;">In here you can see a series of frequently asked questions.</p>
 <div class="panels">
<button class="btn btn-success accordion passive" onclick="determineSign(0)">About Genetic Library</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
       incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
       exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(1)">Admission Requirements</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
       eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
       ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(2)">Application Deadlines</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(3)">Admission Process</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(4)">Application</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(5)">Academic Records</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(6)">Information Science and Technology</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(7)">Information About the Tests Required for Admission</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(8)">Data Science</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(9)">Financial Aid</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(10)">Decisions</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(11)">Before Being Admitted</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="btn btn-success accordion passive" onclick="determineSign(12)">After Being Admitted</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna
       aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>



</div>
        </div>

  <script>
        $(".panels").accordion({ //Creating beautiful accordian
            heightStyle: "content",
            animate: 350,
            active: 0,
            collapsible: true,
            header: 'button', active: false
        });


/**The following function will make the plus and minus 
buttons for the accordions */
function determineSign(index) {
var acc = document.getElementsByClassName("accordion");
var i;

//checking for the the specific button pushed
if(acc[index].classList.contains('active')){ //if it is active, then make it passive
  acc[index].classList.remove('active');
  acc[index].classList.add("passive");

}else{ //if it is passive, then make it active
  acc[index].classList.remove('passive');
  acc[index].classList.add("active");
}

for (i = 0; i < acc.length; i++) {
  if(i == index){ //continue the button pushed
    continue;
  }
  //checking for buttons except the one pushed 
    if ( acc[i].classList.contains('active')){ //if any of the other buttons are active
        acc[i].classList.remove('active'); //remove the active class
    }
   acc[i].classList.add("passive"); //make them passive
}

 
}

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