<?php
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
        
                   if (isset($_GET['del'])){
                    deleteSection($_GET['del']);
                }
            

                if (isset($_POST['Type'])){
                    editSection($_POST['Type'], $_POST['Title'], $_POST['Image_Source'], $_POST['HTML'], $_POST['ContentID']);
                }
            
           
    } else {
        header('Location: login.php');
    }
    
?>
  <?php require('modules/header.php'); ?>
  <?php require('modules/adminnav.php'); ?>
  
  <div class="col-lg-12 row navpad container">
    <div class="col-lg-3 col-md-6 col-sm-12">
    <h1>Edit Home</h1>
    <?php
        $sql = "SELECT * FROM pm_ethos_sections WHERE Type = 'home'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='page_edit.php?pid=".$row['ContentID']."'>".$row['Title']."</a><br>";
            }
        } else {
            echo "Failed to load content.";
        }
    ?>
    
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-12">
    <h1>Edit About</h1>
    <?php
        $sql = "SELECT * FROM pm_ethos_sections WHERE Type = 'about'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='page_edit.php?pid=".$row['ContentID']."'>".$row['Title']."</a><br>";
            }
        } else {
            echo "Failed to load content.";
        }
    ?>
    
    </div>   
  
     <div class="col-lg-3 col-md-6 col-sm-12">
    <h1>Edit FAQ</h1>
    <?php
        $sql = "SELECT * FROM pm_ethos_sections WHERE Type = 'faq'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='page_edit.php?pid=".$row['ContentID']."'>".$row['Title']."</a> | <a style='color:red;' href='?del=".$row['ContentID']."'>(del)</a><br>";
            }
        } else {
            echo "Failed to load content.";
        }
    ?>
    
    </div>   
          
    <div class="col-lg-3 col-md-6 col-sm-12">
    <h1>Edit Training</h1>
    <?php
        $sql = "SELECT * FROM pm_ethos_sections WHERE Type = 'training'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='page_edit.php?pid=".$row['ContentID']."'>".$row['Title']."</a> <br>";
            }
        } else {
            echo "Failed to load content.";
        }
    ?>
    
    </div>
    
   <div class="col-lg-3 col-md-6 col-sm-12">
    <h1>Edit Consulting</h1>
    <?php
        $sql = "SELECT * FROM pm_ethos_sections WHERE Type = 'consulting'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='page_edit.php?pid=".$row['ContentID']."'>".$row['Title']."</a><br>";
            }
        } else {
            echo "Failed to load content.";
        }
    ?>
       <div class="navpad">
    <a href="page_insert.php" class="rel">Add a Frequently Asked Question</a>
    
    </div>  
    
                    
</div>
</div>   
</body>
</html>
<?php $conn->close(); ?>