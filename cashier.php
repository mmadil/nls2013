<?php

include('includes/header.php')

?>

<h2> Cashier </h2>

<div id="login">
 <form action="login.php" method="POST">
  <table>
   <tr> <td> User Name: </td><td><input type="text" name="username" autocomplete="off"> </td> </tr>
   <tr> <td> Password: </td><td><input type="password" name="passwd" autocomplete="off"> </td> </tr>
   <td> <input type="submit" name="submit" value="Log in"> </td>
  </table>
 </form>
</div>

<?php

include('includes/footer.php')

?> 
