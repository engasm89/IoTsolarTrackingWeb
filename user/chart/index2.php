<!DOCTYPE HTML><html>
   <head>
     <title>ESP Web Server</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
<meta content="text/html; charset=utf-8" http-equiv="content-type">
<meta name="viewport" content="width=device-width, intial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./chart/style.css">
     <style>

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
         <center>
     <div class="maindiv">


   </head>
   <div class="topnav">
     <h1>SOLAR MONITORING SYSTEM</h1>
   </div>


   <body>
	<form method="post">
			<select name="to_user1" class="form-control">
			<option value="pick">Select Device</option>
			
 			
	<?php
			
		include "config.php";

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
	

     $sql = "SELECT  logtime,current,voltage FROM sensorinfo  ORDER BY ID DESC LIMIT 1 ";
     $result = $con->query($sql);

     if ($result->num_rows > 0) {

       // output data of each row
       while($row = $result->fetch_assoc()) {
       //  $current= $row["current"];
         $data= $row["data"];
         $eventtime=$row["eventtime"];
          $eventdate=$row["eventdate"];
         // echo "meterId:- " . $row["meterId"]. "  reading:- " . $row["reading"]. " logtime:- " . $row["logTime"]. "<br><br>";

       }

     } else {
       echo "0 results";
     }
			}



     ?>


     <div id="cards">

     <figure class="card card--normal">
       <div class="card__image-container">
         <img src="image/sun.png" alt="Eevee" class="card__image">
       </div>

       <figcaption class="card__caption">
         <h1 class="card__name">CURRENT</h1>

         <h3 class="card__type">Current

         </h3>

         <table class="card__stats">
           <tbody><tr>
             <th>CURRENT</th>
             <td><?php echo $data  ?></td>

           </tr>
           <!-- <tr>
             <th>CURRENT</th>
             <td><?php echo $data  ?></td>

           </tr> -->
         </tbody></table>

         <div class="card__abilities">
           <h4 class="card__ability">
             <span class="card__label">Last Updated at</span>
             <?php echo $eventdate; ?>
            <?php echo "<br>";?>
            <?php echo $eventtime; ?>
           </h4>
           <h4 class="card__ability">
             <span class="card__label">Detail</span>
             <a href="graph.php">Graph</a>
           </h4>
         </div>
       </figcaption>
     </figure>

     </script>
     <!-- partial -->
       <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.11/handlebars.min.js'></script><script  src="./script.js"></script>


   </body>
 </div>
 </center>
   </html>
