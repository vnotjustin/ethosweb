<div class="serviceparallax">
  <div class="row1 navpad">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 18 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
    <div class="row">
        <div class="temp">
           <div class="row">
            <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="col-lg-3"></div>
                        <div class="hed thumbnail">
                            <div class="modal-header">
                            <h4 class="modal-title subheadf"><?php echo $row['Title'];?></h4>
                            </div>
                            <div class="row">
                            <img class="col-xs-6 col-md-6"  src="<?php echo $row['Image_Source'];?>" alt="survey" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>

                </div>
            </div>
        </div>
               </div>
</div><?php } } ?>
       </div>
  <div class="col-lg-3"></div>      
<div class="temp">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 19 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
    <div class="row">
    
            <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="col-lg-3"></div>
                        <div class="hed thumbnail">
                            <div class="modal-header">
                            <h4 class="modal-title subheadf"><?php echo $row['Title'];?></h4>
                            </div>
                            <div class="row">
                            <img class="col-xs-6 col-md-6"  src="<?php echo $row['Image_Source'];?>" alt="assessment" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>

                        </div>
                    </div>
                </div>
            </div>
        </div><?php } } ?>
    </div>

<div class="col-lg-3"></div>
<div class="temp">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 20 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
    <div class="row">

            <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="col-lg-3"></div>
                        <div class="hed thumbnail">
                            <div class="modal-header">
                            <h4 class="modal-title subheadf"><?php echo $row['Title'];?></h4>
                            </div>
                            <div class="row">
                            <img class="col-xs-6 col-md-6" alt="vulnerabilities" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>
   
                        </div>
                    </div>
                </div>
            </div>
        </div><?php } } ?>
    </div>

<div class="col-lg-3"></div>
<div class="temp">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 21 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
    <div class="row">

            <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="col-lg-3"></div>
                        <div class="hed thumbnail">
                            <div class="modal-header">
                            <h4 class="modal-title subheadf"><?php echo $row['Title'];?></h4>
                            </div>
                            <div class="row">
                            <img class="col-xs-6 col-md-6" alt="recommend" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>

                        </div>
                    </div>
                </div>
            </div>
        </div><?php } } ?>

</div>
<div class="col-lg-3"></div>
<div class="temp">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 22 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
    <div class="row">

            <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="col-lg-3"></div>
                        <div class="hed thumbnail">
                            <div class="modal-header">
                            <h4 class="modal-title subheadf"><?php echo $row['Title'];?></h4>
                            </div>
                            <div class="row">
                            <img class="col-xs-6 col-md-6" alt="review" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>

                        </div>
                    </div>
                </div>
            </div>
        </div><?php } } ?>
    </div>

 <div class="col-lg-3"></div>       
<div class="temp">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 23 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
    <div class="row">

            <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="col-lg-3"></div>
                        <div class="hed thumbnail">
                            <div class="modal-header">
                            <h4 class="modal-title subheadf"><?php echo $row['Title'];?></h4>
                            </div>
                            <div class="row">
                            <img class="col-xs-6 col-md-6" alt="planning" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?>.</p><br>

                        </div>
                    </div>
                </div>
            </div>
        </div><?php } } ?>
    </div>

<div class="col-lg-3"></div>
<div class="temp">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 24 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
    <div class="row">

            <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="col-lg-3"></div>
                        <div class="hed thumbnail">
                            <div class="modal-header">
                            <h4 class="modal-title subheadf"><?php echo $row['Title'];?></h4>
                            </div>
                            <div class="row">
                            <img class="col-xs-6 col-md-6" alt="evaluations" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>

                        </div>
                    </div>
                </div>
            </div>
        </div><?php } } ?>
    </div>

  <div class="col-lg-3"></div>      
<div class="temp">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 25 LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
    <div class="row">

            <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="col-lg-3"></div>
                        <div class="hed thumbnail">
                            <div class="modal-header">
                            <h4 class="modal-title subheadf"><?php echo $row['Title'];?></h4>
                            </div>
                            <div class="row">
                            <img class="col-xs-6 col-md-6" alt="mitigations" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>

                        </div>
                    </div>
                </div>
            </div>
        </div><?php } } ?>
    </div>
    <div class="col-lg-3"></div>
    </div>


               
</div>         
</div>