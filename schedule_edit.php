<?php 
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
    } else {
        header('Location: login.php');
    }

?>
<?php require('modules/header.php'); ?>
<?php require('modules/adminnav.php'); ?>
  
 <div class="row navpad">
   <div class="col-lg-3"></div>
    <div class="col-lg-6 form-group">
        <form action="schedule_list.php" method="post">
          <?php
            if (isset($_GET['pid'])) { 
                $SchedID = $_GET['pid'];

            } else { 
                echo "No record set";
            }
            $sql = "SELECT * FROM pm_ethos_schedule WHERE SchedID=$SchedID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
                   
           <input type="hidden" name="SchedID" value="<?php echo $row['SchedID'];?>" >        
                
           <label for="EventType">Event Type</label>
           <select name="EventType" id="EventType" class="form-control" required>
                                <option selected="">Select Event Type</option>
                                <option value="0">Course</option>
                                <option value="1">Event</option>
                            </select>
           
           <label for="Name">Event Name</label>
           <input name="Name" type="text" class="form-control" id="Name" value="<?php echo $row['Name'];?>"/>
           
           <label for="Date">Date</label>
           <input name="Date" class="form-control" id="Date" type="date" value="<?php echo $row['Date'];?>" required>
           
           <label for="Time">Time</label>
           <input name="Time" class="form-control" id="Time" type="time" value="<?php echo $row['Time'];?>" required>
            
           <label for="Description">Short Description</label>
           <textarea name="Description" class="form-control" id="Description" cols="30" rows="10" required><?php echo $row['Description'];?></textarea>
           
           
           <input type="submit"> <input type="reset">
           <?php }
            } else {
                echo "Failed to load content.";
            }
           ?>
        </form>
    </div>
    <div class="col-lg-3"></div>
</div>

</body>
</html>
<?php $conn->close(); ?>