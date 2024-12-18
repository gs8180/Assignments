<html>
    <head><title>Name And Salary Assending Order</title></head>
    <body>
        <h4>Name and Salary by Assending Order</h4>
    </body>
</html>

<?php 
    include("connection.php");

    mysqli_select_db($conn,"mydb");
    $result=mysqli_query($conn,"select * from employee order by name ASC");
    while($row=mysqli_fetch_assoc($result))
    {
        echo $row['name']." :".$row['salary']."<br>";
    }

?>
