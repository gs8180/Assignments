
<html>
    <head><title>Retrive Data by city</title></head>
    <body>
        <h3>Retrive Data By City</h3>
        
    </body>
    <?php
        include("connection.php");
        mysqli_select_db($conn,"stu") or die("Couldn't Connect to DB");

        $result=mysqli_query($conn,"select * from student where address='aurangabad'");
        while($row=mysqli_fetch_assoc($result))
        {
             echo "<h4>".$row['name']." : ".$row['age']." : ".$row['gender']." : ".$row['course']." : ".$row['address']." : ".$row['hobbies']."</h4><br>";
        }
    
    ?>
</html>