<?php
    require "topMenuWithImage.php";
?>


<!DOCTYPE html>
<html>

<style>
   #leftSideBar ul {
            list-style-type: none;
            margin-top: -91px;
            padding: 0;
            width: 15%; /*the width from left of the screen*/
            background-color: #DDDDDD;
            position: absolute; /* Full height */
            height: 1385px; /* Make it stick, even on scroll */
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
            width: 1020px;
            margin: 0 auto 0 5px;
        }
       
            .explain p {
                font-size: 1.5em;
                font-family: 'Microsoft Sans Serif';
            }

            .explain h1 {
                font-size: 2.4em;
                font-weight: bolder;
                font-family: 'Microsoft Sans Serif';
            }

            .explain h2 {
                font-size: 2.1em;
                font-weight: bold;
                font-family: 'Microsoft Sans Serif';
            }

            .explain h3 {
                font-size: 1.9em;
                font-weight: bold;
                font-family: 'Microsoft Sans Serif';
            }

            .explain h4 {
                font-size: 1.7em;
                font-weight: bold;
                font-family: 'Microsoft Sans Serif';
            }

            .explain hr {
                height: 8px;
                border: 1px;
                box-shadow: inset 0 9px 9px -3px #10c694;
                border-radius: 5px;
            }

            .explain ul {
                margin-top: 0;
            }

            .explain li {
                font-size: 1.5em;
                font-family: 'Microsoft Sans Serif';
            }
            .right-side-panel{ 
                background-color: #EEEEEE;
                width: 20%;
                height: 1385px; /* Make it stick, even on scroll */
                margin-top: -91px;
                position: absolute;
                right: 0;
            }
</style>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

<div id="leftSideBar" style="margin-top: 90px;">
            <ul>
                <li id="leftBarFirst">Genetic Concepts</li>
                <li id="leftSideBarSelected"><a href="">Evolutionary Computation</a></li>
                <li><a href="Genetics\Concepts\typesOfOperators.html">Genetic Operators</a></li>
                <li><a href="Genetics\Concepts\chromosomeRepresentation.html">Chromosome Representation</a></li>
            </ul>
        </div>

        
    <div class="main">
    <div class="right-side-panel"></div> <!--The empty space at the right of the page-->
    
        <div class="explain" >




        </div>
    </div>

</body>

</html>

<?php
    require "footer.php";
?>