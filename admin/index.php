<html>
<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<style>
  .header1 {
    width: 98%;
    margin: 5px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
  }

  body {
    font: 14px sans-serif;
    text-align: center;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;

    margin: auto;
  }

  table,
  th,
  td {
    border: 1px solid black;
  }

  .card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    padding: 20px;
    border-radius: 5px;
    float: center;
    width: 800px;

  }

  .cardd {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    width: 99%;
    padding: 0.5px;
  }

  .cardd:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 5);
  }

  .button {
    background-color: #4CAF50;
    /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
  }



  .button2 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
  }

  .button2:hover {
    background-color: #008CBA;
    color: white;
  }
</style>
<center>

  <body>
    <div class="header1">
      <h2><?php echo $_SESSION['username']; ?></h2>
    </div>
    <div class="card">
      <div class="cardd">
        <a href="crud/register.php">
          <button class="button button2">Register new User</button>
        </a>
        <a href="crud/view.php">
          <button class="button button2">Delete User</button>
        </a>
           <a href="crud/displayuser.php">
          <button class="button button2">View User</button>
        </a>
      </div><br><br>
      <div class="cardd">
        <a href="addform.php">
          <button class="button button2">Add Farm</button>
        </a>
        <a href="addpanel.php">
          <button class="button button2">Add Panel</button>
        </a>
        <a href="deleteform.php">
          <button class="button button2">Delete Farm</button>
        </a>
        <a href="deletepanel.php">
          <button class="button button2">Delete Panel</button>
        </a><br>
          <a href="displaypanel.php">
          <button class="button button2">View Panel</button>
        </a>
          <a href="displayform.php">
          <button class="button button2">View Farm</button>
        </a>
      </div><br><br>
      <div class="cardd">
        <a href="assignuser.php">
          <button class="button button2">Assign Farm to Users</button>
        </a>
        <a href="crud/viewfarm.php">
          <button class="button button2">Delete Farm to Users</button>
        </a>
        <a href="assignpanel.php">
          <button class="button button2">Assign Panel to Farm</button>
        </a>
        <a href="crud/viewpanel.php">
          <button class="button button2">Delete Panel to Users</button>
        </a>
      </div><br><br>

    </div><br>
    <a href="https://solar.teachmeanything.net/login.php">LOGOUT</a>
  </body>
</center>

</html>