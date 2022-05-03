<html>
    <head></head>
    <body>
<?php 
    $file = "anggota.json";
    // Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

foreach ($data as $d) {
     $d['no']. "<br>";
    $d['nama']. "<br>";
    $d['alamat']. "<br>";
}
    ?>
        <form method = "POST" action="save.php">
        <table border="2" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
        <td>Nomor</td>
        <td><input type="text" name="no"></td>
        </tr>
        <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
      <td align='center' colspan='2'><button><font color="blue">Daftar</font></button>
      <button><font color="red">Batal</font></button></td>
    </tr>
        </form>

    </body>
</html>