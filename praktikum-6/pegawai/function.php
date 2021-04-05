<?php 
    $conn = mysqli_connect("localhost","root","","pegawai");
    
    function query($query){
	    global $conn;
	    $result = mysqli_query($conn, $query);
	    $rows = [];
	    
        while ( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
    	}
	
        return $row;
    }

    function tambah($data){
	    global $conn;
        $nama = $data["nama"];
        $email = $data["email"];
        $departemen = $data["departemen"];

        $query = "INSERT INTO pegawai values ('$id','$nama','$email','$departemen')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus ($id){
	    global $conn;
	    mysqli_query($conn, "DELETE FROM pegawai where id = $id");
	 
        return mysqli_affected_rows($conn);
    }
?>