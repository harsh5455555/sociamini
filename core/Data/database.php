<?php
namespace Core\Data
{
class MySQL
{
$host="localhost";
$username="root";
$password="";
$dbname="testdb";
function connectdb(){
mysqli_connect($host,$username,$password,$dbname)
  or die("Unable to connect to MySQL");
}
}
}
?>