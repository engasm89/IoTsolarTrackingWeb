<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* #customers tr:hover {
        background-color: #ddd;
      } */

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #008CBA;
        ;
        color: white;
        font-size: 20px;
        font-style: bold;
        width: 10%;
    }

    #customers td {
        font-size: 15px;
        font-style: bold;
        text-align: center;

    }
</style>
<?php
require_once("connection.php");
$query = " select * from user ";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css" />
    <title>View Records</title>
</head>

<body>

    <a href="https://solar.teachmeanything.net/admin/index.php">
        <center> <button> HOME</button>
    </a> </center><br><br>

    <table id="customers">
        <thead>
            <th>ID</th>
            <th>User Name</th>


        </thead>

        <?php




        while ($row = mysqli_fetch_assoc($result)) {
            $UserID = $row['id'];
            $UserName = $row['username'];


        ?>
            <tbody>
                <tr>
                    <td><?php echo $UserID ?></td>
                    <td><?php echo $UserName ?></td>



                </tr>
            </tbody>
        <?php
        }
        ?>


    </table>

    </center>
</body>

</html>