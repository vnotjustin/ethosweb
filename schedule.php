<div class="SG navpad">
    <h1>Schedule</h1></div>
<br>
<br>
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="NL">
            <br>
            <br>
            <br>
            <div class="col-lg-2"></div>
            <div class="col-lg-7 boxbord whitespace">
                <br>
                <h3> Sign Up for Our Newsletter!</h3>
                <br>
                <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" /> </div>
                <div class="form-group">
                    <label for="email"> Email Address</label>
                    <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span> </span>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /> </div>
                    <br>
                    <br>
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Send Message</button>
                    </div>
                    <br> </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
            <div class="col-lg-4">
                <div class="C">
                    <h4><b>Courses</b></h4>
                    <table class="table">
                        <tbody>
<?php

$sql = "SELECT * FROM schedule WHERE EventType= 0 ORDER BY SchedID LIMIT 0, 5";
$result = $conn->query($sql);
$dformat = 'm/d/y';
$tformat = 'h:i:a';                            

                         
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  <tr>
                                    <td></td>
                                    <td>". date($dformat, strtotime($row["Date"])) ."<br>" . date($tformat, strtotime($row["Time"])) ."</td>
                                    <td>" . $row["Name"].":  ". $row["Description"]." </td>
                                </tr>";
    }
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-4">
                <div class="E">
                    <h4><b>Events</b></h4>
                    <table class="table">
                        <tbody>
                           <?php

                            
$sql = "SELECT * FROM schedule WHERE EventType= 1 ORDER BY SchedID DESC LIMIT 0, 5";
$result = $conn->query($sql);


                         
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  <tr>
                                    <td></td>
                                    <td>". date($dformat, strtotime($row["Date"])) ."<br>" . date($tformat, strtotime($row["Time"])) ."</td>
                                    <td>" . $row["Name"].":  ". $row["Description"]." </td>
                                </tr>";
    }
}
?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>