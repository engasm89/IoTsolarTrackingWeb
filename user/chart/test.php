<?php 

include_once 'dropdown.php'; 

?> 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<select name="Tables" id="ddTables">
<?php 

echo $tables;

?>
     </select>
     <input type="submit" id="tableSubmit" value="Submit"/>
     </form>