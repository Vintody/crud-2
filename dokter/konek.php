<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pasien';


$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}


if (isset($_POST['simpan'])) {
    $idkunjungan = $_POST['idkunjungan'];
    $idpasien = $_POST['idpasien'];
    $iddokter = $_POST['iddokter'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];
    
    $sql = "INSERT INTO dokter (idkunjungan, idpasien, iddokter, tanggal, keluhan) VALUES (?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("siiss", $idkunjungan, $idpasien, $iddokter, $tanggal, $keluhan);
    
    if ($stmt->execute()) {
        $stmt->close();
        header('Location: dokter.php');
        exit();
    } else {
        echo "Insert failed: " . $stmt->error;
    }
}


function ambilDataDokter() {
    global $koneksi;
    $sql = "SELECT dokter.*, pasien.nmpasien FROM dokter LEFT JOIN pasien ON dokter.idpasien = pasien.idpasien";
    $hasil = $koneksi->query($sql);
    return $hasil;
}


if (isset($_GET['idkunjungan'])) {
    $idkunjungan = $_GET['idkunjungan'];
    
    $sql = "DELETE FROM dokter WHERE idkunjungan = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $idkunjungan);
    
    if ($stmt->execute()) {
        $stmt->close();
        header("Location: dokter.php");
        exit();
    } else {
        echo "Delete failed: " . $stmt->error;
    }
}


if (isset($_POST['update'])) {
    $idkunjungan = $_POST['idkunjungan'];
    $idpasien = $_POST['idpasien'];
    $iddokter = $_POST['iddokter'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];
    
    $sql = "UPDATE dokter SET idpasien=?, iddokter=?, tanggal=?, keluhan=? WHERE idkunjungan=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("iisss", $idpasien, $iddokter, $tanggal, $keluhan, $idkunjungan);
    
    if ($stmt->execute()) {
        $stmt->close();
        header("Location: dokter.php");
        exit();
    } else {
        echo "Update failed: " . $stmt->error;
    }
}
?>
