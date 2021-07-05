<head>
  <link rel="stylesheet" type="text/css" href="phpStyle.css">
  <title>Order table by song name</title>
  <meta http-equiv="content-type" content="text/html; charset-iso-8859-1" />
</head>

<body>

<?php include 'include.htm';?>
<h1>Count of People Who Chose Friday</h1>

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
        //Use COUNT to count number of occurences

        $query = "SELECT COUNT(*) c FROM $TableName WHERE day= 'friday';";
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        echo "Total number of people who chose Friday as their favorite day: ", $row['c'];
      }
		mysql_close($DBConnect);
  }
?>

</body>
</html>
