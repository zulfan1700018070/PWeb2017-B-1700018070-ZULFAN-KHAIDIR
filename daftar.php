<!DOCTYPE html>
<html>
<head>
	<title>form Pendaftaran Member</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>Form Pendaftaran Member</h2></center>
	<center><h2>MUROTTAL LIBRARY</h2></center>
	<td widht="80%" background="images/bg1.jpg"valign="top">
<img src ="B.png" width="150" align ="left">
<img src ="B.png" width="150" align ="right"></td>
	<div class="login">
		<form action="#" method="POST" onSubmit="validasi()">
			<div>
				<label>Nama Lengkap:</label>
				<input type="text" name="nama" id="nama" />
			</div>
			<div>
				<label>Email:</label>
				<input type="email" name="email" id="email" />
			</div>
			<div>
				<label>Alamat:</label>
				<textarea cols="40" rows="5" name="alamat" id="alamat"></textarea>
			</div>
			<div>
				<input type="submit" value="Daftar" class="tombol">
			</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var email = document.getElementById("email").value;
		var alamat = document.getElementById("alamat").value;
		if (nama != "" && email!="" && alamat !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>
</html>