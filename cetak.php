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
    <form action="send1.php" method="post">
        <label for="name">Nama :<br><input type="text" name="name" class="form-control form-control-lg mb-3 nama" placeholder="Masukan Nama" required></label>
        <label for="phone">No. Handphone :<br><input type="number" name="phone" class="form-control form-control-lg mb-3 phone" placeholder="08*********" required></label>
        <input type="hidden" name="noWA" value="62881025326521">
        <input type="hidden" name="link" value="ASH.com">
        <label for="message">Alamat :<textarea name="message" class="form-control form-control-lg" rows="4" placeholder="Masukan Alamat"></textarea></label required><br>

        <label for="product0">Produk :</label>
        <select name="product0" class="form-control form-control-lg">
            <option value=" Brosur">Brosur</option>
            <option value=" Poster">Poster</option>
            <option value=" Kartu Nama">Kartu Nama</option>
            <option value=" Buku">Buku</option>
            <option value=" Spanduk">Spanduk</option>
        </select> <br>
        <label for="size0" >Ukuran :</label>
        <select name="size0" class="form-control form-control-lg">
            <option value=" A4">A4</option>
            <option value=" A5">A5</option>
            <option value=" A6">A6</option>
            <option value=" B5">B5</option>

        </select><br>
        <label for="quantity0">Jumlah :<br><input type="number" name="quantity0" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        
        <label for="product1">Produk :</label>
        <select name="product1" class="form-control form-control-lg">
            <option value=" Brosur">Brosur</option>
            <option value=" Poster">Poster</option>
            <option value=" Kartu Nama">Kartu Nama</option>
            <option value=" Buku">Buku</option>
            <option value=" Spanduk">Spanduk</option>
        </select> <br>
        <label for="size1" >Ukuran :</label>
        <select name="size1" class="form-control form-control-lg">
            <option value=" A4">A4</option>
            <option value=" A5">A5</option>
            <option value=" A6">A6</option>
            <option value=" B5">B5</option>

        </select><br>
        <label for="quantity1">Jumlah :<br><input type="number" name="quantity1" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        
        <label for="product2">Produk :</label>
        <select name="product2" class="form-control form-control-lg">
            <option value=" Brosur">Brosur</option>
            <option value=" Poster">Poster</option>
            <option value=" Kartu Nama">Kartu Nama</option>
            <option value=" Buku">Buku</option>
            <option value=" Spanduk">Spanduk</option>
        </select> <br>
        <label for="size2" >Ukuran :</label>
        <select name="size2" class="form-control form-control-lg">
            <option value=" A4">A4</option>
            <option value=" A5">A5</option>
            <option value=" A6">A6</option>
            <option value=" B5">B5</option>

        </select><br>
        <label for="quantity2">Jumlah :<br><input type="number" name="quantity2" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        
        <label for="product3">Produk :</label>
        <select name="product3" class="form-control form-control-lg">
            <option value=" Brosur">Brosur</option>
            <option value=" Poster">Poster</option>
            <option value=" Kartu Nama">Kartu Nama</option>
            <option value=" Buku">Buku</option>
            <option value=" Spanduk">Spanduk</option>
        </select> <br>
        <label for="size3" >Ukuran :</label>
        <select name="size3" class="form-control form-control-lg">
            <option value=" A4">A4</option>
            <option value=" A5">A5</option>
            <option value=" A6">A6</option>
            <option value=" B5">B5</option>

        </select><br>
        <label for="quantity3">Jumlah :<br><input type="number" name="quantity3" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        
        <label for="product4">Produk :</label>
        <select name="product4" class="form-control form-control-lg">
            <option value=" Brosur">Brosur</option>
            <option value=" Poster">Poster</option>
            <option value=" Kartu Nama">Kartu Nama</option>
            <option value=" Buku">Buku</option>
            <option value=" Spanduk">Spanduk</option>
        </select> <br>
        <label for="size4" >Ukuran :</label>
        <select name="size4" class="form-control form-control-lg">
            <option value=" A4">A4</option>
            <option value=" A5">A5</option>
            <option value=" A6">A6</option>
            <option value=" B5">B5</option>

        </select><br>
        <label for="quantity4">Jumlah :<br><input type="number" name="quantity4" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>
        
        <label for="product5">Produk :</label>
        <select name="product5" class="form-control form-control-lg">
            <option value=" Brosur">Brosur</option>
            <option value=" Poster">Poster</option>
            <option value=" Kartu Nama">Kartu Nama</option>
            <option value=" Buku">Buku</option>
            <option value=" Spanduk">Spanduk</option>
        </select> <br>
        <label for="size5" >Ukuran :</label>
        <select name="size5" class="form-control form-control-lg">
            <option value=" A4">A4</option>
            <option value=" A5">A5</option>
            <option value=" A6">A6</option>
            <option value=" B5">B5</option>

        </select><br>
        <label for="quantity5">Jumlah :<br><input type="number" name="quantity5" class="form-control form-control-lg mb-3 jumlah" placeholder="1"></label><br>

        <button type="submit" name="submit" class="btn btn-primary btn-lg">Pesan</button>
                <button type="reset" class="btn btn-danger btn-lg">Batal</button>
            </form>
        </div>
    </section>
</body>
</html>
