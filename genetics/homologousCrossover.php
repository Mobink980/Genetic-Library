<?php
   require "topMenuWithLogin.php";
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
                <li id="leftBarFirst">Crossover Operators</li>
                <li><a href="onePointCrossover.php">One-point Crossover</a></li>
                <li><a href="multiPointCrossover.php">Multi-point Crossover</a></li>
                <li><a href="uniformCrossover.php">Uniform Crossover</a></li>
                <li><a href="multiParentCrossover.php">Multi-parent Crossover</a></li>
                <li><a href="orderCrossover.php">Order Crossover (ox)</a></li>
                <li><a href="partiallyMappedCrossover.php">Partially Mapped Crossover (PMX)</a></li>
                <li><a href="cycleCrossover.php">Cycle Crossover (CX)</a></li>
                <li><a href="heuristicCrossover.php">Heuristic Crossover (HC)</a></li>
                <li><a href="shuffleCrossover.php">Shuffle Crossover (SX)</a></li>
                <li><a href="reduceSurrogateCrossover.php">Reduce Surrogate  Crossover (RSX)</a></li>
                <li><a href="averageCrossover.php">Average Crossover (AX)</a></li>
                <li><a href="discreteCrossover.php">Discrete Crossover (DC)</a></li>
                <li><a href="flatCrossover.php">Flat Crossover (FC)</a></li>
                <li><a href="multivariateCrossover.php">Multivariate Crossover</a></li>
                <li><a href="countPreservingCrossover.php">Count Preserving Crossover (CPC)</a></li>
                <li><a href="modifiedOrderCrossover.php">Modified Order Crossover (MOC)</a></li>
                <li><a href="randomRespectfulCrossover.php">Random Respectful Crossover (RRC)</a></li>
                <li><a href="maskedCrossover.php">Masked Crossover</a></li>
                <li><a href="oneBitAdaptiveCrossover.php">1-bit Adaptive Crossover (1BX)</a></li>
                <li><a href="modifiedPartiallyMappedCrossover.php">Modified Partially Mapped Crossover (MPMX)</a></li>
                <li><a href="orderBasedCrossover.php">Order Based Crossover (OBX)</a></li>
                <li><a href="positionBasedCrossover.php">Position Based Crossover (POS)</a></li>
                <li><a href="votingRecombinationCrossover.php">Voting Recombination Crossover (VR)</a></li>
                <li><a href="maximalPreservationCrossover.php">Maximal Preservation Crossover (MPX)</a></li>
                <li><a href="positionCrossover.php">Position Crossover (PX)</a></li>
                <li id="leftSideBarSelected"><a href="#">Homologous Crossover (HX)</a></li>
                <li><a href="completeSubtourExchangeCrossover.php">Complete Subtour Exchange Crossover (CSEX)</a></li>
                <li><a href="edgeRecombinationCrossover.php">Edge Recombination Crossover (ER)</a></li>
                <li><a href="alternateEdgesCrossover.php">Alternate Edges Crossover (AEX)</a></li>
                <li><a href="heuristicUniformCrossover.php">Heuristic Uniform Crossover (HUX)</a></li>
                <li><a href="blendCrossover.php">Blend Crossover (BLX)</a></li>
                <li><a href="linearRecombinationCrossover.php">Linear Recombination Crossover</a></li>
                <li><a href="directionalHeuristicCrossover.php">Directional Heuristic Crossover</a></li>
                <li><a href="geometricalCrossover.php">Geometrical Crossover</a></li>
                <li><a href="simulatedBinaryCrossover.php">Simulated Binary Crossover (SBX)</a></li>
                <li><a href="hillclimbingCrossover.php">Hillclimbing Crossover</a></li>
                <li><a href="arithmeticCrossover.php">Arithmetic Crossover</a></li>
            </ul>
    </div>

        
    <div class="main">
    <div class="right-side-panel"></div> <!--The empty space at the right of the page-->
    
    <div class="topButtons">
        <a id="btnPrev" href="positionCrossover.php" class="btn"> Previous</a>
        <a id="btnNext" href="completeSubtourExchangeCrossover.php" class="btn">Next</a>
    </div>
        <div class="explain">

        <h1>Homologous Crossover (HX)</h1>
                <hr />
                <!--explanation needs fixing-->
                <p>
                    In homologous crossover, we divide the parents into several substrings 
                    and only those substrings with enough similarity are allowed to be performed 
                    multipoint crossover. To calculate the similarity, we define a vector named 
                    similarity vector and a variable named threshold. The similarity vector is
                    calculated by performing exclusive or(XOR) on the genes of the parents.
                </p>
                <p>
                    A 1 value in the similarity vector means that the value of the genes in that 
                    place is different and the zero value means that the value of the genes in that 
                    place is the same. if the number of ones in a substring in the similarity vector 
                    is less than the threshold it means that substring has enough similarity 
                    to be allowed for multipoint crossover.
                </p>
                <p>This is an example of how it works.</p>

