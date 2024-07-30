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
                    <label for="idpasien">ID Pasien</label>
                    <input type="text" class="form-control mb-3" name="idpasien" placeholder="ID Pasien" value="<?= $row['idpasien'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nmpasien">Nama Pasien</label>
                    <input type="text" class="form-control mb-3" name="nmpasien" placeholder="Nama Pasien" value="<?= $row['nmpasien'] ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" class="form-check-input" name="jk" value="Perempuan" <?php if ($row['jk'] === "Perempuan") echo "checked"; ?>> Perempuan
                    <input type="radio" class="form-check-input" name="jk" value="Laki-laki" <?php if ($row['jk'] === "Laki-laki") echo "checked"; ?>> Laki-laki
                </div>
                <div class="form-group mt-3">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat"><?= $row['alamat'] ?></textarea>
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
