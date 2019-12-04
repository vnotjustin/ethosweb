<?php
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
        
        
            
                
                if (isset($_GET['del'])){
                    deletePost($_GET['del']);
                }
                if (isset($_POST['Title'])){
                    editPost($_POST['Title'], $_POST['Image_Source'], $_POST['Post'], $_POST['PostDate'], $_POST['BlogID']);
                }
            
           
    } else {
        header('Location: login.php');
    }
    
?>
  <?php require('modules/header.php'); ?>
  <?php require('modules/adminnav.php'); ?>
  
  <div class="row navpad container">
    <div class="col-lg-12">
    <h1>Posts to Edit</h1>
    <?php
        $sql = "SELECT * FROM pm_ethos_blog SORT";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='blog_edit.php?pid=".$row['BlogID']."'>".$row['Title']."</a> | <a style='color:red;' href='?del=".$row['BlogID']."'>(del)</a><br>";
            }
        } else {
            echo "Failed to load content.";
        }
    ?>
    <br>
    <a href="blog_insert.php" class="button rel">Add a Post</a>
    
    </div>
</div>
</body>
</html>
<?php $conn->close(); ?>


