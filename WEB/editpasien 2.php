<!DOCTYPE html>
<html>
<head>
    <title>Edit data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <h3>Edit data Pasien</h3>
            <?php
            include 'konek.php';
            
            // Ambil data pasien berdasarkan id yang diberikan
            if(isset($_GET['edit'])) {
                $idEdit = $_GET['edit'];
                $panggil = $koneksi->query("SELECT * FROM pasien WHERE idpasien='$idEdit'");
                
                // Loop untuk menampilkan form edit
                while ($row = $panggil->fetch_assoc()) {
            ?>
            <form action="konek.php" method="POST">
                <div class="form-group">
                    <label for="idpasien">ID Dokter</label>
                    <input type="text" class="form-control mb-3" name="idpasien" placeholder="ID Pasien" value="<?= $row['idpasien'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nmpasien">Nama Dokter</label>
                    <input type="text" class="form-control mb-3" name="nmpasien" placeholder="Nama Pasien" value="<?= $row['nmpasien'] ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" class="form-check-input" name="jk" value="Kardiologi" <?php if ($row['jk'] === "Kardiologi") echo "checked"; ?>> Kardiologi
                    <input type="radio" class="form-check-input" name="jk" value="Bedah Umum" <?php if ($row['jk'] === "Bedah Umum") echo "checked"; ?>> Bedah Umum
                    <input type="radio" class="form-check-input" name="jk" value="Gigi dan Mulut" <?php if ($row['jk'] === "Gigi dan Mulut") echo "checked"; ?>> Gigi dan Mulut
                    <input type="radio" class="form-check-input" name="jk" value="Dokter Anak" <?php if ($row['jk'] === " Dokter Anak") echo "checked"; ?>> Dokter Anak
                </div>
                <div class="form-group mt-3">
                    <label for="alamat">Notlp</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="1" placeholder="Alamat"><?= $row['alamat'] ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" name="update" value="Simpan" class="btn btn-primary">
                </div>
            </form>
            <?php
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
