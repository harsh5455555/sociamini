<?php
namespace Core\Data
{
class MySQL
 {

/*change this line with your local settings*/
$host="localhost";
$username="root";
$password="";
/* End of change setting*/

//connect to database
function connectdb(){
mysqli_connect($host,$username,$password,$dbname)
  or die("Unable to connect to MySQL". mysqli_connect_error()); }


//creating a new DB for the socimini engine
function createdb(){
$sql="CREATE DATABASE sociamini";
if (mysqli_query($this->connectdb(),$sql)) {
  echo "Database socimini created successfully";
} else {
  echo "Error creating database: " . mysqli_error($con);
} }


}
}
?>