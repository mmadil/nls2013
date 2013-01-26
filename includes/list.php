<?php

error_reporting(0);
require('includes/connect.php');

?>

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