<img class="image-view" src="Genetics/Genetic pictures/Crossover/homologous_crossover.png" alt="Homologous Crossover (HX)"/> 
<div class="code">
  <button class="codelinks active" onclick="openCity(event, 'Python')">Python</button>
  <button class="codelinks" onclick="openCity(event, 'Java')">Java</button>
  <button class="codelinks" onclick="openCity(event, 'C++')">C++</button>
  <button class="codelinks" onclick="openCity(event, 'C#')">C#</button>
  <button class="codelinks" onclick="openCity(event, 'R')">R</button>
  <button class="codelinks" onclick="openCity(event, 'Ruby')">Ruby</button>
</div>

<div id="Java" class="codecontent">
<div>
import java.util.Scanner; <br>
class ReverseNumberWhile <br>
{ <br>
   public static void main(String args[]) <br>
   { <br>
      int num=0; <br>
      int reversenum =0; <br>
      System.out.println("Input your number and press enter: "); <br>
      //This statement will capture the user input <br>
      Scanner in = new Scanner(System.in); <br>
      //Captured input would be stored in number num <br>
      num = in.nextInt(); <br>
      //While Loop: Logic to find out the reverse number <br>
      while( num != 0 ) <br>
      { <br>
          reversenum = reversenum * 10; <br>
          reversenum = reversenum + num%10; <br>
          num = num/10; <br>
      } <br>
      <br>
      System.out.println("Reverse of input number is: "+reversenum); <br>
   } <br>
} <br>
  </div> 
</div>

<div id="Python" class="codecontent">
 
  <div>
import numpy as np     <br>
import random   <br>
from copy import deepcopy   <br>
<br>
class Chromosome():   <br>
    """   <br>
    Description of class `Chromosome`:   <br>
    This class represents a simple chromosome. In the method describe, a simple description   <br>
    of the chromosome is provided, when it is called.    <br>
    """   <br>
    def __init__(self, genes, id_=None, fitness=-1):   <br>
        self.id_ = id_   <br>
        self.genes = genes   <br>
        self.fitness = fitness          <br>
        <br>
    def describe(self):    <br>
        """   <br>
        Prints the ID, fitness, and genes   <br>
        """   <br>
        print(f"ID=#{self.id_}, Fitness={self.fitness}, \nGenes=\n{self.genes}")   <br>
        <br>
    def get_chrom_length(self):    <br>
        """   <br>
        Returns the length of `self.genes`   <br>
        """   <br>
        return len(self.genes)   <br>
        <br>
def sorted_random_numbers(point_nums, interval):   <br>
    """   <br>
    Returns several random integers in an interval which is sorted   <br>
    point_nums: number of points to be selected   <br>
    interval: the interval which the numbers are selected   <br>
    """       <br>
    points = []   <br>
    for _ in range(point_nums):   <br>
        num = np.random.randint(1, abs(interval))   <br>
        while num in points:   <br>
            num = np.random.randint(1, abs(interval))   <br>
        points.append(num)   <br>
    return sorted(points)   <br>
    <br>   <br>

