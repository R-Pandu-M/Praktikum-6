<?php
    require 'function.php';

    if(isset($_POST["submit"])){
	    if (tambah($_POST)> 0){
		    echo "<script> alert('Data Berhasil ditambahkan!');
			document.location.href='index.php';
			</script>";
	    }
        else {
		    echo "<script> alert('Data Gagal ditambahkan!');
			document.location.href='index.php';
			</script>";
	    }
    }
?>

<html>
    <head>
	    <title>Tambah Data Pegawai</title>
    </head>
    <body>
        <center><h1>Tambah Data</h1><center>
        <form method="POST" action="">	
            <table cellpadding="5">
	            <tr>
		            <td><label for=nama> Nama : </label></td>
		            <td>
		            <input type="text" name="nama" id="nama" required="">
                    </td>
	            </tr>
	            <tr>
		            <td><label for=email> Email : </label></td>
		            <td>
		            <input type="text" name="email" id="email" required="">
                    </td>
	            </tr>
		        <tr>
			        <td><label for=departemen> Departemen : </label></td>
			        <td>
		            <input type="text" name="departemen" id="departemen" required="">
                    </td>
		        </tr>
            </table>
            <br>
            <button type="submit" name="submit">Simpan</button>
        </form>
    </body>
</html>