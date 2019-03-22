<?php
// Check for the path elements
// Turn off error reporting
error_reporting(0);
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
$con=mysqli_connect("localhost","id8365689_admin","admin12","id8365689_layanan");
// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		
	$arr = array();

	$sql = "SELECT * FROM `cutistudi` WHERE 1";
	$result = $con->query($sql);

	if ($result->num_rows > 0) 
		{
		// output data of each row
		while($row = $result->fetch_assoc()) {
        // echo "Nama: " . $row["nama"]. " - NIM: " . $row["nim"]."Fakultas:".$row["fakultas"]."" . $row["progdi/jenjang"]. "<br>";
			$temp = array(
						"nama" => $row["nama"],
						"nim" =>$row["nim"],	
						"fakultas" =>$row["fakultas"],
						"progdi/jenjang" => $row["progdi/jenjang"]);
   
					array_push($arr, $temp);
		
		}
		} else {
		echo "0 results";
		}
	
	$con->close();
	$data = json_encode($arr);
    echo "<h2>Daftar Tabel PKL</h2>";
    echo "1. Andi Pradana (16.01.53.0053)<br>";
    echo "2. Oktadha Nurdiansyah (16.01.53.0003)<br>";
    echo "3. Djohan Aris Sanjaya (16.01.53.0090)<br>";
    echo "4. Guntur Iswanto (16.01.53.0015)<br>";
    echo "5. Itmammur Roghib L (16.01.53.0078)<br>";
    echo "6. Muhammad Fahrurrozi (16.01.53.0058)<br>";
    echo "7. Farhah Nurul H (16.01.53.0190)<br>";
    echo "<br>";
	echo "{\"MENAMPILKAN DATA AKTIF STUDI dengan format JSON\":" . $data . "}";
	}

?>
<br>
<br>
<br>


<?php
// Check for the path elements
// Turn off error reporting
error_reporting(0);
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
$con=mysqli_connect("localhost","id8365689_admin","admin12","id8365689_layanan");
// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		
	$arr = array();

	$sql = "SELECT * FROM `aktifstudi`";
	$result = $con->query($sql);

	if ($result->num_rows > 0) 
		{
		// output data of each row
		while($row = $result->fetch_assoc()) {
        // echo "Nama: " . $row["nama"]. " - NIM: " . $row["nim"]."Fakultas:".$row["fakultas"]."" . $row["progdi/jenjang"]. "<br>";
			$temp = array(
						"nama" => $row["nama"],
						"nim" =>$row["nim"],	
						"fakultas" =>$row["fakultas"],
						"progdi/jenjang" => $row["progdi/jenjang"]);
   
					array_push($arr, $temp);
		
		}
		} else {
		echo "0 results";
		}
	
	$con->close();
	$data = json_encode($arr);
 
	echo "{\"MENAMPILKAN DATA CUTI STUDI dengan format JSON\":" . $data . "}";
	}

?>
<br>
<br>
<br>
<?php
// Check for the path elements
// Turn off error reporting
error_reporting(0);
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
$con=mysqli_connect("localhost","id8365689_admin","admin12","id8365689_layanan");
// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		
	$arr = array();

	$sql = "SELECT * FROM `keterangankuliah`";
	$result = $con->query($sql);

	if ($result->num_rows > 0) 
		{
		// output data of each row
		while($row = $result->fetch_assoc()) {
        // echo "Nama: " . $row["nama"]. " - NIM: " . $row["nim"]."Fakultas:".$row["fakultas"]."" . $row["progdi/jenjang"]. "<br>";
			$temp = array(
						"nim" => $row["nim"],
						"nama" => $row["nama"],
						"ttl" => $row["ttl"],
						"semester" => $row["semester"],
						"fakultas" => $row["fakultas"],
						"progdi/jenjang" => $row["progdi/jenjang"],
						"alamat" => $row["alamat"],
						"namaorangtua/wali" => $row["namaorangtua/wali"],
						"pekerjaan" => $row["pekerjaan"],
						"golongan/pangkat" => $row["golongan/pangkat"],
						"nopegawai/nopensiun" => $row["nopegawai/nopensiun"],
						"alamatorangtuawali" => $row["alamatorangtuawali"]);	
						
   
					array_push($arr, $temp);
		
		}
		} else {
		echo "0 results";
		}
	
	$con->close();
	$data = json_encode($arr);
 
	echo "{\"MENAMPILKAN DATA KETERANGAN KULIAH dengan format JSON\":" . $data . "}";
	}

?>
<br>
<br>
<br>
<?php
// Check for the path elements
// Turn off error reporting
error_reporting(0);
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
$con=mysqli_connect("localhost","id8365689_admin","admin12","id8365689_layanan");
// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		
	$arr = array();

	$sql = "SELECT * FROM `konsultasinilai` ORDER BY `kode` ASC ";
	$result = $con->query($sql);

	if ($result->num_rows > 0) 
		{
		// output data of each row
		while($row = $result->fetch_assoc()) {
        // echo "Nama: " . $row["nama"]. " - NIM: " . $row["nim"]."Fakultas:".$row["fakultas"]."" . $row["progdi/jenjang"]. "<br>";
			$temp = array(
						"no" => $row["no"],
						"nim" =>$row["nim"],	
						"kode" =>$row["kode"],
						"matakuliah" => $row["matakuliah"],
						"kplk" => $row["kplk"],
						"khs" =>$row["khs"],	
						"baak_uts" =>$row["baak_uts"],
						"baak_uas" => $row["baak_uas"],
						"baak_akhir" => $row["baak_akhir"],
						"dosen_uts" =>$row["dosen_uts"],	
						"dosen_uas" =>$row["dosen_uas"],
						"dosen_akhir" => $row["dosen_akhir"],
						"dosenpengampu" => $row["dosenpengampu"]);
   
					array_push($arr, $temp);
		
		}
		} else {
		echo "0 results";
		}
	
	$con->close();
	$data = json_encode($arr);
 
	echo "{\"MENAMPILKAN DATA KONSULTASI NILAI dengan format JSON\":" . $data . "}";
	}

?>