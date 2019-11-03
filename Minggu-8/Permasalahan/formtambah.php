<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
</head>
<body>
    &nbsp<h3 align="center">TAMBAH DATA MAHASISWA</h3><br>
    <form class="form-horizontal" action="insert.php" method="post" encytpe="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-xs-2" for="nim">NIM</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="nama">Nama</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="alamat">Alamat</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="id_jur">Program Studi</label>
            <div class="col-xs-9">
                <select name="id_jur" class="form-control" id="id_jur">
                    <option value="Pilih">Pilih Program Studi</option>
                    <option value="1001">Perencanaan Wilayah dan Kota</option>
                    <option value="1002">Teknik Sipil</option>
                    <option value="1003">Teknik Geomatika</option>
                    <option value="1004">Arsitektur</option>
                    <option value="1005">Teknik Lingkungan</option>
                    <option value="1006">Teknik Elektro</option>
                    <option value="1007">Teknik Geofisika</option>
                    <option value="1008">Teknik Informatika</option>
                    <option value="1009">Teknik Mesin</option>
                    <option value="1010">Teknik Industri</option>
                </select>  
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-9">
                <input type="submit" name="submit" class="btn btn-primary" value="TAMBAH">
            </div>
        </div>
    </form>
    </div>
</body>
</html>