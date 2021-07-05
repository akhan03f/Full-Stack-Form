<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" type="text/css" href="phpstyle.css">
  <title>Show songs in the database</title>
  <meta http-equiv="content-type" content="text/html; charset-iso-8859-1" />
</head>

<body>

<?php include 'include.htm';?>
<h1>Show Records</h1>

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
  			$SQLString = "select * from $TableName";
  			$QueryResult = @mysql_query($SQLString, $DBConnect);

  			if (mysql_num_rows($QueryResult) ==0)
  				print "There are no entries in the database to show";

  			else {
  				print "Here is the list of inputs in the database<br>";
  				print "<table width ='100%' border='3px'>";
  				print "<tr><th>Count (PK)</th><th>First Name</th><th>Last Name</th>
                <th>Address</th><th>City</th><th>State</th><th>Zip Code</th>
                <th>Favorite Color</th><th>Favorite Day</th><th>Favorite Number</th></tr>";

  				while (($Row = mysql_fetch_assoc($QueryResult)) !== false) {

  					print"<tr><td>{$Row['Count']}</td>";
  					print"<td>{$Row['fname']}</td>";
  					print"<td>{$Row['lname']}</td>";
  					print"<td>{$Row['address']}</td>";
            print"<td>{$Row['city']}</td>";
            print"<td>{$Row['state']}</td>";
            print"<td>{$Row['zip']}</td>";
            print"<td>{$Row['color']}</td>";
            print"<td>{$Row['day']}</td>";
            print"<td>{$Row['number']}</td></tr>";
				  }

				print "</table>";

			   }
			mysql_free_result($QueryResult);
		  }
		mysql_close($DBConnect);
  }
?>

</body>
</html>
