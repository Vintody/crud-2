<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Manajemen Data Dokter</h3>
            </div>
            <div class="col-sm text-end">
                <a href="tambahdokter.php" class="btn btn-primary">Tambah Data Dokter</a>
            </div>
        </div>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kunjungan</th>
                    <th>ID Pasien</th>
                    <th>Nama Pasien</th>
                    <th>ID Dokter</th>
                    <th>Tanggal</th>
                    <th>Keluhan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'konek.php';
                $no = 1;
                $hasil = ambilDataDokter();
                
                while ($row = $hasil->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['idkunjungan']; ?></td>
                        <td><?= $row['idpasien']; ?></td>
                        <td><?= $row['nmpasien']; ?></td>
                        <td><?= $row['iddokter']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td><?= $row['keluhan']; ?></td>
                        <td>
                            <a href="editdokter.php?edit=<?= $row['idkunjungan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="konek.php?idkunjungan=<?= $row['idkunjungan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
