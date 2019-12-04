/* THIS IS FOR THE BLOG PAGE; USED TO GET OLDER POSTS   */



if (isset($_POST['blog'])){
    
$pg = $_GET['blog'] + 1;
$offset = $pg * 5; 
    
}


<?php $pg = $_GET['pg'] + 1;?>
<a href="blog.php?<?php echo $pg; ?>">Next Page</a>


$offset = $pg * 5; 


$sql = "SELECT * FROM blog SORT BY BlogID DESC LIMIT 0, 5";