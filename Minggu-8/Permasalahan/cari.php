<?php
                include "koneksi.php";
                $nim = $_POST["nim"];
				$sql = "SELECT nim, nama, alamat, nama_jurusan FROM mahasiswa NATURAL JOIN jurusan WHERE mahasiswa.id_jur = jurusan.id_jur AND nim='".$nim."'";
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