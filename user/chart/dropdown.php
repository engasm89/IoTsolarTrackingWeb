  <?php
  
  
		require "config.php";
	// $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
		 $con = mysqli_connect($host_name, $username, $password, $database);
	
		 if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
		     
		 }

    $sql = "SHOW TABLES FROM $database";
    $result = mysqli_query($con,$sql);
    	  echo "No of tables : ".$result->num_rows."<br>";

    if (!$result) {
        echo "DB Error, could not list tables\n";
        echo 'MySQL Error: ' . mysql_error();
        exit;
    }

    while ($row = mysqli_fetch_row($result)) {


   $tables ='<option value="{$row[0]}">{$row[0]}</option>';

    }

    mysqli_free_result($result);
    ?>