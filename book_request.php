<?php
    require_once('includes/core/functions/function.php');
    require_once ('booking_status.php');

      if (checkPlaytime() == true) {

        if ($_SERVER ["REQUEST_METHOD"]== "POST"){
            //echo "request send";
            $name = $_POST["name"];
            $playtime = $_POST["playtime"];
            $contact = $_POST["contact"];
            $status = "Booked";
            $modeOfPayment = $_POST["mop"];
            if ($modeOfPayment == 'now'){
               $remarks = 'Already Paid';
            } else {
              $remarks = 'Payment on site';
            }
            if ($name != null && $contact != null){

              if(checkPlaytime()==1);{

                echo $arena_name;
                echo $name;
                echo $playtime;
                echo $contact;
                //$data = array($name, $start_time, $contact)
                // Create connection
                global $connection, $arena_name;
                $query = "INSERT INTO booking_status ";
                $query .= "(name, contact, playtime, status, arena_name, remarks)";
                $query .= " VALUES (?, ?, ?, ?, ?,?)";

                confirm_query($query);
                /* create a prepared statement */
                if ($stmt = $connection->prepare($query)) {
                    //global $name, $contact, $status, $playtime;
                    /* bind parameters for markers */
                    $stmt->bind_param("ssssss", $name, $contact, $playtime, $status, $arena_name, $remarks);
                     
                    /* execute query */
                    if($stmt->execute()){
                        echo "successfully executed";
                    } 
                    else {
                        echo "Failed to execute" .$connection->error;
                    }
                } 
              }
               
            }
            else {
              ?>

                <h3 align = "center"> *Please Enter the Name and Contact Number</h3>

              <?php 

            }
          } 
        
      } else {
        ?>

                <h3 align = "center"> The selected time period for play is not available. Please select another available Playtime. </h3>

              <?php 
      }
?>
<?php
  require_once("includes/core/functions/users.php");
  if (logged_in()== true){
        include("form.php");
      }
      else {
  ?>
        <h1> You are not logged in. <br>
        Please log in first to request the reservation. </h1>
  <?php
      }
  
?>
    
