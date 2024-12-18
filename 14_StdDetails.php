<html>
<center>
    <head><h3>Student Details</h3></head>
    <body>
        
        <form action="" method="post">
            <input type="text"   name="name" placeholder="Enter Name"><br>
            <input type="number" name="age" placeholder="Enter Age"><br>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female <br>
            Address: <br>
            <textarea name="add"></textarea><br>
            Course:
            <select name="course" >
                <option value="mca" >MCA</option>
                <option value="mba">MBA</option>
                <option value="bcs">BCS</option>
                <option value="bca">BCA</option>
                <option value="bba">BBA</option>
                <option value="bsc">BSC</option>
            </select><br>
            Hobbies: <br>
           <input type="checkbox"  name="hobb[]" value="Cricket">Cricket <br>
           <input type="checkbox" name="hobb[]" value="Reading book">Reading Book <br>
           <input type="checkbox" name="hobb[]" value="swiming">Swiming <br>
           <input type="submit" name="submit" value="Submit">

        </form>
    </body>
    <?php 
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $address=$_POST['add'];

        if (isset($_POST['course'])) 
        {
            $course = htmlspecialchars($_POST['course']);
        }
         else
          {
            $course = 'N/A';
        }
        
        if(isset($_POST['hobb']))
        {
            $hobbie=implode(",",$_POST['hobb']);
        }
        else
        {
            $hobbie="none";
        }
        if(isset($_POST['submit']))
        {
            echo "Name:-".$name."<br>";
            echo "Age:-".$age."<br>";
            echo "Gender:-".$gender."<br>";
            echo "Adress:-".$address."<br>";
            echo "course:-".$course."<br>";
            echo "Hobies:-".$hobbie."<br>";
        }
        
    ?>
    </center>
</html>


