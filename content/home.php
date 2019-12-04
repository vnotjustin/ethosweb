<div class="container-fluid">
<div class="row">
<div class="parallax1 zsmall rel">

<div class="move head1"><h1 class="headf headpos"> ETHOS</h1>
    <img src="images/button.png" alt="button" class="button" onclick="scrollOne()"> </div> 
    
</div>


    
    </div>






<div class="row">
<div class="content col-sm-6">
<img src="<?php echo $row['Image_Source'];?>" alt="ethos" class="homeimg">
    </div>
<div class="content col-sm-6">

 <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 1 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>

<h3 class="subheadf subhomef"><?php echo $row['Title'];?></h3>
<p class="font buttonspace">
  <?php echo $row['HTML'];?> </p>
   <a class="navbutton buttonmarg1 headf zbig" href="#">Learn More</a>
    </div>
    </div>
    
    <?php } } ?>
    
    
<div class="row">
<div class="parallax2 rel">
  
<div class="move head2"><h1 class="headf headpos2"> TRAINING</h1>
    <img src="images/button.png" class="button" alt="button" onclick="scrollTwo()"> </div>    
 
</div>
   

    
    </div>
    
   <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 4 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>  
    
    
<div class="row">
<div class="content col-sm-6">
<img src="<?php echo $row['Image_Source'];?>" alt="firearms" class="homeimg">
    </div>
<div class="content col-sm-6">

<h3 class="subheadf subhomef"><?php echo $row['Title'];?></h3>
<p class="font buttonspace"><?php echo $row['HTML'];?>  </p>
   <a class="navbutton buttonmarg1 headf zbig" href="#">Learn More</a>
    </div>
    </div>
    
      <?php } } ?>
    
<div class="row">   
<div class="parallax3 rel">

<div class="move head3"><h1 class="headf headpos3"> CONSULTING</h1>
    <img src="images/button.png" class="button" alt="button" onclick="scrollThree()"> </div>  


</div>

    
    </div>
  
   <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 5 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>  
        
<div class="row">
<div class="content col-sm-6">
<img src="<?php echo $row['Image_Source'];?>" alt="consulting" class="homeimg">
    </div>
<div class="content col-sm-6">

<h3 class="subheadf subhomef"><?php echo $row['Title'];?></h3>
<p class="font buttonspace"><?php echo $row['HTML'];?> </p>
   <a class="navbutton buttonmarg1 headf zbig" href="#">Learn More</a>
    </div>
    </div>  
    
    </div>
  <?php } } ?>

<script src="JavaScript/smoothscroll.js"></script>
<script>
    
function scrollOne() {
    document.querySelector('.head1').scrollIntoView({ 
    behavior: 'smooth' 
});
}
    
function scrollTwo() {
    document.querySelector('.head2').scrollIntoView({ 
    behavior: 'smooth' 
});
}    
    
function scrollThree() {
    document.querySelector('.head3').scrollIntoView({ 
    behavior: 'smooth' 
});
}    
</script>