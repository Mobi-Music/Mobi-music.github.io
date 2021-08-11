<?php


if($_POST["message"]) {


mail(
  "mobimusicofficial2021@gmail.com", "Webpage Message", $_POST["message"]. "From: " $_POST["name"] " at " $_POST["email"]);
}
header("Location: index.html");
?>&nbsp; 
