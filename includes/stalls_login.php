<div id="login-failed">
<?php

 $username = $_POST['username'];
 $passwd = $_POST['passwd'];

 if($username && $passwd)
 {

  $connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
  mysql_select_db("phplogin") or die("Couldn't find db");

  $query = mysql_query("SELECT * FROM stalls WHERE username='$username'");
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
          echo "You're in!";
         }
        else
         echo "Incorrect password!";
   }

  else
   {
    die("User does not exist!");
   }

 }
  else
   die("Please enter valid combination of username and password to continue!");

?>
</div>
