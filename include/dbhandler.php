<?php


$conn = mysqli_connect("localhost","root", "", "sajttc");

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
}