"Multi-point crossover"   <br>
def multi_point_crossover(parent_one, parent_two, pc):   <br>
    """   <br>
    This function takes two parents, and performs Multi-point crossover on them by selecting    <br>
    several points randomly, as crossover points.    <br>
    parent_one: First parent   <br>
    parent_two: Second parent   <br>
    pc: The probability of crossover    <br>
    """     <br>
    # selected_pop = tournament_selection(2,pop_size,pop)   <br>
    # parent_one = p[0]  # choose 2 individuals from the pop   <br>
    # parent_two = p[1]   <br>
    # parent_one = Chromosome(genes= np.array([0, 0, 0, 0, 0, 0, 0, 0, 0]),id_=0,fitness = 125.2)  # parents   <br>
    # parent_two = Chromosome(genes= np.array([1, 1, 1, 1, 1, 1, 1, 1, 1]),id_=1,fitness = 125.2)   <br>
    <br>
    print("\nParents")   <br>
    print("=================================================")   <br>
    Chromosome.describe(parent_one)   <br>
    Chromosome.describe(parent_two)   <br>
    <br>
    chrom_length = Chromosome.get_chrom_length(parent_one)   <br>
    child_one = Chromosome(genes= np.array([0]*chrom_length),id_=0,fitness = 125.2)  # childs   <br>
    child_two = Chromosome(genes= np.array([0]*chrom_length),id_=1,fitness = 125.2)   <br>
    point_nums = np.random.randint(1, abs(chrom_length)) #a random number for the number of points   <br>
    points = sorted_random_numbers(point_nums,chrom_length)   <br>
    count = 0   <br>
    if np.random.rand() < pc:  # if pc is greater than random number   <br>
        prev_index=0   <br>
        for _ in range(len(points)):   <br>
            if count%2==0:   <br>
                for i in range(prev_index,chrom_length,1):   <br>
                    if i &lt; points[count]:   <br>
                        child_one.genes[i] = parent_one.genes[i]   <br>
                        child_two.genes[i] = parent_two.genes[i]   <br>
                prev_index = points[count]   <br>
                count +=1   <br>
            elif count%2!=0:   <br>
                for i in range(prev_index,chrom_length,1):   <br>
                    if i &lt; points[count]:   <br>
                        child_one.genes[i] = parent_two.genes[i]   <br>
                        child_two.genes[i] = parent_one.genes[i]   <br>
                prev_index = points[count]   <br>
                count +=1             <br>
        # for the last part   <br>
        if count%2==0:   <br>
            for i in range(points[len(points)-1],chrom_length,1):      <br>      
                child_one.genes[i] = parent_one.genes[i]   <br>
                child_two.genes[i] = parent_two.genes[i]   <br>
        elif count%2!=0:   <br>
            for i in range(points[len(points)-1],chrom_length,1):   <br>
                child_one.genes[i] = parent_two.genes[i]   <br>
                child_two.genes[i] = parent_one.genes[i]   <br>
                <br>
    else:  # if pc is less than random number then don't make any change   <br>
        child_one = deepcopy(parent_one)   <br>
        child_two = deepcopy(parent_two)   <br>
    return child_one, child_two   <br>
    <br>
