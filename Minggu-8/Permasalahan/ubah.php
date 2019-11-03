<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ubah Data</title>
</head>
<body>
	<?php
	include "koneksi.php";
	$nim = $_GET["nim"];
	$sql = "SELECT * FROM mahasiswa WHERE nim ='".$nim."'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
	$data = mysqli_fetch_array($query);
	?>

    &nbsp<h2 align="center">UBAH DATA</h2><br>
		<form class="form-horizontal" action="update.php?nim=<?echo $nim;?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="nim" value="<?php echo $data["nim"];?>">
			<div class="form-group">
            	<label class="control-label col-xs-2" for="nama">Nama</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?php echo $data["nama"]; ?>">
                </div>
            </div>
		<div class="form-group">
            <label class="control-label col-xs-2" for="alamat">Alamat</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="<?php echo $data['alamat'];?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="jurusan">Program Studi</label>
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
				<button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
			</div>
		</div>
		</form>
	</div>
</body>
</html>