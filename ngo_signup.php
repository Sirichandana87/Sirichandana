 <?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    // Assuming the form submits the fields using POST method
    $nname = $_POST['ngo_name'];
    $oname = $_POST['owner_name'];
    $loginid = $_POST['loginid'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    
    // Validate and sanitize the input values if necessary
    
    $sql = "INSERT INTO `ngosignup` (ngo_name, owner_name, loginid, password, mobile) VALUES ('$nname', '$oname', '$loginid', '$password', '$mobile')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
     
        echo "<script>
                
                window.location.href = 'ngo page.html';
              </script>";
    } 
    else {
        die(mysqli_error($conn));
    }
}
 else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
