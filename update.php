<!-- Footer -->
<?php include "header.php"?>

<?php

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['client_id']))
    {
      $clientid = $_GET['client_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM appointments WHERE ID = $clientid";
      $view_client = mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_client))
        {
          $id = $row['ID'];
          $fname = $row['firstname'];
          $lname = $row['lastname'];
          $pnum = $row['phonenumber'];
          $email = $row['email'];
          $mstyle = $row['makeupstyle'];
          $appoint = $row['appointment'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $pnum = $_POST['phonenumber'];
        $email = $_POST['email'];
        $mstyle = $_POST['makeupstyle'];
        $appoint = $_POST['appointment'];
    
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE appointments SET firstname = '{$fname}' , lastname = '{$lname}' , phonenumber = '{$pnum}', email = '{$email}',
       makeupstyle = '{$mstyle}', appointment = '{$appoint}' WHERE ID = $clientid";
      $update_client = mysqli_query($conn,$query);
      echo "<script type='text/javascript'>alert('New Client data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Client booking</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="firstname" >First Name</label>
        <input type="text" name="firstname" class="form-control" value="<?php echo $fname  ?>">
      </div>

      <div class="form-group">
        <label for="lastname" >Last Name</label>
        <input type="text" name="lastname"  class="form-control" value="<?php echo $lname  ?>">
      </div>
      <div class="form-group">
        <label for="phonenumber" >Phone number</label>
        <input type="text" name="phonenumber"  class="form-control" value="<?php echo $pnum  ?>">
      </div>
        
    
      <div class="form-group">
        <label for="email" >Email</label>
        <input type="email" name="email"  class="form-control" value="<?php echo $email  ?>">
      </div>  
      <div class="form-group">
        <label for="makeupstyle" >Makeup style</label>
        <input type="text" name="makeupstyle"  class="makeupstyle" form-control" value="<?php echo $mstyle  ?>">
      </div>
        
      <div class="form-group">
        <label for="appointment" >Appointment Time</label>
        <input type="text" name="appointment"  class="form-control" value="<?php echo $appoint  ?>">
      </div>
        

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>
        <!--Footer-->
<?php include "footer.php"?>