"Homologous crossover"   <br>
def homologous_crossover(parent_one, parent_two, pc):   <br>
    """   <br>
    This function takes two parents, and performs Homologous crossover on them.    <br>
    parent_one: First parent   <br>
    parent_two: Second parent   <br>
    pc: The probability of crossover   <br>
    """     <br>
    # selected_pop = tournament_selection(2,pop_size,pop)   <br>
    # parent_one = selected_pop[0]  # choose 2 individuals from the pop   <br>
    # parent_two = selected_pop[1]   <br>
    <br>
    parent_one = Chromosome(genes= np.array([0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1]),id_=0,fitness = 125.2)  # childs   <br>
    parent_two = Chromosome(genes= np.array([1, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0]),id_=1,fitness = 125.2)   <br>
    <br>
    print("\nParents")   <br>
    print("=================================================")   <br>
    Chromosome.describe(parent_one)   <br>
    Chromosome.describe(parent_two)   <br>
    <br>
    chrom_length = Chromosome.get_chrom_length(parent_one)   <br>
    child_one = Chromosome(genes= np.array([-1]*chrom_length),id_=0,fitness = 125.2)  # childs   <br>
    child_two = Chromosome(genes= np.array([-1]*chrom_length),id_=1,fitness = 125.2)   <br>
    <br>
    child_one.genes = parent_one.genes #copying parents to their children   <br>
    child_two.genes = parent_two.genes   <br>

    <br>   <br>

    if np.random.rand() < pc:  # if pc is greater than random number   <br>
        point1 = np.random.randint(0, int(chrom_length/2) - 1)   <br>
        point2 = np.random.randint(int(chrom_length/2) + 1, chrom_length)   <br>
        sum1 = 0   <br>
        sum2 = 0   <br>
        sum3 = 0   <br>
        sums = [] #the differences in each part of parents   <br>
        yardstick = [] #parts of parents that the diversity is greater than threshold to participate in multi_point_crossover   <br>
        threshold = 2   <br>
        similarity_vector = []   <br>
        for i in range(chrom_length):   <br>
            similarity_vector.append(parent_one.genes[i] ^ parent_two.genes[i])   <br>
        # print(similarity_vector)   <br>
        for i in range(chrom_length):   <br>
            if i < point1:   <br>
                sum1 = sum1 + similarity_vector[i]   <br>
            elif i >= point1 and i < point2:   <br>
                sum2 = sum2 + similarity_vector[i]   <br>
            else:   <br>
                sum3 = sum3 + similarity_vector[i]   <br>
                <br>
        sums.append(sum1)   <br>
        sums.append(sum2)   <br>
        sums.append(sum3)   <br>
        print(sums)   <br>
        for i in range(len(sums)): #adding the parts with enough diversity   <br>
            if sums[i] >= threshold:   <br>
                yardstick.append(True)   <br>
            else:   <br>
                yardstick.append(False)   <br>
                <br>
        print(yardstick)   <br>
        a = []   <br>
        b = []   <br>
        sub_parent_one = Chromosome(genes= np.array([-1]*chrom_length),id_=0,fitness = 125.2)  # childs   <br>
        sub_parent_two = Chromosome(genes= np.array([-1]*chrom_length),id_=1,fitness = 125.2)           <br>
        <br>
        #*************************************************************************** Eigth Different States   <br>
        if yardstick[0] == True and yardstick[1] == True and yardstick[2] == True: #State 1   <br>
            child_one, child_two = multi_point_crossover(parent_one, parent_two, 1)   <br>
            <br>
        elif yardstick[0] == True and yardstick[1] == True and yardstick[2] == False: #State 2   <br>
            for i in range(0, point2):   <br>
                a.append(parent_one.genes[i])   <br>
                b.append(parent_two.genes[i])   <br>
                <br>
            sub_parent_one.genes = a   <br>
            sub_parent_two.genes = b   <br>
            <br>
            sub_parent_one, sub_parent_two = multi_point_crossover(sub_parent_one, sub_parent_two, 1)   <br>
            <br>
            k = 0   <br>
            for i in range(0, point2):   <br>
                child_one.genes[i] = sub_parent_one.genes[k]   <br>
                child_two.genes[i] = sub_parent_two.genes[k]   <br>
                k+=1   <br>
                <br>
        elif yardstick[0] == True and yardstick[1] == False and yardstick[2] == True: #State 3   <br>
            for i in range(0, point1):   <br>
                a.append(parent_one.genes[i])   <br>
                b.append(parent_two.genes[i])   <br>
                <br>
            for i in range(point2, chrom_length):   <br>
                a.append(parent_one.genes[i])   <br>
                b.append(parent_two.genes[i])   <br>
                <br>
            sub_parent_one.genes = a   <br>
            sub_parent_two.genes = b   <br>
            <br>
            sub_parent_one, sub_parent_two = multi_point_crossover(sub_parent_one, sub_parent_two, 1)   <br>
            <br>
            k = 0   <br>
            for i in range(0, point1):   <br>
                child_one.genes[i] = sub_parent_one.genes[k]   <br>
                child_two.genes[i] = sub_parent_two.genes[k]   <br>
                k+=1                     <br>
            for i in range(point2, chrom_length):   <br>
                child_one.genes[i] = sub_parent_one.genes[k]   <br>
                child_two.genes[i] = sub_parent_two.genes[k]   <br>
                k+=1   <br>
                <br>
        elif yardstick[0] == False and yardstick[1] == True and yardstick[2] == True: #State 4   <br>
            for i in range(point1, chrom_length):   <br>
                a.append(parent_one.genes[i])   <br>
                b.append(parent_two.genes[i])   <br>
                <br>
            sub_parent_one.genes = a   <br>
            sub_parent_two.genes = b   <br>
            <br>
            sub_parent_one, sub_parent_two = multi_point_crossover(sub_parent_one, sub_parent_two, 1)   <br>
            <br>
            k = 0   <br>
            for i in range(point1, chrom_length):   <br>
                child_one.genes[i] = sub_parent_one.genes[k]   <br>
                child_two.genes[i] = sub_parent_two.genes[k]   <br>
                k+=1   <br>
                <br>
        elif yardstick[0] == False and yardstick[1] == False and yardstick[2] == True: #State 5   <br>
            for i in range(point2, chrom_length):   <br>
                a.append(parent_one.genes[i])   <br>
                b.append(parent_two.genes[i])   <br>
                <br>
            sub_parent_one.genes = a   <br>
            sub_parent_two.genes = b   <br>
            <br>
            sub_parent_one, sub_parent_two = multi_point_crossover(sub_parent_one, sub_parent_two, 1)   <br>
            <br>  
            k = 0   <br>
            for i in range(point2, chrom_length):   <br>
                child_one.genes[i] = sub_parent_one.genes[k]   <br>
                child_two.genes[i] = sub_parent_two.genes[k]   <br>
                k+=1   <br>
                <br>
        elif yardstick[0] == False and yardstick[1] == True and yardstick[2] == False: #State 6   <br>
            for i in range(point1, point2):   <br>
                a.append(parent_one.genes[i])   <br>
                b.append(parent_two.genes[i])   <br>
                <br>
            sub_parent_one.genes = a   <br>
            sub_parent_two.genes = b   <br>
            <br>
            sub_parent_one, sub_parent_two = multi_point_crossover(sub_parent_one, sub_parent_two, 1)   <br>
            <br>
            k = 0   <br>
            for i in range(point1, point2):   <br>
                child_one.genes[i] = sub_parent_one.genes[k]   <br>
                child_two.genes[i] = sub_parent_two.genes[k]   <br>
                k+=1   <br>
                <br>
        elif yardstick[0] == True and yardstick[1] == False and yardstick[2] == False: #State 7   <br>
            for i in range(0, point1):   <br>
                a.append(parent_one.genes[i])   <br>
                b.append(parent_two.genes[i])   <br>
                <br>
            sub_parent_one.genes = a   <br>
            sub_parent_two.genes = b   <br>
            <br>
            sub_parent_one, sub_parent_two = multi_point_crossover(sub_parent_one, sub_parent_two, 1)   <br>
            <br>
            k = 0   <br>
            for i in range(0, point1):   <br>
                child_one.genes[i] = sub_parent_one.genes[k]   <br>
                child_two.genes[i] = sub_parent_two.genes[k]   <br>
                k+=1   <br>

                <br>   <br>
        #**************************************************************************************************   <br>
        <br>
    else:  # if pc is less than random number then don't make any change   <br>
        child_one = deepcopy(parent_one)   <br>
        child_two = deepcopy(parent_two)   <br>
    return child_one, child_two   <br>
    <br>   <br>


