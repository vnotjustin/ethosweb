<div class="navpad"></div>
<?php

    

$sql = "SELECT * FROM pm_ethos_blog ORDER BY BlogID DESC LIMIT 0, 5";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>
              <div class='col-lg-2 col-sm-0'></div>
        
              <div class='col-lg-8 col-sm-12 blog'>
              
             <h3 class='subheadf2 blogfonth'>" . $row["Title"]."</h3><br>".
             "<p class='subheadf blogfontsubh'>" . $row["PostDate"]."</p><br>".
             "<img class='blogimg text-center' src='" . $row["Image_Source"]."'><br><br><br>".
             "<p class='font blogfont'>" . $row["Post"]."</p><br>".
             "
              
              
                       
              </div>
              
              <div class='col-lg-2 col-sm-0'></div>
              </div><br><hr>";
    }
}
?>

</body>
</html>