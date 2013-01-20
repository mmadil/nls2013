<?php

if($_POST['submit'])
{

 $card_no_ = $_POST['card_no'];
 $balance_ = $_POST['balance'];

 $connect = mysql_connect("localhost","root","") or die("Coudn't Connect!");
 mysql_select_db("nsl") or die("Coudn't find db");

 $query = mysql_query("INSERT INTO cash VALUES('','$card_no_','$balance_')");

 $balance_now = mysql_query("SELECT balance FROM cash WHERE card_no ='$card_no_'");
 
 echo "Card number $card_no_ has been credited with Rs. $balance_ and has Rs. $balance_now balance now.";

 echo "Click <a href='cashier.php'> here </a> to go back.";
}
?>

