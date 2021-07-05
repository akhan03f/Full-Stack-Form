<html>
<head>
  <link rel="stylesheet" type="text/css" href="phpStyle.css">
  <title>Stored Inputs</title>
</head>

<body>

<?php include 'include.htm';?>
<h1>Store Inputs</h1>
<h2>The data from the input page has been accepted and stored in the database.</h2>

<?php
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//Hide notices - Notice: Undefined variable: artist in C:\xampp\htdocs\users\akhan03\COSC630\Week 5 Database\storesongs.php on line 34

if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['address'])
 || empty($_POST['city']) || empty($_POST['state']) || empty($_POST['zip'])
 || empty($_POST['number']) || empty($_POST['color']) || empty($_POST['day']))
  print "You must enter all of the information.";

else {

  $DBConnect = mysql_connect("itec315.frostburg.edu","akhan03","pw");

    if ($DBConnect === false)
      print "Unable to connect to database. Error Number: ".mysql_errno();

    else {

      $DBname = "akhan03";
      mysql_select_db($DBname,$DBConnect);

      $TableName = "inputs_table";
      $fname = stripslashes($_POST['fname']);
      $lname = stripslashes($_POST['lname']);
      $address = stripslashes($_POST['address']);
      $city = stripslashes($_POST['city']);
      $state = stripslashes($_POST['state']);
      $zip = stripslashes($_POST['zip']);
      $color = stripslashes($_POST['color']);
      $day = stripslashes($_POST['day']);
      $number = stripslashes($_POST['number']);

      $SQLstring = "insert into $TableName(fname, lname, address, city, state, zip, color, day, number)
       value ('$fname', '$lname', '$address', '$city', '$state', '$zip', '$color', '$day', '$number')";
      $QueryResult = mysql_query($SQLstring,$DBConnect);

      if ($QueryResult===false)
        print "There is an error.";
      else {
        print "We can assume that the record has been added.";
      }
    }

    mysql_close($DBConnect);

  }

?>
</body>
</html>
