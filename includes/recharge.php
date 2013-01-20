<?php

require('includes/connect.php');

?>


<table>
<div id='recharge'>
 <form action='r.php' method='POST'>
 <tr><td>Card Number : <input type='text' name='card_no'><br /></td></tr>
 <tr><td>Add balance : <input type='text' name='balance'><br /></td></tr>
 <tr><td><input type="submit" name='submit' value="Credit Value"></td></tr>
 </form> 
</div> 
</table>

