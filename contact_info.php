<?php
require "db_conn.php";
?>
  <?php require('modules/header.php'); ?>
  <?php require('modules/adminnav.php'); ?>
<div class="navpad container-fluid">
<?php
$sql = "SELECT * FROM pm_ethos_contact ORDER BY ContactID DESC";
$result = $conn->query($sql);

if ($_SESSION['isadmin'] == 1){
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p class='font'>ID: " . $row["ContactID"]."<br>".
             "Email: " . $row["Email"]."<br>".
             "Name: " . $row["Name"]."<br>".
             "Subject: " . $row["Subject"]."<br>".
             "Message: " . $row["Message"]."<br>".
             "<hr></p>";
    }
} else {
    echo "0 results";
}}
?>
</div>
</body>
</html>

<?php
$conn->close();
?>


