<!--Header-->

<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href='css/home2.css'>
   
     <title>Client's Appointments</title>
</head>
<body>

<div class="container">
    <h1 class="titl" >🤍Your Scheduled Appointments🤍</h1>
    
   
    <table class="table-home">
        <thead class="table2">
            <tr>
                <th class="t-box" scope="col">ID</th>
                <th class="t-box" scope="col">First name</th>
                <th class="t-box" scope="col">Last name</th>
                <th class="t-box" scope="col">Phone number</th>
                <th class="t-box" scope="col">Email</th>
                <th class="t-box" scope="col">Makeup Style</th>
                <th class="t-box" scope="col">Appointment Time</th>
                <th class="t-box" scope="col" colspan="3" class="text-center">CRUD operations</th>
</thread>
<tbody>
<tr>
    

    <?php
    $host = 'localhost';
    $username = 'root';
    $password = "";
    $database = 'makeupapp';
    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query = "SELECT * FROM appointments";

    $view_client = mysqli_query( $conn, $query );

    while($row  = mysqli_fetch_assoc($view_client)) {
        $id = $row['ID'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $pnum = $row['phonenumber'];
        $email = $row['email'];
        $mstyle = $row['makeupstyle'];
        $appoint = $row['appointment'];


        echo "<tr>";
        echo "<th scope='row'> {$id}</th> ";
        echo "<td> {$fname} </td> ";
        echo "<td> {$lname} </td> ";
        echo "<td> {$pnum} </td> ";
        echo "<td> {$email} </td> ";
        echo "<td> {$mstyle} </td> ";
        echo "<td> {$appoint} </td> ";

        echo "<td class'crud'> <a href='view.php?client_id={$id}' class='crud'> <i class='crud'> </i> View</a> </td>";
        echo "<td class'crud'> <a href='update.php?client_id={$id}' class='crud'> <i class='crud'> </i> Edit</a> </td>";
        echo "<td class'crud'> <a href='delete.php?delete={$id}' class='crud'> <i class='crud'> </i> Delete</a> </td>";
        echo "</tr>";
    

    }
    ?>
    </tr>
</tbody>
</table>
<div class="home-button">
<a href="create.php" class='sbutton'>Schedule your appointment</a>
</div>
</div>
</body>
</html>

<!-- a back button to go to the index page -->
<div class="">
    <a href="index.php" class="btn btn-warning mt-5">  Back </a>
    <div>

