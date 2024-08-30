<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "doang"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $ig = $_POST['ig'];
    $instansi = $_POST['instansi'];
    $fullname = $_POST['fullname'];
    $date = $_POST['date'];
    $phone = $_POST['phone'];
    $kecamatan = $_POST['kecamatan'];
    $fc = $_POST['fc'];

    // Prepare SQL query
    $sql = "INSERT INTO members (email, ig, instansi, fullname, date, phone, kecamatan, fc) VALUES ('$email', '$ig', '$instansi', '$fullname', '$date', '$phone', '$kecamatan', '$fc')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: register.php?status=success&name=" . urlencode($fullname));
exit();

    } else {
        header("Location: register.php?status=failure");
    }
}

// Close connection
$conn->close();
?>
