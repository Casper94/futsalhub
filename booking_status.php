
  <?php
  require_once ("includes/core/functions/function.php");
  require_once ("includes/core/database/db.php");
  $arena_name = $_GET['arena'];
  //echo $arena_name;
  //$_SESSION['$arena_name'] = $arena_name;
 ?>

<!doctype html>
<html>

<?php
  include("includes/head.php");
?>


<?php include("includes/header2.php"); ?>

<body>

  <div class="container">
    <h2>Status Table</h2>
    <div class = "container" style="bgcolor : green">
      <h3 align="center"><?php echo getBookingData()->fetch_assoc()["_date"];?> </h3>
    </div>

    <table class="table" border="5" style="width: 80%" align="center">
      <thead>
        <tr>
          <th align="center">S.N</th>
          <th align="center">Playtime</th>
          <th align="center">Status</th>
          <th align="center">Name</th>
          <th align="center">Contact</th>
          <th align="center">Payment Status </th>
          
        </tr>
      </thead>
      <tbody>
      <?php
        $result = getBookingData();
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          ?>
          <tr>
          <td align="center"><?php echo $row["id"];?></td>
          <td align="center"><?php echo $row["playtime"];?></td>
          <td align="center"><?php echo $row["status"];?></td>
          <td align="center"><?php echo $row["name"];?></td>
          <td align="center"><?php echo $row["contact"];?></td>
          <td align="center"><?php echo $row["remarks"];?></td>
          <td></td>      
        </tr>
  <?php            
          }
      } else {
          echo "0 results";
      }
  ?>
        
      </tbody>
    </table>
    <button id = "book_now"><a href = "book_request.php?arena=<?php echo $arena_name ?>">Book now </a></button>

  </div>
    </body>
</html>
