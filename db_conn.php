<?php
session_start();
$servername = "localhost";
$username = "cartweba_student";
$password = "O1sSKzrs75bc";
$dbname = "cartweba_pp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/* ---------- DB functions ---------- */

/* ---------- Add a section---------- */
function addSection($Type, $Title, $Image_Source,  $HTML){
    global $conn;
    $Title = $conn->real_escape_string($Title);
    $Image_Source = $conn->real_escape_string($Image_Source);
    $HTML = $conn->real_escape_string($HTML);
    $sql = "INSERT INTO pm_ethos_sections (Type, Title, Image_Source, HTML ) VALUES ('$Type', '$Title', '$Image_Source', '$HTML')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New post created.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit a section ---------- */ 
function editSection($Type, $Title, $Image_Source, $HTML, $pid) {
    global $conn;
    $Title = $conn->real_escape_string($Title);
    $Image_Source = $conn->real_escape_string($Image_Source);
    $HTML = $conn->real_escape_string($HTML);
    $sql = "UPDATE pm_ethos_sections SET Type='$Type', Title='$Title', Image_Source='$Image_Source' HTML='$HTML' WHERE ContentID=$pid";
    
    if ($conn->query($sql) === TRUE) {
        echo "Post updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Delete a section---------- */
function deleteSection($ContentID) {
    global $conn;
    $sql = "DELETE FROM pm_ethos_sections WHERE ContentID = $ContentID AND (Type = 'faq') LIMIT 1";
    
    if ($conn->query($sql) === TRUE) {
        echo "Post deleted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Add a Contact Form ---------- */
function submitContact($Email, $Name, $Subject, $Message){
    global $conn;
    $sql = "INSERT INTO pm_ethos_contact (Email, Name, Subject, Message) VALUES ('$Email', '$Name', '$Subject', '$Message')";
    
     if ($conn->query($sql) === TRUE) {
        echo "New post created.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
;}

/* ---------- Add a post ---------- */
function addPost($Title, $Image_Source, $Post, $PostDate){
    global $conn;
    $Title = $conn->real_escape_string($Title);
    $Image_Source = $conn->real_escape_string($Image_Source);
    $Post = $conn->real_escape_string($Post);
    $sql = "INSERT INTO pm_ethos_blog (Title, Image_Source, Post, PostDate) VALUES ('$Title', '$Image_Source', '$Post', '$PostDate')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New post created.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit a post ---------- */ 
function editPost($Title, $Image_Source, $Post, $PostDate, $pid) {
    global $conn;
    $Title = $conn->real_escape_string($Title);
    $Image_Source = $conn->real_escape_string($Image_Source);
    $Post = $conn->real_escape_string($Post);
    $sql = "UPDATE pm_ethos_blog SET Title='$Title', Image_Source='$Image_Source', Post='$Post', PostDate='$PostDate' WHERE BlogID=$pid";
    
    if ($conn->query($sql) === TRUE) {
        echo "Post updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Delete a post ---------- */
function deletePost($BlogID) {
    global $conn;
    $sql = "DELETE FROM pm_ethos_blog WHERE BlogID=$BlogID LIMIT 1";
    
    if ($conn->query($sql) === TRUE) {
        echo "Post deleted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Add an event ---------- */
function addEvent($EventType, $Name, $Date, $Time, $Description){
    global $conn;
    $Name = $conn->real_escape_string($Name);
    $Description = $conn->real_escape_string($Description);
    $sql = "INSERT INTO pm_ethos_schedule (EventType, Name, Date, Time, Description) VALUES ('$EventType', '$Name', '$Date', '$Time', '$Description')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New post created.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit an event ---------- */ 
function editEvent($EventType, $Name, $Date, $Time, $Description, $pid) {
    global $conn;
    $Name = $conn->real_escape_string($Name);
    $Description = $conn->real_escape_string($Description);
    $sql = "UPDATE pm_ethos_schedule SET EventType='$EventType', Name='$Name', Date='$Date', Time='$Time', Description='$Description' WHERE SchedID=$pid";
    
    if ($conn->query($sql) === TRUE) {
        echo "Post updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Delete an event ---------- */
function deleteEvent($SchedID) {
    global $conn;
    $sql = "DELETE FROM pm_ethos_schedule WHERE SchedID=$SchedID LIMIT 1";
    
    if ($conn->query($sql) === TRUE) {
        echo "Post deleted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}
/* ---------- Login ---------- */
function doLogin($un,$pw){
    $adminun = "ethosprot";
    $adminpw = "weareeth0s";
    if( $un == $adminun && $pw == $adminpw){
        $_SESSION['isadmin'] = 1;
        header('Location: admin.php');
        //echo "Login Success";
    } else {
        $_SESSION['isadmin'] = 0;
        header('Location: login.php');
        //echo "Login Fail";
    }
    
}

function doLogout() {
    $_SESSION['isadmin'] = 0;
}

?>