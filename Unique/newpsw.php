<<?php
$_SESSION["admin_id"] = "1";
include("connection.php");
if(count($_POST)>0) {
$result = mysql_query("SELECT * from `admin` WHERE admin_id='" . $_SESSION["admin_id"] . "'");
$row=mysql_fetch_array($result);
if($_POST["password"] == $row["password"]) {
mysql_query("UPDATE `admin` set password='" . $_POST["npassword"] . "' WHERE admin_id='" . $_SESSION["admin_id"] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>
