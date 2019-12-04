<?php 
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
        if (isset($_POST['EventType'])){
            addEvent($_POST['EventType'], $_POST['Name'], $_POST['Date'], $_POST['Time'], $_POST['Description']);
        }
    } else {
        header('Location: login.php');
    }
?>
  <?php require('modules/header.php'); ?>
  <?php require('modules/adminnav.php'); ?>
  
  <div class="row navpad">
   <div class="col-lg-3"></div>
    <div class="col-lg-6 form-group">
        <form action="schedule_insert.php" method="post">
           <label for="EventType">Event Type</label>
           <select name="EventType" id="EventType" class="form-control" required>
                                <option value="0" selected="">Course</option>
                                <option value="1">Event</option>
                            </select>
           
           <label for="name">Event Name</label>
           <input name="Name" type="text" class="form-control" id="Name" placeholder="Enter name" required/>
           
           <label for="Date">Date</label>
           <input name="Date" class="form-control" id="Date" type="date" required>
           
           <label for="Time">Time</label>
           <input name="Time" class="form-control" id="Time" type="time" required>
            
           <label for="Description">Short Description</label>
           <textarea name="Description" class="form-control" id="Description" cols="30" rows="10" required></textarea>
           
           
           <input type="submit"> <input type="reset">
        </form>
    </div>
       <div class="col-lg-3"></div>
</div> 
</body>
</html>
<?php $conn->close(); ?>