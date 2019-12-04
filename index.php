<?php require('db_conn.php');?>
<?php
require('modules/header.php'); //Header Information   
require('modules/nav.php'); //Nav Bar

if(isset($_GET['page'])){
    $class = $_GET['page'];
}

//Page Content
if(isset($_GET['page'])){
    $filename = 'content/'.$_GET['page'].'.php';
    if(file_exists($filename)){
        include($filename);
        if ($_GET['page'] == 'home'){    
            include('modules/homefooter.php'); //Footer
        } else {
            include('modules/footer.php');
        }
    } else {
        include('modules/404.php');
    }
} else {
    include('content/home.php');
    include('modules/homefooter.php');
}
 
     

?>
<?php $conn->close(); ?>