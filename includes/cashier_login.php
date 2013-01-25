<div id="container">
<?php

session_start();

 $username = $_POST['username'];
 $passwd = $_POST['passwd'];

 if($username && $passwd)
 {

  $connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
  mysql_select_db("phplogin") or die("Couldn't find db");

  $query = mysql_query("SELECT * FROM cashier WHERE username='$username'");
  $numrows = mysql_num_rows($query);

  if($numrows!=0)
   {

     while ($row = mysql_fetch_assoc($query))
      {
        $dbusername = $row['username'];
        $dbpasswd = $row['passwd'];
      }

        if($username==$dbusername&&$passwd==$dbpasswd)
         {
	  $_SESSION['username']=$username;
	  echo "<p> Welcome ". $username . " !</p>";
           if($_SESSION['usename']=$username)
           { require('recharge.php'); }
           else
            die("You have to login first");
         }
        else
         echo "Incorrect password!";
   }

  else
   {
    die("Incorrect Username or Password!");
   }

 }
  else
   die("Please enter valid combination of username and password to continue!");

?>
</div>
