<?php 
    require('db_conn.php');
    if(isset($_GET['logout'])){
        doLogout();
    }
    if(isset($_POST['un'])){
        doLogin($_POST['un'],$_POST['pw']);
    }
?>
<?php require('modules/header.php'); ?>
<div class="navpad" id="login">
  <?php require('modules/loginnav.php'); ?>
  
    <div class="container">
        <div class="card card-container">
           
            <img class="profile-img-card" src="images/EthosProtectionServices_Icon.png" />
            <p class="profile-name-card"></p>
            
            
            <form class="form-signin" method="post" action="login.php">
               
                <input name="un" type="text" class="form-control" placeholder="Username" autofocus>
                <input name="pw" type="password" class="form-control" placeholder="Password"><br><br>
                
                 <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="Login">
    
               
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
 
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php $conn->close(); ?>