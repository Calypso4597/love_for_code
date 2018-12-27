<?php
    session_start();
    if (isset($_GET["logout"]) && $_GET["logout"] == 1) {
        session_destroy();
        header("Location: login.php");
    }
?>

<html>
<head>
<style>
div.container {
    width: 100%;
}

footer {
    padding: 1em 0;
                background-color: #000000;
    text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 1em;
                color: #ffffff;
            }
ul li{
  display:inline;
  padding:0px;
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
    width: 75%;
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
    padding: 12px 7px;
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
Category:<input list="internship" name="internship" id="intern">
<datalist id="internship">
<option value="Marketing"></option>
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
        console.log(val);
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
  <h1>Law</h1>
  <ol>
  <li>Law/ Legal<br>
      UpGrad<br>
      Location(s): Mumbai<br>
      <br>
      <table>
      <tr>
      <th>Start Date</th>	<th>Duration</th>	<th>Stipend</th>	<th>Posted On</th>	<th>Apply By</th>
      </tr>
      <tr>
      <td>Immediately</td> <td>3 Months</td>	<td>5000 /Month</td>	<td>29 Sep'17</td>	<td>5 Oct'17</td>
      </tr>
      </table>
     <a href="p51.html"><button>LEARN MORE</button></a><br>
     <br>
<li>Law/ Legal<br>
    Aditya Pratap & Associates<br>
    Location(s): Pune, Mumbai<br>
    <br>
    <table>
    <tr>    
    <th>Start Date</th>	<th>Duration</th>	<th>Stipend</th>	<th>Posted On</th>	<th>Apply By</th>
    </tr>
    <tr>
    <td>1 Nov - 30 Nov'17</td> <td>1 Month</td>	<td>2000 /Month</td>	<td>29 Sep'17</td>	<td>13 Oct'17</td>
    </tr>
    </table>
    <a href="p52.html"><button>LEARN MORE</button></a><br>
    <br>
<li>Law/ Legal<br>
    Choice International Limited<br>
    Location(s): Mumbai<br>
    <br>
    <table>
    <tr>    
    <th>Start Date</th>	<th>Duration</th>	<th>Stipend</th>	<th>Posted On</th>	<th>Apply By</th>
    </tr>
    <tr>
    <td>1 Nov - 30 Nov'17</td> <td>1 Month</td>	<td>2000 /Month</td>	<td>29 Sep'17</td>	<td>13 Oct'17</td>
    </tr>
    <td>Immediately</td> <td>6 Months</td>	<td>6000 /Month</td>	<td>28 Sep'17</td>	<td>11 Oct'17</td>
    </tr>
    </table>
    <button>LEARN MORE</button><br>
    <br>
    </ol>
</article>

<footer>Copyright &copy; Gradlimited.com</footer>

</div>

</body>
</html>