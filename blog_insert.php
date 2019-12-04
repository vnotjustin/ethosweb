<?php 
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
        if (isset($_POST['Title'])){
            addPost($_POST['Title'], $_POST['Image_Source'], $_POST['Post'], $_POST['PostDate']);
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
        <form action="blog_insert.php" method="post">
           <label for="Title">Title</label>
           <input name="Title" class="form-control" id="Title" type="text" required>
           
           <label for="PostDate">Post Date</label>
           <input name="PostDate" class="form-control" id="PostDate" type="date" required>
           
           <label for="Image_Source">Image Source (Copy Image Address)</label>
           <input name="Image_Source" class="form-control" id="Image_Source" type="text" required>
            
           <label for="Post">Post ( Use &lt;br&gt; to start a new line)</label>
           <textarea name="Post" class="form-control" id="Post" cols="30" rows="20" required></textarea>
           
           
           <input type="submit"> <input type="reset">
        </form>
    </div>
       <div class="col-lg-3"></div>
</div> 
</body>
</html>
<?php $conn->close(); ?>