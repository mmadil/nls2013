<?php

error_reporting(0);
require('includes/connect.php');

?>


<?php

include('includes/header.php');

?>

<?php
 if($_POST['submit'])
 {
  $item_no_ = $_POST['item_no'];
  $item_name_ = $_POST['item_name'];
  $price_ = $_POST['price'];
  $stock_ = $_POST['stock'];

  mysql_query("INSERT INTO list VALUES ('','$item_no_','$item_name_','$price_','$stock_')") or die(mysql_error());
 }

?>

<h2> Insert desired items in the database </h2>


<form action="feed_to_db.php" method="POST">
 <table>
 <td>
  Item Number : <input type="text" name="item_no" autocomplete="off">
 </td>
 <td>
  Item Name : <input type="text" name="item_name" autocomplete="off">
 </td>
 <td>
  Price : <input type="text" name="price" autocomplete="off">
 </td>
 <td> 
  In Stock : <input type="text" name="stock" autocomplete="off">
 </td>
 <td>
  <input type="submit" name="submit" value="Insert Data">
 </td>
 </table>
</form>

<div id="data">

 <ul>
  <?php
  
  $extract = mysql_query("SELECT * FROM list ORDER BY item_no  ASC") or die(mysql_error());
  $numrows = mysql_num_rows($extract);

  echo "<br />";
  echo "<table>
    <td>Item Number</td>
    <td>Items</td>
    <td>Price</td>
    <td>Stock</td>";
  while ($row = mysql_fetch_assoc($extract))	
   {
        $item_no   = $row['item_no'];
	$item_name = $row['item_name'];
	$price     = $row['price'];
	$stock     = $row['stock'];

  echo "
    <tr>
    <td>$item_no</td>
    <td>$item_name</td>
    <td>$price</td>
    <td>$stock</td>
    </tr>
    ";

   }
  echo "</table>";

 ?>
</ul>

</div>

<?php

include('includes/footer.php');

?>
