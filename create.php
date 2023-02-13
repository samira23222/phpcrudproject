<!--Header-->
<?php include "header.php" ?>

<?php 
$host = 'localhost';
$username = 'root';
$password = "";
$database = 'makeupapp';
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['create'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $pnum = $_POST['phonenumber'];
    $email = $_POST['email'];
    $mstyle = $_POST['makeupstyle'];
    $appoint = $_POST['appointment'];

    

    //sql query to insert user data into the users table
    $query = "INSERT INTO appointments(Firstname, Lastname, Phonenumber, Email, MakeupStyle, Appointment) VALUES('{$fname}', '{$lname}', '{$pnum}', '{$email}',
    '{$mstyle}','{$appoint}')";
    $add_client = mysqli_query($conn, $query);

    if (!$add_client) {
        echo "something went wrong " . mysqli_error($conn);
    }

    else { echo "<script type='text/javascript'>alert('Your appointment was added successfuly!')</script>";
    }
    
}
?>

<h1 class="text-center">Schedule an appointment</h1>
<div class="create-container">
    <form action="" method="post">
        <div class="first">
            <label for="firstname" class="fname"> First name </label>
            <input type="text" name="firstname" class="input1">
</div>

<div class="second">
            <label for="lastname" class="lname"> Last name </label>
            <input type="text" name="lastname" class="input2">
</div>

<div class="third">
            <label for="pnum" class="pnum"> Phone number </label>
            <input type="number" name="phonenumber"  class="input3">
</div>
<div class="fourth">
            <label for="email" class="email"> Email </label>
            <input type="email" name="email"  class="input4">
</div>
<div class="fifth">
            <label for="mstyle" class="mstyle"> Makeup Style </label>
            <input type="text" name="makeupstyle"  class="input5">
</div>
<div class="sixth">
            <label for="appoint" class="appoint"> Appointment Time </label>
            <input type="text" name="appointment"  class="input6">
</div>

<div class="submitform">
           
            <input type="submit" name="create" class="submit2" value="submit">
</div>
</form>
</div>

<!--back button to goto homepage-->

<div class="container text-center mt-5">
<a href="home.php" class="btn btn-warning mt-5"> Back </a>
</div>
<!--Footer-->
<?php include "footer.php"?>


