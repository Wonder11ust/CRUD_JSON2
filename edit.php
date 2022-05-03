<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Untitled Document</title>
</head>

<body bgcolor="#0ee8cf">
  <?php

  // File json yang akan dibaca (full path file)
  $file = "anggota.json";

  // Mendapatkan file json
  $anggota = file_get_contents($file);

  // Mendecode anggota.json
  $data = json_decode($anggota, true);

  extract($_GET);

  ?>

  <h1 align="center">
    <font color="blue">Edit Biodata Diri</font>
  </h1>
  <form method="POST" action="update2.php">
    <table align="center" width="200" border="2" cellspacing="2" cellpadding="2">
      <tbody>
        <?php

        foreach ($data as $key => $d) {
          // Perbarui data kedua
          if ($d["no"] === $no) {
            $data[$key]["nama"] = $d['nama'];
            $data[$key]["alamat"] = $d['alamat'];



        ?>


            <tr>
              <td>
                <font color="blue">Nama Lengkap</font>
              </td>
              <td><input type='text' name='nama' size='30' maxlength='30' value='<?php echo $d["nama"]; ?>'></td>
            </tr>
            <tr>
              <td>
                <font color="blue">Alamat</font>
              </td>
              <td><input type='text' name='alamat' size='30' maxlength='30' value='<?php echo $d["alamat"]; ?>'></td>
            </tr>
            <input type='hidden' value='<?php echo $d["no"]; ?>' name='no'>
            </td>
            </tr>
            <tr>
              <td align='center' colspan='2'><button>
                  <font color="blue">Update</font>
                </button>
                <button>
                  <font color="red">Batal</font>
                </button>
              </td>
            </tr>
      </tbody>
    </table>
  </form>
<?php
          }
        } ?>
</body>


</html>