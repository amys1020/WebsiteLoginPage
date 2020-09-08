<?php
$host1 = "127.0.0.1:3307";
$username1 = "root";
$password1 = "";
$dbname1 = "login_credentials";

$conn = mysqli_connect($host1, $username1, $password1, $dbname1);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$username="";
$password="";


if (isset($_POST['submit_btn'])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result)== 1){
    header("Location: https://www.wikipedia.org/");
  }else{
    header("Location: login_1.php?login=error");
    }
}
?>
