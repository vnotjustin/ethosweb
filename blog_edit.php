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
        <form action="blog_list.php" method="post">
          <?php
            if (isset($_GET['pid'])) { 
                $BlogID = $_GET['pid'];

            } else { 
                echo "No record set";
            }
            $sql = "SELECT * FROM pm_ethos_blog WHERE BlogID=$BlogID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
                    
                
           <input type="hidden" name="BlogID" value="<?php echo $row['BlogID'];?>" >
          
           <label for="Title">Title</label>
           <input name="Title" class="form-control"  id="Title" type="text" required value="<?php echo $row['Title'];?>">
           
           <label for="PostDate">Post Date</label>
           <input name="PostDate" class="form-control"  id="PostDate" type="date" required value="<?php echo $row['PostDate'];?>">
           
        <label for="Image_Source">Image Source (Copy Image Address)</label>
           <input name="Image_Source" class="form-control" id="Image_Source" type="text" value="<?php echo $row['Image_Source'];?>">
           
           <label for="Post">Post ( &lt;br&gt; to start new line)</label>
           <textarea name="Post" class="form-control" id="Post" cols="30" rows="20" required><?php echo $row['Post'];?>
           </textarea>
           
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