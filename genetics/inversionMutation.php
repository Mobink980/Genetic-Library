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
                <li id="leftBarFirst">Mutation Operators</li>
                <li><a href="bitFlipMutation.php">Bit Flip Mutation</a></li>
                <li><a href="randomResettingMutation.php">Random Resetting Mutation</a></li>
                <li><a href="swapMutation.php">Swap Mutation</a></li>
                <li><a href="scrambleMutation.php">Scramble Mutation </a></li>
                <li id="leftSideBarSelected"><a href="#">Inversion Mutation </a></li>
                <li><a href="inorderMutation.php">Inorder Mutation</a></li>
                <li><a href="centerinversionMutation.php">Center Inversion Mutation (CIM)</a></li>
                <li><a href="throasMutation.php">Throas Mutation</a></li>
                <li><a href="throrsMutation.php">Thrors Mutation</a></li>
                <li><a href="distanceBasedMutation.php">Distance Based Mutation (DMO)</a></li>
                <li><a href="displacementMutation.php">Displacement Mutation</a></li>
                <li><a href="insertionMutation.php">Insertion Mutation</a></li>
                <li><a href="displacedInversionMutation.php">Displaced Inversion Mutation</a></li>             
            </ul>
    </div>

        
    <div class="main">
    <div class="right-side-panel"></div> <!--The empty space at the right of the page-->
    
    <div class="topButtons">
        <a id="btnPrev" href="scrambleMutation.php" class="btn"> Previous</a>
        <a id="btnNext" href="inorderMutation.php" class="btn">Next</a>
    </div>
        <div class="explain">

        <h1>Inversion Mutation or Reverse Sequence Mutation(RSM)</h1>
                <hr />
                <!--explanation needs fixing-->
                <p>
                    In inversion mutation, a substring of the 
                    chromosome is selected and is inversed and replaced.
                </p>
                <p>This is an example for how it works.</p>

<img class="image-view" src="Genetics/Genetic pictures/Mutation/inversion_mutation.png" alt="Inversion Mutation or Reverse Sequence Mutation(RSM)"/> 
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
import numpy as np  <br>
import random <br>
from copy import deepcopy <br>
<br>
class Chromosome(): <br>
    """ <br>
    Description of class `Chromosome`: <br>
    This class represents a simple chromosome. In the method describe, a simple description <br>
    of the chromosome is provided, when it is called.  <br>
    """ <br>
    def __init__(self, genes, id_=None, fitness=-1): <br>
        self.id_ = id_ <br>
        self.genes = genes <br>
        self.fitness = fitness        <br>
        <br>
    def describe(self):  <br>
        """ <br>
        Prints the ID, fitness, and genes <br>
        """ <br>
        print(f"ID=#{self.id_}, Fitness={self.fitness}, \nGenes=\n{self.genes}") <br>
        <br>
    def get_chrom_length(self):  <br>
        """ <br>
        Returns the length of `self.genes` <br>
        """ <br>
        return len(self.genes) <br>
        <br>
        <br>
def sorted_random_numbers(point_nums, interval): <br>
    """ <br>
    Returns several random integers in an interval which is sorted <br>
    point_nums: number of points to be selected <br>
    interval: the interval which the numbers are selected <br>
    """     <br>
    points = [] <br>
    for _ in range(point_nums): <br>
        num = np.random.randint(1, abs(interval)) <br>
        while num in points: <br>
            num = np.random.randint(1, abs(interval)) <br>
        points.append(num) <br>
    return sorted(points) <br>
    <br>
    <br>
"Inversion mutation" <br>
def inversion_mutation(parent_one, pm): <br>
    """ <br>
    This function takes one chromosome, and performs Inversion mutation on it.  <br>
    parent_one: The parent <br>
    pm: The probability of mutation <br>
    """  <br>
    parent_one = Chromosome(genes= np.array([1, 2, 3, 4, 5, 6, 7, 8, 9]),id_=0,fitness = 125.2) #parent <br>
    print("\nParent") <br>
    print("=================================================") <br>
    Chromosome.describe(parent_one) <br>
    chrom_length = Chromosome.get_chrom_length(parent_one) <br>
    child_one = Chromosome(genes= np.array([-1]*chrom_length),id_=0,fitness = 125.2)  # child <br>
    <br> 
    if np.random.rand() < pm:  # if pm is greater than random number <br>
        points = sorted_random_numbers(2, chrom_length) <br>
        print(points)     <br>
        reverse_list = [] <br>
        child_one.genes = parent_one.genes <br>
        for i in range(points[0], points[1]): <br>
            reverse_list.append(parent_one.genes[i]) <br>
        reverse_list.reverse() <br>
        # print(reverse_list) <br>
        k = 0 <br>
        for i in range(points[0], points[1]): <br> 
            child_one.genes[i] = reverse_list[k] <br>
            k+=1       <br>
            <br>
    else:  # if pm is less than random number then don't make any change <br>
        child_one = deepcopy(parent_one) <br>
        <br>
    return child_one <br>

    <br>
    <br>
parent1 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] <br>
parent2 = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1] <br>
MUTATION = inversion_mutation(parent1, 1) <br>
<br>
if __name__ == '__main__': <br>
    print("\nChildren") <br>
    print("=================================================") <br>
    Chromosome.describe(MUTATION)  #one child <br>
    <br>
    <br>

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
# Parents <br>
# ================================================= <br>
# ID=#0, Fitness=125.2,  <br>
# Genes= <br>
# [0 0 0 0 0 0 0 0 0 0 0] <br>
# ID=#1, Fitness=125.2, <br>
# Genes= <br>
# [1 1 1 1 1 1 1 1 1 1 1] <br>
<br>
# Children <br>
# ================================================= <br>
# ID=#0, Fitness=125.2, <br>
# Genes= <br>
# [0 0 0 0 0 0 1 1 1 1 1] <br>
# ID=#1, Fitness=125.2, <br>
# Genes= <br>
# [1 1 1 1 1 1 0 0 0 0 0] <br>
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