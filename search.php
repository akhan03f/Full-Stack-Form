<head>
  <link rel="stylesheet" type="text/css" href="phpStyle.css">
  <title>Order table by song name</title>
  <meta http-equiv="content-type" content="text/html; charset-iso-8859-1" />
</head>

<body>

<?php include 'include.htm';?>
<h1>Search Records by Last Name</h1>


<?php $lastn=$_POST["lastn"]; ?>
<?php
  $DBConnect = mysql_connect("itec315.frostburg.edu","akhan03","pw");

    if ($DBConnect === false)
      print "Unable to connect to database. Error Number: ".mysql_errno();

    else {

  		$DBname = "akhan03";

  		if (!@mysql_select_db($DBname,$DBConnect))
  			 print "No database found.";

  		else {
  			$TableName = "inputs_table";
        //Use to search a database
        $result = mysql_query("SELECT fname, lname, address, city, state, zip, color, day, number
           FROM inputs_table WHERE lname LIKE '%{$lastn}%'");
        if (!$result) {
            echo 'Could not run query: ' . mysql_error();
            exit;
          }

          print "<table width = '100%' border ='1'>";
          print "<tr><th>First Name</th><th>Last Name</th>
                <th>Address</th><th>City</th><th>State</th><th>Zip Code</th>
                <th>Favorite Color</th><th>Favorite Day</th><th>Favorite Number</th></tr>";

          $row = mysql_fetch_row($result);

          print"<tr><td>{$row[0]}</td>";
          print"<td>{$row[1]}</td>";
          print"<td>{$row[2]}</td>";
          print"<td>{$row[3]}</td>";
          print"<td>{$row[4]}</td>";
          print"<td>{$row[5]}</td>";
          print"<td>{$row[6]}</td>";
          print"<td>{$row[7]}</td>";
          print"<td>{$row[8]}</td></tr>";

		  }
		mysql_close($DBConnect);
  }
?>

</body>
</html>
