<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <h3>Edit Data Dokter</h3>
            <?php
            include 'konek.php';
            
            if(isset($_GET['edit'])) {
                $idEdit = $_GET['edit'];
                $panggil = $koneksi->query("SELECT * FROM dokter WHERE idkunjungan='$idEdit'");
                
        
                while ($row = $panggil->fetch_assoc()) {
            ?>
            <form action="konek.php" method="POST">
                <div class="form-group">
                    <label for="idkunjungan">ID Kunjungan</label>
                    <input type="text" class="form-control mb-3" name="idkunjungan" placeholder="ID Kunjungan" value="<?= $row['idkunjungan'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="idpasien">ID Pasien</label>
                    <input type="text" class="form-control mb-3" name="idpasien" placeholder="ID Pasien" value="<?= $row['idpasien'] ?>">
                </div>
                <div class="form-group">
                    <label for="iddokter">ID Dokter</label>
                    <input type="text" class="form-control mb-3" name="iddokter" placeholder="ID Dokter" value="<?= $row['iddokter'] ?>">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control mb-3" name="tanggal" value="<?= $row['tanggal'] ?>">
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea class="form-control" name="keluhan" id="keluhan" rows="3"><?= $row['keluhan'] ?></textarea>
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
