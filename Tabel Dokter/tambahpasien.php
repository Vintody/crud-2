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
                            <label for="idpasien">ID Dokter</label>
                            <input type="text" class="form-control mb-3" name="id-pasien" placeholder="ID Dokter">
                        </div>
                        <div class="form-group">
                            <label for="nmpasien">Nama Dokter</label>
                            <input type="text" class="form-control mb-3" name="nmpasien" placeholder="Nama Dokter">
                        </div>
                        <div class="form-group">
                            <label for="jk">Spesialis</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Kardiologi">Kardiologi
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Gigi dan Mulut">Gigi dan Mulut
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Dokter Anak">Dokter Anak
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Bedah Umum">Bedah Umum
                            </div>
                        </div>
                        <div class="form-gripu mt-3">
                            <label for="alamat">Notlp</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="1" placeholder="Notlp" class="form-contorl"></textarea>
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