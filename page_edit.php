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
        <form action="page_list.php" method="post">
          <?php
            if (isset($_GET['pid'])) { 
                $ContentID = $_GET['pid'];

            } else { 
                echo "No record set";
            }
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
                    
                
           <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >
          
            <input type="hidden" name="Type" value="<?php echo $row['Type'];?>" >
          
          <label for="Type">FOR: <?php echo $row['Type'];?></label><br><hr>
          
           <label for="Title">Title</label>
           <input name="Title" class="form-control" id="Title" type="text" required value="<?php echo $row['Title'];?>">
            
            <label for="Image_Source">Image Source</label>
           <input name="Image_Source" class="form-control" id="Image_Source" type="text" required value="<?php echo $row['Image_Source'];?>">
            
           <label for="HTML">HTML</label>
           <textarea name="HTML" class="form-control" id="HTML" cols="30" rows="20" required><?php echo $row['HTML'];?></textarea>
           
           <input type="submit">
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