<?php
session_start();
include('includes/header.php');
if($_POST['submit'])
{
 $card_no_ = $_POST['card_no'];
 $item_no_ = $_POST['item_no'];
 $quantity_ = $_POST['quantity'];

 $connect = mysql_connect("localhost","root","") or die("Couldn't Connect!");
 mysql_select_db("nsl") or die("Couldn't find db");

 $sql1 = "SELECT balance FROM cash WHERE card_no=$card_no_";
 $ifex1 = mysql_query($sql1);
 $row1 = mysql_fetch_assoc($ifex1);

 $sql2 = "SELECT price FROM list WHERE item_no=$item_no_";
 $ifex2 = mysql_query($sql2);
 $row2 = mysql_fetch_assoc($ifex2);

 if($row1['balance'] > 0)
 {
   if($row1['balance'] >= ($row2['price']*$quantity_))
    {
     $shop = $row2['price']*$quantity_;
     $balance = $row1['balance'] - $shop;
     mysql_query("UPDATE cash SET balance=$balance WHERE card_no=$card_no_");
     
     $sql3 = "SELECT stock FROM list WHERE item_no=$item_no_";
     $ifex3 = mysql_query($sql3);
     $row3 = mysql_fetch_assoc($ifex3);
     $stock = $row3['stock'];
     $stock_ = $stock-$quantity_;
     mysql_query("UPDATE list SET stock=$stock_ WHERE item_no=$item_no_");
  
     echo "You have shopped for Rs. $shop and you have Rs. $balance balance left"."<br>";
     echo "Click <a href='stalls.php'>here</a> to go back.";
    }
   else
    echo "Insufficient balance. You need a recharge.";
 }

 else
 {
 echo "Insuffficient balance. You need to recharge first!";
 }

}
include('includes/footer.php');
?>
