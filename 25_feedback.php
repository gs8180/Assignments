<html>
<head>
    <title>User Feedback</title>
</head>
<body>
    <h1>Feedback Form</h1>
    <form action=" " method="POST">
        Name:
        <input type="text" id="name" name="name" required><br><br>

        Email:
        <input type="email" id="email" name="email" required><br><br>

        Feedback:
        <textarea id="feedback" name="feedback" required></textarea><br><br>

        <input type="submit" name="sub" value="Submit">
    </form>
</body>
<?php
    include("connection.php");
    if(isset($_POST['sub']))
    {
    mysqli_select_db($conn,"mydb") or die("couldn't connect to DB");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedbacks=$_POST['feedback'];

    $result=mysqli_query($conn,"insert into feedback values('$name','$email','$feedbacks')");
    if($result===true)
    {
        echo "feedback submitted succesfully.";

    }
    else
    {
        echo "feedback not submittee.";
    }
}

?>

</html>
