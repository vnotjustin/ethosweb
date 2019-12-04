<style>
@media (max-width: 1200px) {
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
		top: 0;
		border-width: 0 0 1px;
	}
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
		margin-top: 7.5px;
	}
	.navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
  		display:block !important;
	}
}

</style>
 

 <nav class="navi nav navbar navbar-default navbar-fixed-top mobgone">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <a href="index.php"><img src="images/logo.png" class="logo"></a>
     
     <ul class="noback nav navbar-nav navbar-right navspace">
        <li><a href="admin.php">ADMIN</a></li>  
        <li><a href="blog_list.php">EDIT BLOG</a></li>                              
        <li><a href="page_list.php">EDIT PAGE</a></li>
        <li><a href="schedule_list.php">EDIT SCHEDULE</a></li>
        <li><a href="contact_info.php">CONTACT FORM</a></li>
        <li><a href="login.php?logout">LOGOUT</a></li>  
      </ul>
  </div><!-- /.container-fluid -->
  <hr class="navhr">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</nav>

 <nav class="navbar navbar-inverse navbar-fixed-top gone">
	    	<div class="container">
	        	<div class="navbar-header">
	          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
	          		</button>
	          		<a href="index.php?page=home"><img src="images/logo.png" class="navbar-brand"></a>
	        	</div>
	        	<div id="navbar" class="navbar-collapse collapse">
	          		<ul class="nav navbar-nav navbar-right">
	       
	            		  <li><a href="admin.php">ADMIN</a></li>  
                    <li><a href="blog_list.php">EDIT BLOG</a></li>                              
                    <li><a href="page_list.php">EDIT PAGE</a></li>
                    <li><a href="schedule_list.php">EDIT SCHEDULE</a></li>
                    <li><a href="contact_info.php">CONTACT FORM</a></li>
                    <li><a href="login.php?logout">LOGOUT</a></li> 
	          		</ul>
	        	</div><!--/.nav-collapse -->
	      	</div>    
    	</nav>

