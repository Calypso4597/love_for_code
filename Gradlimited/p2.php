<?php
    session_start();
    if (!isset($_SESSION["lid"])) {
        header("Location: login.php");
    }
?>

<html>
<head>
<style>

.container {
    width: 100%;
}

 ul li{
  display:inline;
  padding:0px;
 }
footer {
        padding: 1em 0;
                background-color: #000000;
        text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 1em;
                color: #ffffff;
            }

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid white;
    padding: 1em;
    overflow: hidden;
}
table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #000000;
    color: white;
}
a{
  font-size:25px;
  color:#ffffff;
  text-decoration:none;
  
}
a:hover{
   opacity:1;
   border-style:solid;
   border-color:#ffffff;
   background-color:#ffffff;
   color:white;
   padding:20px;
}
 #header {
                padding: 0.1em;
                background-color: #000000;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 2.5em;
                color: antiquewhite;
            }
button{
    color:white;
    background-color: black;
}
input{
      width: auto;
    padding: 12px 5px;
    margin: 8px 0;
    border: 1px solid #ccc;
    box-sizing: border-box; 
}
</style>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<title>Find an Internship</title>
</head>
<body bgcolor="#F8F5CF">
<div id="header">
<ul>
<li><a href="index.php">Home</a></li>
<?=(isset($_SESSION["lid"])) ? '<li style="float:right;"><a id="nb" href="index.php?logout=1">Logout</a></li>' : '<li style="float:right;"><a id="nb" href="login.php">Login</a></li>'?>
</ul>
</div>
  <div class="container">
<nav>

<form method="post" onsubmit="return myFunction()">
CATEGORY:<input list="internship" name="internship" id="intern">
<datalist id="internship">
<option value="Marketing" ></option>
<option value="Programming"></option>
<option value="Journalism"></option>
<option value="Law"></option>
<option value="Medicine"></option>
</datalist>
<br>
Location : Mumbai
<input type="submit" name="Search" value="Search">
</form>
<script>
    function myFunction(){
        var val = document.getElementById("intern").value;
        switch(val) {
            case 'Marketing':
                link = 'p2.php';
                break;
            case 'Programming':    
                link = 'p3.php';
                break;
            case 'Journalism' :   
                link = 'p4.php';
                break;
            case 'Law'    :
                link = 'p5.php';
                break;
            case 'Medicine':    
                link = 'p6.php';
                break;
        }
        location.href = link;
        return false;
    }
</script>
</nav>
<article>
<h1>INTERNSHIPS</h1>
  <h1>Marketing</h1>
  <ol>
  <li>Business Development (Sales)<br>
     Shree Shakun Realty Private Limited<br>
     Location(s): Mumbai<br>
     <br>
     <table>
     <tr>
     <th>Start Date</th>	<th>Duration</th>	<th>Stipend</th> <th>Posted On</th>	     <th>Apply By</th>
     </tr>
     <tr>
     <td>immediately</td><td> 6 Months</td>	         <td>5000 /Month</td>	        <td>28 Sep'17</td>	<td>5 Oct'17</td>
     </tr>
     </table>
     <a href="p21.html"><button>LEARN MORE</button></a><br>
     <br>
    <li>Marketing<br>
    Faasos Food Services Private Limited<br>
    Marketing Internship at Faasos Food Services Private Limited in Mumbai<br>
    Location(s): Mumbai<br>
    <br>
    <table>
     <tr>
     <th>Start Date</th>	<th>Duration</th>	<th>Stipend</th> <th>Posted On</th>	     <th>Apply By</th>
     </tr>
     <tr>
     <td> immediately</td><td> 3 Months</td><td>5000 /Month</td>	<td>28 Sep'17</td>	      <td> 5 Oct'17</td>
     </tr>
     </table>    
     <a href="p22.html"><button>LEARN MORE</button></a><br>
     <br>
<li>Business Development (Sales)<br>
    Vitalveins Healthcare Vitairs International Private Limited<br>
    Location(s): Thane, Mumbai, Navi Mumbai<br>
    <br>
    <table>
     <tr>
     <th>Start Date</th>	<th>Duration</th>	<th>Stipend</th> <th>Posted On</th>	     <th>Apply By</th>
     </tr>
     <tr>
     <td>immediately</td><td> 6 Months</td>	<td>5000 /Month</td>	<td>28 Sep'17</td>	<td>11 Oct'17</td>
     </tr>
     </table>
     <a href="p23.html"><button>LEARN MORE</button></a><br>
     <br>
<li>Business Development (Sales)<br>
    MalikMakaan Real Estate Consultancy LLP<br>
    Business Development (Sales) Internship at MalikMakaan Real Estate Consultancy LLP in Mumbai<br>
    Location(s): Mumbai<br>
    <br>
    <table>
     <tr>
     <th>Start Date</th>	<th>Duration</th>	<th>Stipend</th> <th>Posted On</th>	     <th>Apply By</th>
     </tr>
     <tr>
     <td>immediately</td>   <td> 6 Months</td>	<td>5000-7000 /Month</td>	<td>28 Sep'17</td>	<td>2 Oct'17</td>
     </tr>
    </table>
   <a href="p24.html"><button>LEARN MORE</button></a><br>
   <br>
<li>Marketing<br>
    Market Men Consumer Connect & Event Private Limited<br>
    Location(s): Mumbai<br>
    <br>
    <table>
     <tr>
     <th>Start Date</th>	<th>Duration</th>	<th>Stipend</th> <th>Posted On</th>	     <th>Apply By</th>
     </tr>
     <tr>
     <td>Immediately</td>  <td>  3 Months</td>     <td>	8000 /Month</td> <td>28 Sep'17</td> <td>12 Oct'17</td>
     </tr>
     </table>
    <a href="p24.html"><button>LEARN MORE</button></a><br>
    <br>
</article>

<footer>Copyright &copy; Gradlimited.com</footer>

</div>

</body>
</html>