parent1 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]   <br>
parent2 = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]   <br>
CROSS = homologous_crossover(parent1, parent2, 1)   <br>
<br>
if __name__ == '__main__':   <br>
    print("\nChildren")   <br>
    print("=================================================")   <br>
    for index, _ in enumerate(CROSS):  #two childs   <br>
        Chromosome.describe(CROSS[index])   <br>
        <br>   <br>
  </div> 
</div>

<div id="C++" class="codecontent">
<div>
#include &lt; iostream &gt; <br>
using namespace std; <br>
/* This function adds the corresponding <br>
 * elements of both the arrays and <br>
 * displays it. <br>
 */ <br>
void sum(int arr1[], int arr2[]){ <br>
   int temp[5]; <br>
   for(int i=0; i&lt;5; i++){ <br>
      temp[i] = arr1[i]+arr2[i]; <br>
      cout&lt;&lt;temp[i]&lt;&lt;endl; <br>
   } <br>
} <br>
int main(){ <br>
   int a[5] = {10, 20, 30, 40 ,50}; <br>
   int b[5] = {1, 2, 3, 4, 5}; <br>
   //Passing arrays to function <br>
   sum(a, b); <br>
   return 0; <br>
} <br>
  </div> 
</div>

<div id="C#" class="codecontent">
<div>
/* <br>
 * C# Program to Find the Frequency of the Word ʺtheʺ in a given Sentence <br>
 */ <br>
