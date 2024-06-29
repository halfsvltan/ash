<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/forphp.css">
</head>
<body>
    <section>
    <div class="container">
    <h1>Konfirmasi Checkout</h1>
    <p>Mohon Isi Data Dibawah Ini : </p>
    <form action="send.php" method="post">
        <label for="name">Nama :<br><input type="text" name="name" class="form-control form-control-lg mb-3 nama" placeholder="Masukan Nama" required></label>
        <label for="phone">No. Handphone :<br><input type="number" name="phone" class="form-control form-control-lg mb-3 phone" placeholder="08*********" required></label>
        <input type="hidden" name="noWA" value="62881025326521">
        <input type="hidden" name="link" value="ASH.com">
        <label for="message">Alamat :<textarea name="message" class="form-control form-control-lg" rows="4" placeholder="Masukan Alamat"></textarea></label required><br>
        <label for="tipe0">Tipe :</label>
        <select name="tipe0" class="form-control form-control-lg">
        <option value=" Baseball">Baseball</option>
        <option value=" Trucker">Trucker</option>
        <option value=" Snapback">Snapback</option>
        <option value=" Bucket">Bucket</option>
        <option value=" Beanie">Beanie</option>
    </select> <br>
    <label for="sablon0">Mau diapain? </label>
        <select name="sablon0" class="form-control form-control-lg">
            <option value=" DTF">Sablon DTF</option>
            <option value=" Bordir">Bordir</option>
        </select><br>
        <label for="jumlah0">Jumlah :<br><input type="number" name="jumlah0" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        <label for="tipe1">Tipe :</label>
        <select name="tipe1" class="form-control form-control-lg">
        <option value=" Baseball">Baseball</option>
        <option value=" Trucker">Trucker</option>
        <option value=" Snapback">Snapback</option>
        <option value=" Bucket">Bucket</option>
        <option value=" Beanie">Beanie</option>
    </select> <br>
    <label for="sablon1">Mau diapain? </label>
        <select name="sablon1" class="form-control form-control-lg">
            <option value=" DTF">Sablon DTF</option>
            <option value=" Bordir">Bordir</option>
        </select><br>
        <label for="jumlah1">Jumlah :<br><input type="number" name="jumlah1" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        <label for="tipe2">Tipe :</label>
        <select name="tipe2" class="form-control form-control-lg">
        <option value=" Baseball">Baseball</option>
        <option value=" Trucker">Trucker</option>
        <option value=" Snapback">Snapback</option>
        <option value=" Bucket">Bucket</option>
        <option value=" Beanie">Beanie</option>
    </select> <br>
    <label for="sablon2">Mau diapain? </label>
        <select name="sablon2" class="form-control form-control-lg">
            <option value=" DTF">Sablon DTF</option>
            <option value=" Bordir">Bordir</option>
        </select><br>
        <label for="jumlah2">Jumlah :<br><input type="number" name="jumlah2" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        <label for="tipe3">Tipe :</label>
        <select name="tipe3" class="form-control form-control-lg">
        <option value=" Baseball">Baseball</option>
        <option value=" Trucker">Trucker</option>
        <option value=" Snapback">Snapback</option>
        <option value=" Bucket">Bucket</option>
        <option value=" Beanie">Beanie</option>
    </select> <br>
    <label for="sablon3">Mau diapain? </label>
        <select name="sablon3" class="form-control form-control-lg">
            <option value=" DTF">Sablon DTF</option>
            <option value=" Bordir">Bordir</option>
        </select><br>
        <label for="jumlah3">Jumlah :<br><input type="number" name="jumlah3" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        <label for="tipe4">Tipe :</label>
        <select name="tipe4" class="form-control form-control-lg">
        <option value=" Baseball">Baseball</option>
        <option value=" Trucker">Trucker</option>
        <option value=" Snapback">Snapback</option>
        <option value=" Bucket">Bucket</option>
        <option value=" Beanie">Beanie</option>
    </select> <br>
    <label for="sablon4">Mau diapain? </label>
        <select name="sablon4" class="form-control form-control-lg">
            <option value=" DTF">Sablon DTF</option>
            <option value=" Bordir">Bordir</option>
        </select><br>
        <label for="jumlah4">Jumlah :<br><input type="number" name="jumlah4" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        <label for="file">Upload Desain:<br>
                    <input type="file" name="file" class="form-control form-control-lg">
                </label><br>
  <button type="submit" name="submit" class="btn btn-primary btn-lg" >Pesan</button>
  <button type="reset" class="btn btn-danger btn-lg" > Batal</button>
    </form>
</div>
</section>
</body>
</html>