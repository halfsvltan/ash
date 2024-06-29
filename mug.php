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
            <form action="send.php" method="post" enctype="multipart/form-data">
                <label for="name">Nama :<br>
                    <input type="text" name="name" class="form-control form-control-lg mb-3 nama" placeholder="Masukan Nama" required>
                </label>
                <label for="phone">No. Handphone :<br>
                    <input type="number" name="phone" class="form-control form-control-lg mb-3 phone" placeholder="08*********" required>
                </label>
                <input type="hidden" name="noWA" value="62881025326521">
                <input type="hidden" name="link" value="ASH.com">
                <label for="message">Alamat :<br>
                    <textarea name="message" class="form-control form-control-lg" rows="4" placeholder="Masukan Alamat" required></textarea>
                </label><br>

                <!-- Produk 1 -->
                <label for="tipe0">Warna :</label>
                <select name="tipe0" class="form-control form-control-lg">
                    <option value=" Hitam">Hitam</option>
                    <option value=" Putih">Putih</option>
                </select><br>
                <label for="sablon0">Mau diapain?</label>
                <select name="sablon0" class="form-control form-control-lg">
                    <option value=" DTF">Sablon DTF</option>
                </select><br>
                <label for="jumlah0">Jumlah :<br>
                    <input type="number" name="jumlah0" class="form-control form-control-lg mb-3 jumlah" placeholder="1">
                </label><br>

                <!-- Produk 2 -->
                <label for="tipe1">Warna :</label>
                <select name="tipe1" class="form-control form-control-lg">
                    <option value=" Hitam">Hitam</option>
                    <option value=" Putih">Putih</option>
                </select><br>
                <label for="sablon1">Mau diapain?</label>
                <select name="sablon1" class="form-control form-control-lg">
                    <option value=" DTF">Sablon DTF</option>
                </select><br>
                <label for="jumlah1">Jumlah :<br>
                    <input type="number" name="jumlah1" class="form-control form-control-lg mb-3 jumlah" placeholder="1">
                </label><br>
                <label for="file">Upload Desain:<br>
                    <input type="file" name="file" class="form-control form-control-lg">
                </label><br>
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Pesan</button>
                <button type="reset" class="btn btn-danger btn-lg">Batal</button>
            </form>
        </div>
    </section>
</body>
</html>
