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
   #leftSideBar ul {
            list-style-type: none;
            margin-top: -91px;
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
    margin-top: -91px;
    position: absolute;
    right: 0;
  }
/* Style the tab */
.code {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#78C381, #5A8E60, #3A7440);
  width: 370px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.code button {
  background-color: inherit;
  color: #E9E3E3;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 6px 16px;
  transition: 0.3s;
  font-size: 16px;
}

/* Change background color of buttons on hover */
.code button:hover {
  background-color: #ddd;
}

/* Create an active/current codelink class */
.code button.active {
  background-color: #84C38B;
}

/* Style the tab content */
.codecontent {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: #000;
  background-image: linear-gradient(#78C381, #3D5A40);
}

/* Style the tab */
.output {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
  color: white;
  width: 69px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.output button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 6px 15px 6px 9px;
  transition: 0.3s;
  font-size: 16px;
}

/* Change background color of buttons on hover */
.output button:hover {
  background-color: #666;
}

/* Create an active/current tablink class */
.output button.active {
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
}

/* Style the tab content */
.outputcontent {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: white;
  background-image: linear-gradient(#3F3D3D, #4E4646, #2E2D2D);
}

#btnPrev{
  padding: 3px 30px;
  margin-left: 1px;
  margin-right: 700px;
  background-color: #32992E;
  color:white;
  border-radius: 2px;
}

#btnNext{
  padding: 3px 30px;
  margin-right: 2px;
  background-color: #32992E;
  color:white;
  border-radius: 2px;
}

.topButtons{
  margin-top: -55px;
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

    #like{
    float: right;
    margin-top: 300px;
    }
</style>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<body>

<div id="leftSideBar" style="margin-top: 90px;">
            <ul>
                <li id="leftBarFirst">Genetic Concepts</li>
                <li><a href="index.php">Evolutionary Computation</a></li>
                <li id="leftSideBarSelected"><a href="#">Genetic Operators</a></li>
                <li><a href="chromosomeRepresentation.php">Chromosome Representation</a></li>
            </ul>
        </div>

        
    <div class="main">
    <div class="right-side-panel"></div> <!--The empty space at the right of the page-->
    
    <div class="topButtons">
        <a id="btnPrev" href="index.php" class="btn"> Previous</a>
        <a id="btnNext" href="chromosomeRepresentation.php" class="btn">Next</a>
    </div>
        <div class="explain">

        <h1>Genetic Operators</h1>
                <hr />
                <p>
                    A genetic operator is an operator used in genetic algorithms to guide the algorithm
                    toward a solution; mutation, crossover, and selection which should work together for the algorithm
                    to be successful.Note that the same individual may be selected as both parents;
                    and same individual may take part in producing more than one offspring.

                </p>

                <?php
    
    include 'includes/dbh.inc.php';
    $page_id = 2; //get the page_id from the url (change)
    $sql = "SELECT * FROM search WHERE page_id= '$page_id'";           
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $number = $row['page_like'];//(change)
    echo '<a href="increaseLike.php?pageid=2" class="btn btn-success" id ="like"><span class="glyphicon glyphicon-thumbs-up"></span> <span class="badge" id = "num">'.$number.'</span></a>'; 
      ?>
                <h2>Main driving operators in genetic algorithm</h2>
                <ul>
                    <li>Selection, to model survival of the fittest.</li>
                    <li>Recombination, to model reproduction.</li>
                    <li>Mutation, to introduce new genetic materials.</li>
                </ul>

                <h2>In selection of parents</h2>
                <p>
                    Selection is the stage, in which individual genomes are chosen from a population for later breeding.
                    Crossover occurs at a crossover probability of p_c. We can use any selection operators.
                </p>
                <h3>Selection process can be described by two steps</h3>
                <ul>
                    <li>Parent selection </li>
                    <li>
                        A replacement strategy that decides if offspring will replace parents,
                        and which parents to replace.
                    </li>
                </ul>

                <h2>Reproduction</h2>
                <p>Process of producing offspring from selected parent by crossover and/or mutation operators.</p>
                <h3>Crossover</h3>
                <p>
                    Producing one or more new individuals, through the combination of genetic materials
                    randomly selected from two or more parents.
                </p>
                <p>We produce offspring, by combining genetic material from parents. </p>
                <h3>Main categories of crossover operators</h3>
                <ul>
                    <li>Asexual: an offspring is generated from one parent.</li>
                    <li>Sexual: two parents produce one or two offspring.</li>
                    <li>Multi-recombination: more than two parents are used to produce one or more offspring.</li>
                </ul>

                <h3>Mutation</h3>
                <p>The process of randomly changing the values of genes in chromosome.</p>
                <ul>
                    <li>The main objective is introducing new genetic material to our population and increasing diversity.</li>
                    <li>Mutation probability (p_m) and step sizes should be small.</li>
                </ul>
                <h4>About Mutation</h4>
                <p>
                    The objective is to introduce new genetic material to population and
                    adding diversity to the genetic characteristics of population.
                    We can ensure that the full range of allele, is accessible for each gene.
                    Mutation probability is p_m. Given that each gene is mutated at probability p_m,
                    the probability that an individual will be mutated is:
                </p>

                <p>Prob (x_i (t) is mutated) = 1 - (1-p_m )^(n_x )</p>

                <p>
                    (1-p_m ) is the probability that one gene is not mutated and
                    (1-p_m )^(n_x ) is the probability that all the genes in an individual
                    are not mutated. n_x is the length of the individual.
                </p>
                <h4>Effects of control parameters</h4>
                <ul>
                    <li>Population size</li>
                    <li>Mutation rate, p_m </li>
                    <li>Crossover rate, p_c</li>
                </ul>
                <p>Large initial mutation rate favors exploration. As mutation rate decreases, exploration is favored.</p>                   
                <p>For floating-point representation, mutation step size influences performance.</p>
                <p>Large mutational step sizes cause large jumps in search space and thus better exploration.</p>
                <p>Step size should be proportional to fitness of individual.</p>
                <p>The worse an individual, the larger the mutational step size.</p>
                <p>Best values of parameters are problem-dependent.</p>
                <h4>Some techniques in mutation</h4>
                <ul>
                    <li>Mutate proportional to the fitness of the individual.</li>
                    <li>Decrease the mutation probability over time.</li>
                </ul>
                <h2>When to stop our algorithm?</h2>
                <ul>
                    <li>When the number of generation, or fitness evaluations has reached to 
                    a specific number (for example: n <= 100)</li>
                    <li>When population has converged: (How to know?)</li>
                    <ul>
                        <li>Terminate when no improvement is observed over a number of consecutive generations.</li>
                        <li>Terminate when there is no change in the population.</li>
                        <li>Terminate when an acceptable solution has been found.</li>
                        <li>Terminate when objective function slope is approximately zero.</li>
                    </ul>
                </ul>

                <h2>Generation Gap</h2>
                <p>The amount of overlap between the current and new population.</p>

                <h2>Replacement Strategies</h2>
                <ul>
                    <li>Replace worst: replace offspring with the worst individual in current population.</li>
                    <li>Replace random: replace offspring with a random individual in current population.</li>
                    <li>Kill tournament: replace an offspring with the worst individual in n_ts, using tournament selection.</li>
                    <li>Replace oldest: use FIFO strategy and replace offspring with the oldest individual in the current population.</li>
                    <li>Conservative selection: combine FIFO replacement with a modified deterministic binary selection.</li>
                    <li>Elitism: The best individual is excluded from selection.</li>
                    <li>Parent-offspring: a selection strategy is used to decide whether an offspring replaces one of its own parents.</li>
                </ul>

        </div>
    </div>

    <script>
document.getElementById("Java").style.display = "block"; //display the first tab in code
document.getElementById("output").style.display = "block"; //display the first tab in output

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("codecontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  
  tablinks = document.getElementsByClassName("codelinks");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
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