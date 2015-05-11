
<html>
<head>
<title>IS218 Project 2</title>
<!--<link rel="stylesheet" href="css/main.css">-->
</head>
<body>
<h2>IS218 Project 2</h2>

<?php
error_reporting(-1);
ini_set('display_errors', 'On');


$db = new PDO('mysql:host=localhost;dbname=employees;charset=utf8',
   'root',
   'wildfoot',
   array(
      PDO::ATTR_EMULATE_PREPARES => false,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
   )
);

include 'pages.php';
if(isset($_GET['page'])){
  $qry = new $_GET['page'];
  } else{
  echo '<a href="?page=sql1">1. Colleges with the highest percentage of women
  students</a>';
  echo "</br></br>";
  echo '<a href="?page=sql2">2. Colleges with the highest percentage of male
  students</a>';
  echo "</br></br>";
  echo '<a href="?page=sql3">3. Colleges with the largest endowment overall</a>';
  echo "</br></br>";
  echo '<a href="?page=sql4">4. Colleges with the largest enrollment of
  freshman</a>';
  echo "</br></br>";
  echo '<a href="?page=sql5">5. Colleges with the highest revenue from tuition</a>';
  echo "</br></br>";
  echo '<a href="?page=sql6">6. Colleges with the lowest non zero tuition
  revenue</a>';
  echo "</br></br>";
  echo '7. The top 10 colleges by region for the following
  statistics:';
  echo '<ol><li><a href="?page=sql7">Endowment</a></li>
            <li><a href="?page=sql8">Total Current Assests</a></li>
	    <li><a href="?page=sql9">Total current liabilities</a></li>
	    <li><a href="?page=sql10">Lowest non-zero tuition</a></li>
	    <li><a href="?page=sql11">Highest Tuition</a></li></ol>';
  echo "</br></br>";
}
