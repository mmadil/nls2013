<?php

include('includes/header.php')

?>

<h2> Stalls </h2>

<?php

 $username = $_POST['username'];
 $passwd = $_POST['passwd'];

 if($username && $passwd)
 {

  $connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
  mysql_select_db("phplogin") or die("Couldn't find db");

 }
  else
   die("Please enter valid combination of username and password to continue!");

?>


<?php

include('includes/footer.php')

?>

