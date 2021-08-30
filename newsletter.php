<?php


if($_POST["message"]) {


mail(
  "mobimusicofficial2021@gmail.com", "Newsletter Subscription", $_POST["email"]);
}
header("Location: index.html");
?>&nbsp; 
