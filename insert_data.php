<?php
// Database connection details (change these to match your database)
$servername = 'localhost';
$dbname = 'web_pariwisata';
$username = 'root';
$password = '';

// Create a database connection using MySQLi
$connection = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

session_start();

// Process form data
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
    // $CreatedOn =  time(); 
    // $UpdatedOn = null;

    if ($Usia < 18) {        
        // // alert('You must be above 18 to fill the form');
        // echo "<script>alert('You Must be above 18');</script>";
        // $Usia = 0;
        header("Location: home.php#kontak");
        // session_start();
        $_SESSION["error_age"] = "You must be above 18 to fill the form!";
        exit;
        // echo'Must be above 18';
    }
    elseif ($JumlahOrang < 1) {
        header("Location: home.php#kontak");
        // session_start();
        $_SESSION["error_jumlahOrang"] = "Jumlah orang minimal 1!";
        // exit;
    }
    else{
        // Insert data into the database using MySQLi
        $sql = "INSERT INTO booking (NIK, Nama, Usia, TanggalBooking, Email, NoTelpon, KotaAsal, Destinasi, JumlahOrang, CreatedOn, UpdatedOn) 
                VALUES ('$NIK', '$Nama', $Usia, '$TanggalBooking', 
                        '$Email', '$NoTelpon', '$KotaAsal', '$Destinasi', 
                        $JumlahOrang, NOW(), '0000-00-00 00:00:00')";

        if ($connection->query($sql) === true) {
            header("Location: home.php#kontak");
            // session_start();
            $_SESSION["success_message"] = "Data stored successfully!";
            exit;
        } else {
            echo "Error: " . $connection->error;
        }
    }
}

// Close the database connection
$connection->close();

?>