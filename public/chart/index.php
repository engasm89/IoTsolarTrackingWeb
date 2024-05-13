<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
    <style>
        .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  padding:20px;
border-radius: 5px;
float:center;
width:800px;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
   html {font-family: Arial; display: inline-block; text-align: center;}

      body {
     max-width: 900px; margin:0px auto; padding-bottom: 25px;
   }
       .topnav {
     overflow: hidden;
     background-color: #0A1128;
     width: 400px;

   }


     .content {
     padding: 5%;
   }
   h1 {
     font-size: 1.8rem;
     color: white;
   }

   .card-grid {
     max-width: 400px;
     margin: 0 auto;
     display: grid;

     grid-gap: 2rem;
     grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
   }

   .card {
     background-color: white;
   border-radius: 10px;
     box-shadow: 2px 2px 12px 1px rgba(140,140,140,.5);
   }
   .maindiv {
     background-color: white;
     margin-top: 20px;
     border-radius: 40px;
     width: 480px;
     box-shadow: 2px 2px 12px 1px rgba(140,140,140,.5);
   }

   .card-title {
     font-size: 1.2rem;
     font-weight: bold;
     color: #034078
   }

        </style>
<title>Loading....</title>
</head>
<body >
    <center>
        <div class="card">
            <button class="button button5" onclick="location.href='https://espmesh.000webhostapp.com/index2.php'" >BACK</button><br>
            <?php echo "<br>" ?>

	<form method="post">
			<select name="to_user1" class="form-control">
			<option value="pick">Select Device</option>
			
 			<?php
			
		require "config.php";
		 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
		 if ($conn->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

		if($stmtt = $connection->query("SHOW TABLES FROM id19340676_db")){
 $php_data_arrayy = Array();

  	while ($row = mysqli_fetch_array($stmtt)){
			     
			 
		     echo '<option value="'.$row[0].'">'.$row[0].'</option>'; 
		 $php_data_arrayy[] = $row;
			}

}
		?>
			</select>
			<input type="submit" />

		</form>
		<?php

			if (isset($_POST['to_user1'])) {
				$selectt = $_POST['to_user1'];
				echo "You Search for Device : $selectt";
				echo "<br>";
				
				
				if($stmt = $connection->query("SELECT COLUMN_NAME 
FROM INFORMATION_SCHEMA.COLUMNS 
WHERE 
    TABLE_SCHEMA = 'id19337666_db'
AND TABLE_NAME = '$selectt' ")){


  $output = array(); // create PHP array

while ($row = $stmt->fetch_array()) {

   $output[] = $row[0]; // Adding to array

  
   }
   
 $val= json_encode($output);
 $simplearr = json_decode($val);
$rttoneh=$simplearr[1];
$rtttwoh=$simplearr[2];


}else{
echo $connection->error;
}
			





if($stmt = $connection->query("SELECT logtime,$rttoneh,$rtttwoh FROM $selectt")){

  echo "No of records : ".$stmt->num_rows."";
$php_data_array = Array(); // create PHP array

while ($row = $stmt->fetch_row()) {
//   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
   $php_data_array[] = $row; // Adding to array
   }

}else{
echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 
// echo json_encode($php_data_array); 

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";
}?>


<div id="curve_chart"></div>
<br><br>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {packages: ['corechart']});
      google.charts.setOnLoadCallback(drawChart);
	  
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', '<?php echo $rttoneh?>');
		data.addColumn('number', '<?php echo $rtttwoh?>');
// 		data.addColumn('number', 'Exp_fixed');
// 		data.addColumn('number', 'Exp_var');
        for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
       var options = {
          title: '',
        curveType: 'function',
		width: 800,
        height: 500,
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
	///////////////////////////////
</script>
</div>
</center>
</body></html>







