

<!doctype html>
<html>
  <?php include("includes/head.php"); ?>
  


  <body>
    <form id="form1" action="book_request.php<?php echo '?arena='.$arena_name;?>" name="Book now" method="POST" autocomplete="off" align ="center" >
          <div id = "formBookNow" class= "widget" >

            <p>
              <label for="textfield">Name :</label>
              <input type="text" value = '' name="name" required = "required" id="name">
            </p>
              <label for="number" >Contact No :</label>
              <input type="integer" value = "" name="contact" id="contact">
              <p>
              <label for="day_of_play">Day of Play:</label>
              <select name="day_of_play" id="day_of_play">
                <option value = "today">TODAY</option>
                <option value = "tomorrow">TOMORROW</option>
                <option value = "next_day">MM/DD3 </option>
              </select>
              <br>
              
              <label for="textarea">Time Of Play:</label>
              <label for="Start">START:</label>
              <select name="playtime" id="playtime">
                <option value = "7-8 AM">7-8 AM </option>
                <option value = "8-9 AM">8-9 AM </option>
                <option value = "9-10 PM">9-10 AM </option>
                <option value = "10-11 PM">10-11 AM </option>
                <option value = "11-12 PM">11-12 PM </option>
                <option value = "12-1 PM">12-1 PM </option>
                <option value = "1-2 PM">1-2 PM </option>
                <option value = "2-3 PM">2-3 PM </option>
                <option value = "3-4 PM">3-4 PM </option>
                <option value = "4-5 PM">4-5 PM </option>
                <option value = "5-6 PM">5-6 PM </option>
                <option value = "6-7 PM">6-7 PM </option>
                <option value = "7-8 PM">7-8 PM </option>
              </select>
            </p>
            <p>
            
              <label for="textMOP">Mode of Payment :</label><br>
              <input type = "radio" name="mop" id="mop" required = "required"> Pay Now  
              <input type = "radio" name = "mop" value = "onsite" > cash on site 
            
            </p>
              <input type="submit" name="request_book" id="request_book" value="Request BOOK">
                
                
              <a href = "index.php"><input type= "button" name="go_home" id= "go_home" value="Return to Home"></a>
                
            </p>
          </div>
    </form>
  </body>
</html>