<?php 
 $host="localhost";
 $user="root";
 $pass="";
 $db="itpec";
 $con=new mysqli($host,$user,$pass,$db);
 if($con->connect_error){
     die("Connection failed:".$con->connect_error);
 }
//  echo "connected successfully";

$username=$_POST['uname'];
$password=$_POST['psw'];
// echo $username." ".$password;

$sql="select id from admin where name='$username' and password='$password';";
$result=$con->query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row){
    echo "correct password.";
    header("location:insert.php");

}
else{

    header("location:index.html");
}
    
?>
