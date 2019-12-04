<?php 
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
    } else {
        header('Location: login.php');
    }

?>
<?php require('modules/header.php'); ?>
<?php require('modules/adminnav.php'); ?>


 <div class="container-fluid navpad">
    <!-- Brand and toggle get grouped for better mobile display -->

     
     <ul class="nav navspace headf">
        <li><a href="index.php">HOME</a></li>  
        <li><a href="blog_list.php">EDIT BLOG</a></li>                              
        <li><a href="page_list.php">EDIT PAGE</a></li>
        <li><a href="?page=schedule">EDIT SCHEDULE</a></li>
        <li><a href="contact_info.php">CONTACT FORM</a></li>
        <li><a href="login.php?logout">LOGOUT</a></li>
        
      </ul>
  </div>
</body>
</html>