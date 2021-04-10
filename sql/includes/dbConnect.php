<?php

require "dbConfig.php";
  
// Connect Helper
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);//

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}
else {
$output = '';
 $result = mysqli_query($conn, "SELECT photo_name, photo_url FROM photoOfTheDays ORDER BY RAND() LIMIT 3;");
 while($row = mysqli_fetch_array($result))
 {
  $output .= '<img src="'.$row["photo_url"].'" alt="'.$row["photo_name"].'" />';
 }
 return $output;
}

?>