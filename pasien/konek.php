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
    $idpasien = $_POST['idpasien'];
    $nmpasien = $_POST['nmpasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    
    $sql = "INSERT INTO pasien (idpasien, nmpasien, jk, alamat) VALUES (?, ?, ?, ?)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("ssss", $idpasien, $nmpasien, $jk, $alamat);
    
    if ($stmt->execute()) {
        $stmt->close();
        header('Location: pasien.php');
        exit();
    } else {
        echo "Insert failed: " . $stmt->error;
    }
}

if (isset($_GET['idpasien'])) {
    $idpasien = $_GET['idpasien'];
    
    $sql = "DELETE FROM pasien WHERE idpasien = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $idpasien);
    
    if ($stmt->execute()) {
        $stmt->close();
        header("Location: pasien.php");
        exit();
    } else {
        echo "Delete failed: " . $stmt->error;
    }
}

if (isset($_POST['update'])) {
    $idpasien = $_POST['idpasien'];
    $nmpasien = $_POST['nmpasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    
    $sql = "UPDATE pasien SET nmpasien=?, jk=?, alamat=? WHERE idpasien=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sssi", $nmpasien, $jk, $alamat, $idpasien);
    
    if ($stmt->execute()) {
        $stmt->close();
        header("Location: pasien.php");
        exit();
    } else {
        echo "Update failed: " . $stmt->error;
    }
}
?>
