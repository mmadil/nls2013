<?php
session_start();
include('includes/header.php');
if($_POST['submit'])
{

 $card_no_ = $_POST['card_no'];
 $balance_ = $_POST['balance'];

 $connect = mysql_connect("localhost","root","") or die("Coudn't Connect!");
 mysql_select_db("nsl") or die("Coudn't find db");

 $sql = "SELECT card_no FROM cash WHERE card_no=$card_no_";
 $ifex = mysql_query($sql);
 $row = mysql_fetch_assoc($ifex);


 if(isset($row['card_no']))
 { 
  $query = mysql_query("SELECT balance FROM cash WHERE card_no=$card_no_");
  $row = mysql_fetch_assoc($query);
   
  $oldbalance = $row['balance'];
  $balance = $oldbalance+$balance_;

  mysql_query("UPDATE cash SET balance=$balance WHERE card_no=$card_no_");
 
  echo "Card number <b> $card_no_ </b> has been credited with Rs. $balance_"."<br>";
  echo "It now has Rs. <b> $balance </b> balance now."."<br>";
  echo "Click <a href='cashier.php'> here </a> to go back.";

 }
 else
 {
  mysql_query("INSERT INTO cash VALUES('','$card_no_','$balance_')"); 
 
 echo "Card number $card_no_ has been created with Rs. $balance_"."<br>";
 echo "Click <a href='cashier.php'> here</a> to go back.";
 }
}
include('includes/footer.php');
?>
