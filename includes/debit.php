<div id='debit'>
<table>
 <form action='d.php' method='POST'>
 <tr><td>Card Number : <input type='text' name='card_no' autocomplete="off"></td></tr>
 <tr><td>Item No : <input type='text' name='item_no' autocomplete="off"></td></tr>
 <tr><td>Quantity : <input type='text' name='quantity' autocomplete="off"></td></tr>
 <tr><td><input type="submit" name='submit' value="Sell Item"></td></tr>
 </form>
</table>
</div>

<div id="list">
<?php
require('list.php');
?>
</div>
