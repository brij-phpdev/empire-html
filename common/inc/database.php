<?php

error_reporting(E_ALL);
$hostname = 'localhost';
$username = 'u397536656_salon_book_usr';
$password = '8}_!.)%%A$tnh65@20232209';
$database = 'u397536656_salon_booking';


$link = mysqli_connect($hostname, $username, $password, $database); 
  
if ($link === false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
} 
  
$sql = "SELECT * FROM `agents`";
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Firstname</th>"; 
        echo "<th>Lastname</th>"; 
        echo "<th>age</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['agentName']."</td>"; 
//            echo "<td>".$row['Lastname']."</td>"; 
            echo "<td>".$row['Age']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
        mysqli_free_result($res); 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
die;

// Create connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM `agents`";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


echo $sql;die;
if (mysqli_query($conn, $sql)) {
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    die;
}
var_dump($result);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      print_r($row);
  }
} else {
  echo "0 results";
}
$conn->close();