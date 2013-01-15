<?php

include('includes/header.php');

?>

<h2> Login </h2>

<div id="login">

<?php

echo '<form action="cashier.php" method="POST">';

echo '<table>';
echo '<tr> <td> User Name: </td><td><input type="text" name="username" autocomplete="off"> </td> </tr>';
echo '<tr> <td> Password: </td><td><input type="password" name="passwd" autocomplete="off"> </td> </tr>';
echo '<tr>'; 
echo '<td></td> <td><input type="submit" name="submit" value="Log in"> </td>';
echo '</tr>';
echo '<tr>';
echo '<td> Who are you? </td>';
echo '</tr>';
echo '<tr>';
echo '<td> Cashier <input type="checkbox" name="cashier"></td>';
echo '<td> Stall <input type="checkbox" name="stall"></td>';
echo '</tr>';
echo '</table>';
echo '</form>';

?>

</div>

<?php

include('includes/footer.php')

?>
