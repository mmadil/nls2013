<?php

include('includes/header.php');

?>

<h2> Login </h2>

<div id="login-cashier">

<h3>Cashier</h3>

<form action="cashier.php" method="POST">
 <table>
  <tr> <td> User Name: </td><td><input type="text" name="username" autocomplete="off"> </td> </tr>
  <tr> <td> Password: </td><td><input type="password" name="passwd" autocomplete="off"> </td> </tr>
  <tr>
   <td></td> <td><input type="submit" name="submit" value="Log in"> </td>
  </tr>
 </table>
</form>

</div>


<div id="login-stalls">

 <h3>Stalls</h3>

 <form action="stalls.php" method="POST">
  <table>
   <tr> <td> User Name: </td><td><input type="text" name="username" autocomplete="off"> </td> </tr>
   <tr> <td> Password: </td><td><input type="password" name="passwd" autocomplete="off"> </td> </tr>
   <tr>
   <td></td> <td><input type="submit" name="submit" value="Log in"> </td>
   </tr>
  </table>
 </form>

</div>


<?php

include('includes/footer.php')

?>

