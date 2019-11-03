<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tampil Data</title>
</head>
&nbsp<h3 align="center">DATA MAHASISWA</h3><br>
<div class="row">
    <div class="col-sm-4">
    <form class="form-horizontal" action="cari.php" method="post">
        <div class="form-group">
        <a href="formtambah.php" class="btn btn-success col-sm-offset-1">TAMBAH DATA</a><br>
            <label class="control-label col-sm-offset-1" for="cari">Cari Data</label>
            <input type="text" class="form-control col-sm-offset-1" name="nim" placeholder="Masukkan NIM untuk Cari Data">
            <button type="submit" class="btn btn-primary col-sm-offset-1" name="cari">CARI</button>
        </div>
    </form>
    </div>
</div>
		<table class="table table-striped" align="center" cellpadding="5">
			<thead>
				<tr>
					<th>NO</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Program Studi</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "koneksi.php";
				$sql = "SELECT nim, nama, alamat, nama_jurusan FROM mahasiswa NATURAL JOIN jurusan WHERE mahasiswa.id_jur = jurusan.id_jur";
				$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
				$no = 1;
				while($data = mysqli_fetch_array($query)){
				    $nim = $data["nim"];
				    $nama = $data["nama"];
				    $alamat = $data["alamat"];
                    $jurusan = $data["nama_jurusan"];
                echo"
                    <tr>
					<td>$no</td>
                    <td>$nim</td>
                    <td>$nama</td>
                    <td>$alamat</td>
                    <td>$jurusan</td>
                    <td>
                        <a href='ubah.php?nim=".$nim."'>Ubah</a>
                        <a href='delete.php?nim=".$nim."'>Hapus</a>	
                    </td>
				</tr>";
				$no++;
			}
			?>
		</tbody>
	</table>
</body>
</html>