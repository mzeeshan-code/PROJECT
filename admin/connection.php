<?php
session_start();
//lets make a connection with Addtocart database

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "products";

$conn = new mysqli($servername,$username,$password,$db_name);
