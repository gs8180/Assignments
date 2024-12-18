<?php 
include("connection.php");
mysqli_select_db($conn, "mydb") or die("Couldn't connect to DB");

$result = mysqli_query($conn, "SELECT * FROM employee WHERE salary < 20000");

if (mysqli_num_rows($result) > 0) 
{
    echo "<h3>Deleted Record.</h3>";
    
    while ($row = mysqli_fetch_assoc($result))
    {
        echo  $row['id']." ";
        echo $row['name']." ";
        echo $row['salary']." ";    
    }
    
} 
else
{
    echo "No records found with salary < 20000.<br>";
}


$deleteResult = mysqli_query($conn, "DELETE FROM employee WHERE salary < 20000");

if ($deleteResult)
 {
    echo "Records deleted successfully.<br>";
   
} else {
    echo "Error deleting records: " . mysqli_error($conn);
}
?>
