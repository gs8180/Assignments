
<html>

<body>
    <form action="" method="POST">
        <h2>Insert Student Details and Update Particular</h2>
        Id:
        <input type="number" name="id" placeholder="Enter id"><br>
        Name:
        <input type="text" name="name" placeholder="Enter Name"><br>
        Age:
        <input type="text" name="age" placeholder="Enter Age"><br>

        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female <br>
        Address: <br>
        <textarea name="address" id=""></textarea><br>
        Course:
        <select name="course">
            <option value="MCA">MCA</option>
            <option value="BCA">BCA</option>
            <option value="BCOM">BCOM</option>
            <option value="MBA">MBA</option>
        </select><br>
        Hobbies: <br>
        <input type="checkbox" name="hobbies[]" value="playing Games">Playing Games <br>
        <input type="checkbox" name="hobbies[]" value="Reading">Reading <br>
        <input type="checkbox" name="hobbies[]" value="Coding">Coding <br><br>

        <input type="submit" name="submit" value="Submit">
        <input type="submit" name="update" value="Update"><br><br>
    </form>
</body>

<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    if (isset($_POST['course'])) 
    {
        $course =($_POST['course']);
    }
     else
      {
        $course = 'N/A';
    }
    
    if(isset($_POST['hobbies']))
    {
        $hobbies=implode(",",$_POST['hobbies']);
    }
    else
    {
        $hobbies="none";
    }


    mysqli_select_db($conn, 'stu') or die("Couldn't connect to database");

    $result = mysqli_query($conn, "INSERT INTO student VALUES('$id', '$name', '$age', '$gender', '$address', '$course', '$hobbies')");

    if ($result) {
        echo "Record inserted successfully";
    } else {
        echo "Record not inserted";
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    if (isset($_POST['course'])) 
    {
        $course =($_POST['course']);
    }
     else
      {
        $course = 'N/A';
    }
    
    if(isset($_POST['hobbies']))
    {
        $hobbies=implode(",",$_POST['hobbies']);
    }
    else
    {
        $hobbies="none";
    }


    mysqli_select_db($conn, 'stu') or die("Couldn't connect to database");

    $result = mysqli_query($conn, "UPDATE student SET name='$name', age='$age', gender='$gender', address='$address', course='$course', hobbies='$hobbies' WHERE id='$id'");

    if (mysqli_affected_rows($conn) > 0) {
        echo "Record updated successfully";
    } else {
        echo "No record found to update.";
    }
}
?>
</html>
