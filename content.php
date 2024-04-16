<!DOCTYPE html>
<html>
<head>
<style>
    


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100vh;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

.hidden {
    display: none;
}

iframe {
  width: calc(75% - 20px);
  height: 95vh;
  margin-left: calc(25% + 20px);
}

</style>
</head>
<body>

<ul>
  <li onclick="myFunc()"><a class="active" href="#">Unit 1 Rational Expression</a></li>
  <div class="content-list hidden">
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/1.1 - Working With Polynomials.pdf">1.1 - Working With Polynomials</a></li>
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/1.2 - Solving Equations and Factoring Recap.pdf">1.2 - Solving Equations and Factoring Recap</a></li>
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/1.3 - More Solving and Factoring.pdf">1.3 - More Solving and Factoring</a></li>
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/1.4 - Simplifying Rational Expressions.pdf">1.4 - Simplifying Rational Expressions</a></li>
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/1.5 - Multiplying and Dividing Rational Expressions.pdf">1.5 - Multiplying and Dividing Rational Expressions</a></li>
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/1.6 - Adding and Subtracting Rational Expressions Part 1.pdf">1.6 - Adding and Subtracting Rational Expressions Part 1</a></li>
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/1.7 - Adding and Subtracting Rational Expressions Part 2.pdf">1.7 - Adding and Subtracting Rational Expressions Part 2</a></li>
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/1.8 - Functions, Relations, Domain and Range.pdf">1.8 - Functions, Relations, Domain and Range</a></li>
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/1.9 - Domain, Range and Function Notation.pdf">1.9 - Domain, Range and Function Notation</a></li>
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/2.1  - Radicals.pdf">2.1  - Radicals</a></li>
    <li><a onclick="changeSrc(event)" data-href="Unit_one_Function1/unit_review.pdf">UNIT #1 REVIEW</a></li>
    <hr></hr>
 </div>
 <li onclick="myFunc2()"><a class="active" href="#">Unit 2 Functions</a></li>
  <div class="content-list2 hidden">
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/2.1 - Functions.pdf">Lesson 1 - Domain and Range</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L1t-1.1-functions,+domain+and+range.pdf">Lesson 1 Solution </a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw1s-1.1+functions,+domain+and+range.pdf">Worksheet 1 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw1t-1.1-functions,+domain,+and+range.pdf">Worksheet 1 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L2s-1.2-Function+Notation.pdf">Lesson 2 - Function Notation</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L2t-1.2-Function+Notation.pdf">Lesson 2 Solution</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw2s-1.2-Function+Notation.pdf">Worksheet 2 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw2t-1.2-Function+Notation.pdf">Worksheet 2 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L3s-1.3-Max+or+min+of+quadratic.pdf">Lesson 3 Max or Min of a Quadratic Function</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L3t-1.3-Max+or+min+of+quadratic.pdf">Lesson 3 Solution</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw3as-1.3-Max+or+min+of+quadratic.pdf">Worksheet 3 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw3at-1.3-Max+or+min+of+quadratic.pdf">Worksheet 3 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L4s-1.4-radicals.pdf">Lesson 4 - Radicals</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L4t-1.4-radicals.pdf">Lesson 4 Solution </a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw4s-1.4-radicals.pdf">Worksheet 4 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw4t-1.4-radicals.pdf">Worksheet 4 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L5s-1.5-solve+quadratics+by+factoring.pdf">Lesson 5 - Solve Quadratics by Factoring</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L5t-1.5-solve+quadratics+by+factoring.pdf">Lesson 5 Solution </a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw5s-1.5-solve+quadratics+by+factoring.pdf">Worksheet 5 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw5t-1.5-solve+quadratics+by+factoring.pdf">Worksheet 5 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L6s-1.5-solve+using+QF.pdf">Lesson 6 - Quadratic Formula</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L6t-1.5-solve+using+QF.pdf">Lesson 6 Solution </a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw6s-1.5-solve+using+QF.pdf">Worksheet 6 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw6t-1.5-solve+using+QF.pdf">Worksheet 6 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L8s-1.7-lin+quad+system.pdf">Lesson 7 - Linear Quadratic Systems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/L8t-1.7-lin+quad+system.pdf">Lesson 7 Solution </a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw8s-1.7-lin+quad+system.pdf">Worksheet 7 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_two_Function1/hw8t-1.7-lin+quad+system.pdf">Lesson 7 Solution </a></li>
  <hr></hr>
  </div>

<li onclick="myFunc3()"><a class="active" href="#">UNIT 3 - TRANSFORMATIONS</a></li>
<div class="content-list3 hidden">
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/-Lesson1.pdf">LESSON 1 - INTRO TO TRANSFORMATIONS</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/intro+to+transformations+lesson+solutions.pdf">LESSON 1 Solution</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/Intro+to+Transformations++Worksheet.pdf">Worksheet 1 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/Intro+to+Transformations+Worksheet+SOLUTIONS.pdf">Worksheet 1 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/Transformations+of+Quadratic+Functions+Lesson+Student.pdf">LESSON 2 - TRANSFORM X^2</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/transformations+of+quadratic+functions+solutions.pdf">Lesson 2 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/Transformations+of+Quadratic+Functions+Worksheet.pdf">Worksheet 2 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/Transformations+of+Quadratic+Functions+Worksheet+SOLUTIONS.pdf">Worksheet 2 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/Transformations+of+root+x+Lesson+Student.pdf">LESSON 3 - TRANSFORM ROOT X</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/transformations+of+root+x+lesson+solutions.pdf">LESSON 3 Solution</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/Transformations+of+root+x+worksheet.pdf">Worksheet 3 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/Transformations+of+root+x+worksheet+SOLUTIONS.pdf">Worksheet 3 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/transformations+of+rational+functions+Lesson+Student.pdf">LESSON 4 - TRANSFORM 1/X</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/transformations+of+rational+functions+lesson+solutions.pdf">LESSSON 4 Solution</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/transformations+of+rational+functions+worksheet.pdf">Worksheet 4 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/transformations+of+rational+functions+worksheet+SOLUTIONS.pdf">Worksheet 4 Solutions</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/2.6+inverse+of+a+function+lesson+student.pdf">LESSON 5 - INVERSE OF A FUNCTION</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/2.6+inverse+of+a+function+lesson+SOLUTIONS.pdf">LESSON 5 Solution</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/2.6+inverse+of+a+function+worksheet.pdf">Worksheet 5 of Practice Problems</a></li>
  <li><a onclick="changeSrc(event)" data-href="Unit_three_Function1/2.6+inverse+of+a+function+worksheet+SOLUTIONS.pdf">Worksheet 5 Solutions</a></li>
  

</div>





</ul>

<iframe src="Unit_one_Function1/1.1 - Working With Polynomials.pdf"></iframe>

 

<script>
  function changeSrc(e) {
    e.preventDefault()
    const src = e.target.getAttribute("data-href")
    const frame = document.querySelector("iframe")
    frame.src = src
  }
    function myFunc() {
        document.querySelector(".content-list").classList.toggle("hidden")
    }
    function myFunc2() {
        document.querySelector(".content-list2").classList.toggle("hidden")
    }
    function myFunc3() {
        document.querySelector(".content-list3").classList.toggle("hidden")
    }
</script>

