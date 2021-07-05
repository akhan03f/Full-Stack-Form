<html>
<head>
  <link rel="stylesheet" type="text/css" href="phpstyle.css">
  <title>Delete names from the database</title>
  <meta http-equiv="content-type" content="text/html; charset-iso-8859-1" />
</head>

<body>

<?php include 'include.htm';?>
<h1>Delete Record</h1>
<h2>Select record ID to delete: </h2>

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
  				print "Here is the list of songs in your database<br>";
  				print "<table width = '100%' border ='1'>";
          print "<tr><th>Count (PK)</th><th>First Name</th><th>Last Name</th>
                <th>Address</th><th>City</th><th>State</th><th>Zip Code</th>
                <th>Favorite Color</th><th>Favorite Day</th><th>Favorite Number</th></tr>";


  				while (($Row = mysql_fetch_assoc($QueryResult)) !== false) {

            print"<tr><td>>{$Row['Count']}</td>";
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



<form method="POST" action="gone.php">

  <p>Record to Delete: <input type="text" style = "width: 4px" name="record" /></p>
  <p><input type="submit" value="Submit" /></p>

</form>



</body>
</html>
