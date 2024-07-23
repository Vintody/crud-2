<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <h3>Tambah Data Dokter</h3>
            <form action="konek.php" method="POST">
                <div class="form-group">
                    <label for="idkunjungan">ID Kunjungan</label>
                    <input type="text" class="form-control mb-3" name="idkunjungan" placeholder="ID Kunjungan">
                </div>
                <div class="form-group">
                    <label for="idpasien">ID Pasien</label>
                    <input type="text" class="form-control mb-3" name="idpasien" placeholder="ID Pasien">
                </div>
                <div class="form-group">
                    <label for="iddokter">ID Dokter</label>
                    <input type="text" class="form-control mb-3" name="iddokter" placeholder="ID Dokter">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control mb-3" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea class="form-control" name="keluhan" id="keluhan" rows="3" placeholder="Keluhan"></textarea>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
