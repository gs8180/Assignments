<html>
    <body>
        <form action="" method="POST">
        <input type="number" name="id" placeholder="Enter Id">
        <input type="submit" name="show" value="Show">
        <input type="submit" name="delete" value="delete">
        </form>
    </body>
</html>
<?php 
    include("connection.php");
    $id=$_POST['id'];
    mysqli_select_db($conn,"mydb") or die("Couldn't connect to database");
    if(isset($_POST['show']))
    {

        $result=mysqli_query($conn,"select * from employee where id='$id'");
        while($row=mysqli_fetch_assoc($result))
        {
            echo $row['id']." ".$row['name']." ".$row['designation']." ".$row['salary']."<br>";
        }
    }
    if(isset($_POST['delete']))
    {
        $result=mysqli_query($conn,"delete from employee where id='$id'");
        echo "$id is Deleted form DB.";
    }

?>