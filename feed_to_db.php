<?php

error_reporting(0);
require('includes/connect.php')

?>


<?php

include('includes/header.php');

?>

<h2> Insert desired items in the database </h2>


<form action="feed_to_db.php" method="POST">
 
 Item Name : <input type="text" name="item_name" autocomplete="off"><p>
 Price : <input type="text" name="price" autocomplete="off"><p>
 <input type="submit" name="submit" value="Insert Data">
<?php 



?>

</form>

<div id="list">
 <?php
  $data = mysql_query("SELECT * FROM list ORDER BY item_name ASC");
  
  while($row = mysql_fetch_assoc("$data"))
   {

   $id = $row['id'];
   $item_name = $row['item_name'];
   $price = $row['price'];

   echo "TEST";

   }
 ?>
</div>



<?php

include('includes/footer.php');

?>
