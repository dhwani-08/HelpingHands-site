<?php
$n = $_POST['name'];
$e = $_POST['email'];
$p = $_POST['number'];
$a = $_POST['address'];
$c = $_POST['city'];
$s = $_POST['state'];
$link = mysqli_connect("127.0.0.1", "root", "", "form1");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$sql = "INSERT INTO t2 (name, number, email,  address, city, state) VALUES ('$n', '$p', '$e',  '$a', '$c', '$s')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
header("Location: index.html"); 
?>
