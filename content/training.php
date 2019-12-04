<div class="serviceparallax">
   <div class="row1 navpad">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 12 LIMIT 1";
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
                            <img class="col-xs-6 col-md-6" alt="awareness" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
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
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 13 LIMIT 1";
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
                            <img class="col-xs-6 col-md-6" alt="access" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>
      
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } } ?>
</div>
 <div class="col-lg-3"></div>       
<div class="temp">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 15 LIMIT 1";
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
                            <img class="col-xs-6 col-md-6" alt="workplace" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } } ?>
</div>
<div class="col-lg-3"></div>
<div class="temp">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 16 LIMIT 1";
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
                            <img class="col-xs-6 col-md-6" alt="lesslethal" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } } ?>
</div>
<div class="col-lg-3"></div>
<div class="temp">
    <?php
        
            $sql = "SELECT * FROM pm_ethos_sections WHERE ContentID = 17 LIMIT 1";
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
                            <img class="col-xs-6 col-md-6" alt="cert" src="<?php echo $row['Image_Source'];?>" style="width:17vw;"><br>
            <div class="col-xs-6 col-md-6"><p class="servicef font"><?php echo $row['HTML'];?></p><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } } ?>
</div>
<div class="col-lg-3"></div>
    </div>
</div>
</div>