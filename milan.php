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
    <form action="send2.php" method="post">
        <label for="name">Nama :<br><input type="text" name="name" class="form-control form-control-lg mb-3 nama" placeholder="Masukan Nama" required></label>
        <label for="phone">No. Handphone :<br><input type="number" name="phone" class="form-control form-control-lg mb-3 phone" placeholder="08*********" required></label>
        <input type="hidden" name="noWA" value="62881025326521">
        <input type="hidden" name="link" value="ASH.com">
        <label for="message">Alamat :<textarea name="message" class="form-control form-control-lg" rows="4" placeholder="Masukan Alamat"></textarea></label required><br>

        <label for="tipe0">Jersey :</label>
        <select name="tipe0" class="form-control form-control-lg">
        <option value=" AC Milan Retro">AC Milan Retro</option>
    </select> <br>
        <label for="size0" >Ukuran :</label>
        <select name="size0" class="form-control form-control-lg">
            <option value=" S">S</option>
            <option value=" M">M</option>
            <option value=" L">L</option>
            <option value=" XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="3XL">3XL</option>
        </select><br>
        <label for="jumlah0">Jumlah :<br><input type="number" name="jumlah0" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        <label for="tipe1">Jersey :</label>
        <select name="tipe1" class="form-control form-control-lg">
        <option value=" AC Milan Retro">AC Milan Retro</option>
    </select> <br>
        <label for="size1" >Ukuran :</label>
        <select name="size1" class="form-control form-control-lg">
            <option value=" S">S</option>
            <option value=" M">M</option>
            <option value=" L">L</option>
            <option value=" XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="3XL">3XL</option>
        </select><br>
        <label for="jumlah1">Jumlah :<br><input type="number" name="jumlah1" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        <label for="tipe2">Jersey :</label>
        <select name="tipe2" class="form-control form-control-lg">
        <option value=" AC Milan Retro">AC Milan Retro</option>

    </select> <br>
        <label for="size2" >Ukuran :</label>
        <select name="size2" class="form-control form-control-lg">
            <option value=" S">S</option>
            <option value=" M">M</option>
            <option value=" L">L</option>
            <option value=" XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="3XL">3XL</option>
        </select><br>
        <label for="jumlah2">Jumlah :<br><input type="number" name="jumlah2" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        <label for="tipe3">Jersey :</label>
        <select name="tipe3" class="form-control form-control-lg">
        <option value=" AC Milan Retro">AC Milan Retro</option>

    </select> <br>

        <label for="size3" >Ukuran :</label>
        <select name="size3" class="form-control form-control-lg">
            <option value=" S">S</option>
            <option value=" M">M</option>
            <option value=" L">L</option>
            <option value=" XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="3XL">3XL</option>
        </select><br>
        <label for="jumlah3">Jumlah :<br><input type="number" name="jumlah3" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        <label for="tipe4">Bahan :</label>
        <select name="tipe4" class="form-control form-control-lg">
        <option value=" AC Milan Retro">AC Milan Retro</option>

    </select> <br>

        <label for="size4" >Ukuran :</label>
        <select name="size4" class="form-control form-control-lg">
            <option value=" S">S</option>
            <option value=" M">M</option>
            <option value=" L">L</option>
            <option value=" XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="3XL">3XL</option>
        </select><br>
        <label for="jumlah4">Jumlah :<br><input type="number" name="jumlah4" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        <label for="tipe5">Jersey :</label>
        <select name="tipe5" class="form-control form-control-lg">
        <option value=" AC Milan Retro">AC Milan Retro</option>
    </select> <br>

        <label for="size5" >Ukuran :</label>
        <select name="size5" class="form-control form-control-lg">
            <option value=" S">S</option>
            <option value=" M">M</option>
            <option value=" L">L</option>
            <option value=" XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="3XL">3XL</option>
        </select><br>
        <label for="jumlah5">Jumlah :<br><input type="number" name="jumlah5" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
  <button type="submit" name="submit" class="btn btn-primary btn-lg" >Pesan</button>
  <button type="reset" class="btn btn-danger btn-lg" > Batal</button>
    </form>
</div>
</section>
</body>
</html>