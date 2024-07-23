<html>
    <head>
        <title>Halaman utama</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <div class="col-4">
                    <h3>Tambah Data Pasein</h3>
                    <form action="konek.php" method="POST">
                        <div class="form-group">
                            <label for="idpasien">ID Pasien</label>
                            <input type="text" class="form-control mb-3" name="id-pasien" placeholder="ID pasien">
                        </div>
                        <div class="form-group">
                            <label for="nmpasien">Nama Pasien</label>
                            <input type="text" class="form-control mb-3" name="nmpasien" placeholder="Nama Pasien">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Perempuan">Perempuan
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Laki-Laki">Laki-Laki
                            </div>
                        </div>
                        <div class="form-gripu mt-3">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat" class="form-contorl"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="simpan" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>