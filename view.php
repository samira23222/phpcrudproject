<!--header-->
<?php include 'header.php'?>

<h1 class="text-center">Client's appointments</h1>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>

            <th scope="col">ID</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Phone number</th>
            <th scope="col">Email</th>
            <th scope="col">Makeup Style</th>
            <th scope="col">Appointment</th>

</tr>
</thead>
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

    if (isset($_GET['client_id'])) {
        $client_id = $_GET['client_id'];

        $query= "SELECT * FROM appointments WHERE ID = {$client_id} ";
        $view_client = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($view_client))
        {
            $id = $row['ID'];
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $pnum = $row['phonenumber'];
            $email = $row['email'];
            $mstyle = $row['makeupstyle'];
            $appoint = $row['appointment'];

    
            echo "<tr >";
            echo " <th> {$id}</th>";
            echo "<td > {$fname}</td>";
            echo "<td > {$lname}</td>";
            echo "<td > {$pnum} </td>";
            echo "<td > {$email} </td>";
            echo "<td > {$mstyle} </td>";
            echo "<td > {$appoint} </td>";
            echo "</tr> ";
    
        
        }
    }
    ?>
    <!--Back button -->
    <div class="container text-center mt-5">
<a href="home.php" class="btn btn-warning mt-5"> Back </a>
</div>

