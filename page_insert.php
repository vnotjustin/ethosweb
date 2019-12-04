<?php 
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
        if (isset($_POST['Type'])){
            addSection($_POST['Type'], $_POST['Title'], $_POST['HTML']);
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
        <form action="page_insert.php" method="post">
           <label for="Type">Type</label>
           <select name="Type" class="form-control" id="Type" required>
                  <option value="faq">FAQ</option>
            </select>
            
            <label for="Title">Question</label>
           <input name="Title" class="form-control" id="Title" type="text" required>
            
           <label for="HTML">Answer ( Use &lt;br&gt; to start a new line)</label>
           <textarea name="HTML" class="form-control" id="HTML" cols="30" rows="20" required></textarea>
           
           
           <input type="submit"> <input type="reset">
        </form>
    </div>
       <div class="col-lg-3"></div>
</div> 
</body>
</html>
<?php $conn->close(); ?>