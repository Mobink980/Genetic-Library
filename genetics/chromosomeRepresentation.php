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
    height: 8650px !important; 
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








.code1 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#78C381, #5A8E60, #3A7440);
  width: 370px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.code1 button {
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
.code1 button:hover {
  background-color: #ddd;
}

/* Create an active/current codelink class */
.code1 button.active {
  background-color: #84C38B;
}

/* Style the tab content */
.codecontent1 {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: #000;
  background-image: linear-gradient(#78C381, #3D5A40);
}

/* Style the tab */
.output1 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
  color: white;
  width: 69px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.output1 button {
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
.output1 button:hover {
  background-color: #666;
}

/* Create an active/current tablink class */
.output1 button.active {
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
}

/* Style the tab content */
.outputcontent1 {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: white;
  background-image: linear-gradient(#3F3D3D, #4E4646, #2E2D2D);
}











.code2 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#78C381, #5A8E60, #3A7440);
  width: 370px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.code2 button {
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
.code2 button:hover {
  background-color: #ddd;
}

/* Create an active/current codelink class */
.code2 button.active {
  background-color: #84C38B;
}

/* Style the tab content */
.codecontent2 {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: #000;
  background-image: linear-gradient(#78C381, #3D5A40);
}

/* Style the tab */
.output2 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
  color: white;
  width: 69px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.output2 button {
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
.output2 button:hover {
  background-color: #666;
}

/* Create an active/current tablink class */
.output2 button.active {
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
}

/* Style the tab content */
.outputcontent2 {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: white;
  background-image: linear-gradient(#3F3D3D, #4E4646, #2E2D2D);
}






.code3 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#78C381, #5A8E60, #3A7440);
  width: 370px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.code3 button {
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
.code3 button:hover {
  background-color: #ddd;
}

/* Create an active/current codelink class */
.code3 button.active {
  background-color: #84C38B;
}

/* Style the tab content */
.codecontent3 {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: #000;
  background-image: linear-gradient(#78C381, #3D5A40);
}

/* Style the tab */
.output3 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
  color: white;
  width: 69px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.output3 button {
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
.output3 button:hover {
  background-color: #666;
}

/* Create an active/current tablink class */
.output3 button.active {
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
}

/* Style the tab content */
.outputcontent3 {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: white;
  background-image: linear-gradient(#3F3D3D, #4E4646, #2E2D2D);
}










.code4 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#78C381, #5A8E60, #3A7440);
  width: 370px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.code4 button {
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
.code4 button:hover {
  background-color: #ddd;
}

/* Create an active/current codelink class */
.code4 button.active {
  background-color: #84C38B;
}

/* Style the tab content */
.codecontent4 {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: #000;
  background-image: linear-gradient(#78C381, #3D5A40);
}

/* Style the tab */
.output4 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
  color: white;
  width: 69px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.output4 button {
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
.output4 button:hover {
  background-color: #666;
}

/* Create an active/current tablink class */
.output4 button.active {
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
}

/* Style the tab content */
.outputcontent4 {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: white;
  background-image: linear-gradient(#3F3D3D, #4E4646, #2E2D2D);
}








.code5 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#78C381, #5A8E60, #3A7440);
  width: 370px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.code5 button {
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
.code5 button:hover {
  background-color: #ddd;
}

/* Create an active/current codelink class */
.code5 button.active {
  background-color: #84C38B;
}

/* Style the tab content */
.codecontent5 {
  display:none;
  padding: 12px 24px;
  border: 1px solid #ccc;
  border-top: none;
  width: 85%;
  color: #000;
  background-image: linear-gradient(#78C381, #3D5A40);
}

/* Style the tab */
.output5 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
  color: white;
  width: 69px;
  margin-top: 30px;
}

/* Style the buttons inside the tab */
.output5 button {
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
.output5 button:hover {
  background-color: #666;
}

/* Create an active/current tablink class */
.output5 button.active {
  background-image: linear-gradient(#444444, #3F3D3D, #0E0E0E);
}

/* Style the tab content */
.outputcontent5 {
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

.image-view{
    margin: auto;
    width: 75%;
    height: 23%;
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
                <li><a href="typesOfOperators.php">Genetic Operators</a></li>
                <li id="leftSideBarSelected"><a href="#">Chromosome Representation</a></li>
            </ul>
        </div>

        
    <div class="main">
    <div class="right-side-panel"></div> <!--The empty space at the right of the page-->
    
    <div class="topButtons">
        <a id="btnPrev" href="typesOfOperators.php" class="btn"> Previous</a>
        <a id="btnNext" href="#" class="btn">Next</a>
    </div>
        <div class="explain">

        <h1>Chromosome Representation</h1>
                <hr />
                <p>
                    We usually represent a chromosome in the Evolutionary Algorithms with the help of a list.
                    Chromosome representation can vary, due to the problem. For instance, in the Bin Packing problem,
                    we usually use, binary representation for the individuals; but for for optimizing a variable, we usually
                    use floating-point representation; or for Traveling Salesman Problem(TSP), we use
                    Integer representation without duplicate elements for the individuals in the population, because the sequence matters,
                    and no element can be repeated.
                </p>
                <h4>
                    In the following, there are some basic representations for individuals in the population.
                </h4>

                <ul>
                    <li>Binary representation: in binary representation, each gene in the chromosome can be either 0 or 1.</li>
                </ul>

<img class="image-view" src="Genetics/Genetic pictures/Representation/binary.png" alt="Binary Representation"/> 
<div class="code">
  <button class="codelinks active" onclick="openCity(event, 'Java')">Java</button>
  <button class="codelinks" onclick="openCity(event, 'Python')">Python</button>
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
  "One-point crossover" <br>
def one_point_crossover(parent_one, parent_two, x_point, pc):<br>
    """<br>
    This function takes two parents, and performs One-point crossover on them. <br>
    parent_one: First parent<br>
    parent_two: Second parent<br>
    x_point: The crossover point<br>
    pc: The probability of crossover <br>
    """  <br>
    # selected_pop = tournament_selection(2,pop_size,pop)<br>
    # parent_one = p[0]  # choose 2 individuals from the pop <br>
    # parent_two = p[1]<br>
    <br>
    return child_one, child_two<br>
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

                <br /> <br />

                <ul>
                    <li>
                        Integer representation without duplicate elements: in this representation,
                        each gene of the chromosome can be an integer, but there are no duplicate elements. In other words,
                        there are no two genes in a chromosome with the same value.
                        This representation is also called string representation.
                    </li>
                </ul>

<img class="image-view" src="Genetics/Genetic pictures/Representation/integer_representation_without_duplicate.png" alt="Integer representation without duplicate elements"/>
<div class="code1">
  <button class="codelinks1 active" onclick="openCity1(event, 'Java1')">Java</button>
  <button class="codelinks1" onclick="openCity1(event, 'Python1')">Python</button>
  <button class="codelinks1" onclick="openCity1(event, 'C++1')">C++</button>
  <button class="codelinks1" onclick="openCity1(event, 'C#1')">C#</button>
  <button class="codelinks1" onclick="openCity1(event, 'R1')">R</button>
  <button class="codelinks1" onclick="openCity1(event, 'Ruby1')">Ruby</button>
</div>

<div id="Java1" class="codecontent1">
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

<div id="Python1" class="codecontent1">
 
  <div>
  "One-point crossover" <br>
def one_point_crossover(parent_one, parent_two, x_point, pc):<br>
    """<br>
    This function takes two parents, and performs One-point crossover on them. <br>
    parent_one: First parent<br>
    parent_two: Second parent<br>
    x_point: The crossover point<br>
    pc: The probability of crossover <br>
    """  <br>
    # selected_pop = tournament_selection(2,pop_size,pop)<br>
    # parent_one = p[0]  # choose 2 individuals from the pop <br>
    # parent_two = p[1]<br>
    <br>
    return child_one, child_two<br>
  </div> 
</div>

<div id="C++1" class="codecontent1">
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

<div id="C#1" class="codecontent1">
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

<div id="R1" class="codecontent1">
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

<div id="Ruby1" class="codecontent1">
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

<div class="output1">
  <button class="outputlinks1" >output</button>
</div>

<div id="output1" class="outputcontent1">
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
                <br /> <br />

                <ul>
                    <li>
                        Integer representation with duplicate elements:
                        In this representation, each gene of the chromosome is an integer;
                        but duplicate elements are allowed. This means that there could be more
                        than one gene in the chromosome with the same value.
                    </li>
                </ul>

<img class="image-view" src="Genetics/Genetic pictures/Representation/integer_representation_with_duplicate.png" alt="Integer representation with duplicate elements"/>
<div class="code2">
  <button class="codelinks2 active" onclick="openCity2(event, 'Java2')">Java</button>
  <button class="codelinks2" onclick="openCity2(event, 'Python2')">Python</button>
  <button class="codelinks2" onclick="openCity2(event, 'C++2')">C++</button>
  <button class="codelinks2" onclick="openCity2(event, 'C#2')">C#</button>
  <button class="codelinks2" onclick="openCity2(event, 'R2')">R</button>
  <button class="codelinks2" onclick="openCity2(event, 'Ruby2')">Ruby</button>
</div>

<div id="Java2" class="codecontent2">
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

<div id="Python2" class="codecontent2">
 
  <div>
  "One-point crossover" <br>
def one_point_crossover(parent_one, parent_two, x_point, pc):<br>
    """<br>
    This function takes two parents, and performs One-point crossover on them. <br>
    parent_one: First parent<br>
    parent_two: Second parent<br>
    x_point: The crossover point<br>
    pc: The probability of crossover <br>
    """  <br>
    # selected_pop = tournament_selection(2,pop_size,pop)<br>
    # parent_one = p[0]  # choose 2 individuals from the pop <br>
    # parent_two = p[1]<br>
    <br>
    return child_one, child_two<br>
  </div> 
</div>

<div id="C++2" class="codecontent2">
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

<div id="C#2" class="codecontent2">
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

<div id="R2" class="codecontent2">
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

<div id="Ruby2" class="codecontent2">
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

<div class="output2">
  <button class="outputlinks2" >output</button>
</div>

<div id="output2" class="outputcontent2">
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
                <br /> <br />

                <ul>
                    <li>
                        Floating-point Representation: In floating-point representation,
                        each gene of the chromosome can be a floating point number due to the
                        properties of the problem.
                    </li>
                </ul>

                
<img class="image-view" src="Genetics/Genetic pictures/Representation/floating_point_representation.png" alt="Floating-point Representation"/>
<div class="code3">
  <button class="codelinks3 active" onclick="openCity3(event, 'Java3')">Java</button>
  <button class="codelinks3" onclick="openCity3(event, 'Python3')">Python</button>
  <button class="codelinks3" onclick="openCity3(event, 'C++3')">C++</button>
  <button class="codelinks3" onclick="openCity3(event, 'C#3')">C#</button>
  <button class="codelinks3" onclick="openCity3(event, 'R3')">R</button>
  <button class="codelinks3" onclick="openCity3(event, 'Ruby3')">Ruby</button>
</div>

<div id="Java3" class="codecontent3">
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

<div id="Python3" class="codecontent3">
 
  <div>
  "One-point crossover" <br>
def one_point_crossover(parent_one, parent_two, x_point, pc):<br>
    """<br>
    This function takes two parents, and performs One-point crossover on them. <br>
    parent_one: First parent<br>
    parent_two: Second parent<br>
    x_point: The crossover point<br>
    pc: The probability of crossover <br>
    """  <br>
    # selected_pop = tournament_selection(2,pop_size,pop)<br>
    # parent_one = p[0]  # choose 2 individuals from the pop <br>
    # parent_two = p[1]<br>
    <br>
    return child_one, child_two<br>
  </div> 
</div>

<div id="C++3" class="codecontent3">
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

<div id="C#3" class="codecontent3">
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

<div id="R3" class="codecontent3">
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

<div id="Ruby3" class="codecontent3">
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

<div class="output3">
  <button class="outputlinks3" >output</button>
</div>

<div id="output3" class="outputcontent3">
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
                <br /> <br />

                <ul>
                    <li>
                        Two-dimensional chromosomes with equal size:
                        In this representation, each chromosome is a two-dimensional
                        list with numeric values. The size in each row is the same.
                    </li>
                </ul>

                
<img class="image-view" src="Genetics/Genetic pictures/Representation/two_dimensional_equalSize.png" alt="Two-dimensional chromosomes with equal size"/>
<div class="code4">
  <button class="codelinks4 active" onclick="openCity4(event, 'Java4')">Java</button>
  <button class="codelinks4" onclick="openCity4(event, 'Python4')">Python</button>
  <button class="codelinks4" onclick="openCity4(event, 'C++4')">C++</button>
  <button class="codelinks4" onclick="openCity4(event, 'C#4')">C#</button>
  <button class="codelinks4" onclick="openCity4(event, 'R4')">R</button>
  <button class="codelinks4" onclick="openCity4(event, 'Ruby4')">Ruby</button>
</div>

<div id="Java4" class="codecontent4">
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

<div id="Python4" class="codecontent4">
 
  <div>
  "One-point crossover" <br>
def one_point_crossover(parent_one, parent_two, x_point, pc):<br>
    """<br>
    This function takes two parents, and performs One-point crossover on them. <br>
    parent_one: First parent<br>
    parent_two: Second parent<br>
    x_point: The crossover point<br>
    pc: The probability of crossover <br>
    """  <br>
    # selected_pop = tournament_selection(2,pop_size,pop)<br>
    # parent_one = p[0]  # choose 2 individuals from the pop <br>
    # parent_two = p[1]<br>
    <br>
    return child_one, child_two<br>
  </div> 
</div>

<div id="C++4" class="codecontent4">
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

<div id="C#4" class="codecontent4">
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

<div id="R4" class="codecontent4">
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

<div id="Ruby4" class="codecontent4">
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

<div class="output4">
  <button class="outputlinks4" >output</button>
</div>

<div id="output4" class="outputcontent4">
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
                <br /> <br />

                <ul>
                    <li>
                        Two-dimensional chromosomes with different size:
                        In this representation, each chromosome is a two-dimensional list with numeric
                        values. But the size can vary from row to row.
                    </li>
                </ul>

                
<img class="image-view" src="Genetics/Genetic pictures/Representation/two_dimensional_differentSize.png" alt="Two-dimensional chromosomes with different size"/>
<div class="code5">
  <button class="codelinks5 active" onclick="openCity5(event, 'Java5')">Java</button>
  <button class="codelinks5" onclick="openCity5(event, 'Python5')">Python</button>
  <button class="codelinks5" onclick="openCity5(event, 'C++5')">C++</button>
  <button class="codelinks5" onclick="openCity5(event, 'C#5')">C#</button>
  <button class="codelinks5" onclick="openCity5(event, 'R5')">R</button>
  <button class="codelinks5" onclick="openCity5(event, 'Ruby5')">Ruby</button>
</div>

<div id="Java5" class="codecontent5">
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

<div id="Python5" class="codecontent5">
 
  <div>
  "One-point crossover" <br>
def one_point_crossover(parent_one, parent_two, x_point, pc):<br>
    """<br>
    This function takes two parents, and performs One-point crossover on them. <br>
    parent_one: First parent<br>
    parent_two: Second parent<br>
    x_point: The crossover point<br>
    pc: The probability of crossover <br>
    """  <br>
    # selected_pop = tournament_selection(2,pop_size,pop)<br>
    # parent_one = p[0]  # choose 2 individuals from the pop <br>
    # parent_two = p[1]<br>
    <br>
    return child_one, child_two<br>
  </div> 
</div>

<div id="C++5" class="codecontent5">
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

<div id="C#5" class="codecontent5">
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

<div id="R5" class="codecontent5">
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

<div id="Ruby5" class="codecontent5">
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

<div class="output5">
  <button class="outputlinks5" >output</button>
</div>

<div id="output5" class="outputcontent5">
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
document.getElementById("Java").style.display = "block"; //display the first tab in code
document.getElementById("Java1").style.display = "block"; //display the first tab in code
document.getElementById("Java2").style.display = "block"; //display the first tab in code
document.getElementById("Java3").style.display = "block"; //display the first tab in code
document.getElementById("Java4").style.display = "block"; //display the first tab in code
document.getElementById("Java5").style.display = "block"; //display the first tab in code

document.getElementById("output").style.display = "block"; //display the first tab in output
document.getElementById("output1").style.display = "block"; //display the first tab in output
document.getElementById("output2").style.display = "block"; //display the first tab in output
document.getElementById("output3").style.display = "block"; //display the first tab in output
document.getElementById("output4").style.display = "block"; //display the first tab in output
document.getElementById("output5").style.display = "block"; //display the first tab in output

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



function openCity1(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("codecontent1");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  
  tablinks = document.getElementsByClassName("codelinks1");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



function openCity2(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("codecontent2");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  
  tablinks = document.getElementsByClassName("codelinks2");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



function openCity3(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("codecontent3");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  
  tablinks = document.getElementsByClassName("codelinks3");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



function openCity4(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("codecontent4");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  
  tablinks = document.getElementsByClassName("codelinks4");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



function openCity5(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("codecontent5");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  
  tablinks = document.getElementsByClassName("codelinks5");

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