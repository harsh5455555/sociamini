<?php
/*
 * connection to the database is made from here
 *
 *@package sociamini
 *@subpackage Data
 *
 */
 
namespace Core\Data
{
class MySQL
 {

/*change this line with your local settings*/
$host="localhost";
$username="root";
$password="";
$dbname="sociamini"
/* End of change setting*/

//connect to database
function connectdb(){
mysqli_connect($host,$username,$password,$dbname)
  or die("Unable to connect to MySQL". mysqli_connect_error()); }

//creating a new DB for the socimini engine
/*
function createdb(){
$sql="CREATE DATABASE sociamini";
if (mysqli_query($this->connectdb(),$sql)) {
  echo "Database socimini created successfully";
} else {
  echo "Error creating database: " . mysqli_error($con);
} }
*/ //todo move this to install.php

function new_user($UID,$first,$second,$username,$DOB,$email,$password)
{
//Prevent SQL ejection attack
mysqli_real_escape_string($UID);
mysqli_real_escape_string($first);
mysqli_real_escape_string($second);
mysqli_real_escape_string($username);
mysqli_real_escape_string($DOB);
mysqli_real_escape_string($email);
mysqli_real_escape_string($password);

mysqli_query($this->connectdb(),"INSERT INTO User (UID,FirstName, LastName, Username, DOB, Email, Password)
VALUES ($UID, $first,$second,$username,$DOB,$email,$username)");
}

}
}
?>