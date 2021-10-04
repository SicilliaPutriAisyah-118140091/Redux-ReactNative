<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Biodata Warga</title>

<link rel="stylesheet" type="text/css" href="style_formDataWarga.css"> 
</head>
<body>

  <div class="wrapper">
    <div class="title">
      Form Data Warga
    </div>
    <div class="form">


      <form method="GET" action="hasil_formDataWarga.php">

      <div class="input_field">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="input">
      </div>

      <div class="input_field">
        <label>Alamat</label>
        <textarea class="textarea" name="alamat"></textarea>
      </div>

      <div class="input_field">
        <label>Nomor HP</label>
        <input type="text" name="no_telp" class="input">
      </div>

      <div class="input_field">
        <label>Tempat Lahir</label>
        <input type="text" name="tmpt_lahir" class="input">
      </div>

      <div class="input_field">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="date">
      </div>

      <div class="input_field">
        <label>Jenis Kelamin</label>
        <div class="custom_select">
          <select name="gender">
            <option value="">pilih disini</option>
            <option value="perempuan">perempuan</option>
            <option value="laki">laki-laki</option>
          </select>
        </div>
      </div>

      <div class="input_field">
        <label>Status</label>
        <div class="custom_select">
          <select name="status">
            <option value="">pilih disini</option>
            <option value="kawin">kawin</option>
            <option value="belum">belum kawin</option>
          </select>
        </div>
      </div>

      <div class="input_field">
        <label>Agama</label>
        <input type="text" name="agama" class="input">
      </div>

      <div class="input_field">
        <label>Status Tempat Tinggal</label>
        <div class="custom_select">
          <select name="status_ttl">
            <option value="">pilih disini</option>
            <option value="rumah">rumah sendiri</option>
            <option value="kontrakan">kontrakan</option>
            <option value="kost">kost</option>
            <option value="dll">dll</option>
          </select>
        </div>
      </div>

      <div class="input_field">
        <input type="submit" value="Submit" class="btn">
      </div>

    </form>
    
</div>

  </div>

</body>
</html>