using System; <br>
class program <br>
{ <br>
    public static void Main() <br>
    { <br>
        string s1; <br>
        Console.WriteLine("Enter the String : "); <br>
        s1 = Console.ReadLine(); <br>
        Console.WriteLine(counting.CountStringOccurrences(s1, "the")); <br>
        Console.ReadLine(); <br>
    } <br>
} <br>
public static class counting <br>
{ <br>
    public static int CountStringOccurrences(string text, string pattern) <br>
    { <br>
        int count = 0; <br>
        int i = 0; <br>
        while ((i = text.IndexOf(pattern, i)) != -1) <br>
        { <br>
            i += pattern.Length; <br>
            count++; <br>
        } <br>
        return count; <br>
    } <br>
} <br>
  </div> 
</div>

<div id="R" class="codecontent">
<div>
# Program to check if the input number is prime or not  <br>
# take input from the user <br>
num = as.integer(readline(prompt="Enter a number: ")) <br>
flag = 0 <br>
# prime numbers are greater than 1 <br>
if(num > 1) { <br>
# check for factors <br>
flag = 1 <br>
for(i in 2:(num-1)) { <br>
if ((num %% i) == 0) { <br>
flag = 0 <br>
break <br>
} <br>
} <br>
}  <br>
if(num == 2)    flag = 1 <br>
if(flag == 1) { <br>
print(paste(num,"is a prime number")) <br>
} else { <br>
print(paste(num,"is not a prime number")) <br>
} <br>
  </div> 
</div>

<div id="Ruby" class="codecontent">
<div>
hex = [(0..9),('A'..'F')] <br>
hex.each { |x| x.each { |y| print y }}  # outputs, 0123456789ABCDEF <br>
<br>
# declare an array of arrays <br>
nums = [[0,1], [2,3,4,5,6,7], [8,9], ['A','B','C','D','E','F']] <br>
binary = nums[0]             # => [0, 1] <br>
octal = nums[0] + nums[1]        # => [0, 1, 2, 3, 4, 5, 6, 7] <br>
decimal = nums[0] + nums[1] + nums[2]  # => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9] <br>
hexadecimal = nums.flatten        # => [0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F'] <br>
octal = (binary + octal).uniq      # => [0, 1, 2, 3, 4, 5, 6, 7] <br>
<br>
a = [0, 1, 2, 3, 4, 5]  # array of 6 elements <br>
b = a.map { |x| 2**x }  # => [1, 2, 4, 8, 16, 32] <br>
  </div> 
</div>

<div class="output">
  <button class="outputlinks" >output</button>
</div>

<div id="output" class="outputcontent">
<div>
# Parents    <br>
# =================================================   <br>
# ID=#0, Fitness=125.2,    <br>
# Genes=   <br>
# [0 1 0 0 0 1 0 1 1 1 1]   <br>
# ID=#1, Fitness=125.2,   <br>
# Genes=   <br>
# [1 0 1 1 0 1 0 1 0 0 0]   <br>
# [2, 2, 3]   <br>
# [True, True, True]   <br>
<br>
# Parents   <br>
# =================================================   <br>
# ID=#0, Fitness=125.2,    <br>
# Genes=   <br>
# [0 1 0 0 0 1 0 1 1 1 1]   <br>
# ID=#1, Fitness=125.2,   <br>
# Genes=   <br>   
# [1 0 1 1 0 1 0 1 0 0 0]   <br>
<br>
# Children   <br>
# =================================================   <br>
# ID=#0, Fitness=125.2,   <br>
# Genes=   <br>
# [0 0 0 0 0 1 0 1 1 1 1]   <br>
# ID=#1, Fitness=125.2,   <br>
# Genes=   <br>
# [1 1 1 1 0 1 0 1 0 0 0]   <br>
  </div>  
</div>

        </div>
    </div>

    <script>
document.getElementById("Python").style.display = "block"; //display the first tab in code
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
    require "footer.php";
?>