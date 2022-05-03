<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form method="POST" action="selectdata2.php">
<input type='text' name='pencarian'><button>Cari</button>
</form>
<h1 align='center'><a href='form.php'>Kembali ke form input</a></h1>
<table width="200" border="2" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td>no</td>
      <td>nama</td>
      <td>alamat</td>
      <td>action</td>
    </tr>
    <?php
// File json yang akan dibaca (full path file)
$file = "anggota.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Membaca data array menggunakan foreach
foreach ($data as $d) {//foreach utk looping
    echo $d['no']. "<br>";
    echo $d['nama']. "<br>";
    echo $d['alamat']. "<br>";
}
?>
    <tr>
<?php foreach($data as $d){?>
      <td><?php echo $d["no"]; ?></td>
      <td><?php echo $d["nama"]; ?></td>
      <td><?php echo $d["alamat"]; ?></td>

	  <td>
			<button><a href='edit.php?id=<?php echo $d["no"]; ?>'> edit</a></button>
			<button><a href='hapus.php?id=<?php echo $d["no"]; ?>'>hapus</a></button>
	  </td>
    </tr>
<?php } ?>
  </tbody>
</table>

</body>
</html>