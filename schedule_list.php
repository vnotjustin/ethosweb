<?php
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
        
        
            
                
                if (isset($_GET['del'])){
                     deleteEvent($_GET['del']);
                }
        
                  if (isset($_POST['EventType'])){
                     editEvent($_POST['EventType'], $_POST['Name'], $_POST['Date'], $_POST['Time'], $_POST['Description'], $_POST['SchedID']);
        }
            
            
           
    } else {
        header('Location: login.php');
    }
    
?>
    <?php require('modules/header.php'); ?>
        <?php require('modules/adminnav.php'); ?>
            <div class="row navpad container">
                <div class="col-lg-6 col-sm-12">
                    <h1>Courses to Edit<br> (Shows the latest 5 events per Column)</h1>
                    <?php
        $sql = "SELECT * FROM pm_ethos_schedule WHERE EventType = 0 ORDER BY SchedID DESC LIMIT 0, 15";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='schedule_edit.php?pid=".$row['SchedID']."'>".$row['Name']."</a> | <a style='color:red;' href='?del=".$row['SchedID']."'>(del)</a><br>";
            }
        } else {
            echo "Failed to load content.";
        }
    ?>
                </div>
                               
                <div class="col-lg-6 col-sm-12">
                    <h1>Events to Edit<br> (Shows the latest 5 events per Column)</h1>
                    <?php
        $sql = "SELECT * FROM pm_ethos_schedule WHERE EventType = 1 ORDER BY SchedID DESC LIMIT 0, 15";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='schedule_edit.php?pid=".$row['SchedID']."'>".$row['Name']."</a> | <a style='color:red;' href='?del=".$row['SchedID']."'>(del)</a><br>";
            }
        } else {
            echo "Failed to load content.";
        }
    ?>                                      
                       <br><br><br> <a href="schedule_insert.php" class="button rel">Add a Post</a> </div>
            </div>
            </body>

            </html>
            <?php $conn->close(); ?>