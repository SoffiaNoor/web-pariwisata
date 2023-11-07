<?php
$servername = 'localhost';
$dbname = 'web_pariwisata';
$username = 'root';
$password = '';

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $NIK = $_POST['NIK'];
    $Nama = $_POST['Nama'];
    $Usia = (int) $_POST['Usia'];
    $TanggalBooking = $_POST['TanggalBooking'];
    $Email = $_POST['Email'];
    $NoTelpon = $_POST['NoTelpon'];
    $KotaAsal = $_POST['KotaAsal'];
    $Destinasi = $_POST['Destinasi'];
    $JumlahOrang = (int) $_POST['JumlahOrang'];

    if ($Usia < 18) {
        header("Location: home.php#kontak");
        $_SESSION["error_age"] = "You must be above 18 to fill the form!";
        exit;
    } elseif (!preg_match('/^[0-9]{16}$/', $NIK)) {
        header("Location: home.php#kontak");
        $_SESSION["error_nik"] = "NIK harus sepanjang 16 digit!";
        exit;
    } elseif ($JumlahOrang < 1) {
        header("Location: home.php#kontak");
        $_SESSION["error_jumlahOrang"] = "Jumlah orang minimal 1!";
    } elseif (!preg_match('/^\d{10,12}$/', $NoTelpon)) {
        header("Location: home.php#kontak");
        $_SESSION["error_notelpon"] = "Nomor Telepon yang ada masukkan tidak tepat!";
        exit;
    } else {
        $sql = "INSERT INTO booking_uuid (ID, NIK, Nama, Usia, TanggalBooking, Email, NoTelpon, KotaAsal, Destinasi, JumlahOrang, CreatedOn, UpdatedOn) 
                VALUES (UUID(), '$NIK', '$Nama', $Usia, '$TanggalBooking', 
                        '$Email', '$NoTelpon', '$KotaAsal', '$Destinasi', 
                        $JumlahOrang, NOW(), '0000-00-00 00:00:00')";

        if ($connection->query($sql) === true) {
            header("Location: home.php#kontak");
            $_SESSION["success_message"] = "Data stored successfully!";
            exit;
        } else {
            echo "Error: " . $connection->error;
        }
    }
}

$connection->close();

?>