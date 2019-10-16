<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding: 20px">
                <div class="card">
                    <div class="card-header"><center>BIODATA</center></div>
                    <div class="card-body">
                        <form action="proses.php?aksi=tambah" method="post">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" cols="40"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki Laki">
                                    <label class="form-check-label">
                                        Laki Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Agama</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="agama">
                                        <option selected>Pilihan</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Atheis">Atheis</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Umur</label>
                                <input type="number" class="form-control" name="umur">
                            </div> -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-success" name="save">Simpan</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- End JS -->
</body>
</html>