<?php
header('Content-Type: application/json'); 

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "doang"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Koneksi gagal: ' . $conn->connect_error]));
}

$response = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['phone'])) {
    $phone = $_POST['phone'];

    $sql = "SELECT * FROM members WHERE phone = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $ig = $row['ig'];
        $instansi = $row['instansi'];
        $fullname = $row['fullname'];
        $date = $row['date'];
        $phone = $row['phone'];
        $kecamatan = $row['kecamatan'];
        $fc = $row['fc'];

        $response = [
            'status' => 'success',
            'email' => $email,
            'ig' => $ig,
            'instansi' => $instansi,
            'fullname' => $fullname, // Nama lengkap user
            'date' => $date,
            'phone' => $phone,
            'kecamatan' => $kecamatan,
            'fc' => $fc,
            'message' => "Daftar ulang berhasil! Selamat beribadah $fullname",
            'redirect' => 'index.php'
        ];        
    } else {
        $response = [
            'status' => 'error',
            'redirect' => 'register.php'
        ];
    }

    echo json_encode($response);
}

$conn->close();
?>
