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
            <p>Mohon Isi Data Dibawah Ini:</p>
            <form action="send.php" method="post" enctype="multipart/form-data">
                <label for="name">Nama:<br>
                    <input type="text" name="name" class="form-control form-control-lg mb-3 nama" placeholder="Masukan Nama" required>
                </label>
                <label for="phone">No. Handphone:<br>
                    <input type="number" name="phone" class="form-control form-control-lg mb-3 phone" placeholder="08*********" required>
                </label>
                <input type="hidden" name="noWA" value="62881025326521">
                <input type="hidden" name="link" value="ASH.com">
                <label for="message">Alamat:<br>
                    <textarea name="message" class="form-control form-control-lg" rows="4" placeholder="Masukan Alamat"></textarea>
                </label><br>

                <!-- Produk 1 -->
                <label for="tipe0">Bahan:<br>
                    <select name="tipe0" class="form-control form-control-lg">
                        <option value="20s">Cotton Combed 20s</option>
                        <option value="24s">Cotton Combed 24s</option>
                        <option value="30s">Cotton Combed 30s</option>
                    </select>
                </label><br>
                <label for="sablon0">Mau diapain?<br>
                    <select name="sablon0" class="form-control form-control-lg">
                        <option value="Plastisol">Sablon Plastisol</option>
                        <option value="DTF">Sablon DTF</option>
                    </select>
                </label><br>
                <label for="size0">Ukuran:<br>
                    <select name="size0" class="form-control form-control-lg">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="3XL">3XL</option>
                    </select>
                </label><br>
                <label for="jumlah0">Jumlah:<br>
                    <input type="number" name="jumlah0" class="form-control form-control-lg mb-3 jumlah" placeholder="1">
                </label><br>

                <!-- Produk 2 -->
                <label for="tipe1">Bahan:<br>
                    <select name="tipe1" class="form-control form-control-lg">
                        <option value="20s">Cotton Combed 20s</option>
                        <option value="24s">Cotton Combed 24s</option>
                        <option value="30s">Cotton Combed 30s</option>
                    </select>
                </label><br>
                <label for="sablon1">Mau diapain?<br>
                    <select name="sablon1" class="form-control form-control-lg">
                        <option value="Plastisol">Sablon Plastisol</option>
                        <option value="DTF">Sablon DTF</option>
                    </select>
                </label><br>
                <label for="size1">Ukuran:<br>
                    <select name="size1" class="form-control form-control-lg">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="3XL">3XL</option>
                    </select>
                </label><br>
                <label for="jumlah1">Jumlah:<br>
                    <input type="number" name="jumlah1" class="form-control form-control-lg mb-3 jumlah" placeholder="1">
                </label><br>

                <!-- Produk 3 -->
                <label for="tipe2">Bahan:<br>
                    <select name="tipe2" class="form-control form-control-lg">
                        <option value="20s">Cotton Combed 20s</option>
                        <option value="24s">Cotton Combed 24s</option>
                        <option value="30s">Cotton Combed 30s</option>
                    </select>
                </label><br>
                <label for="sablon2">Mau diapain?<br>
                    <select name="sablon2" class="form-control form-control-lg">
                        <option value="Plastisol">Sablon Plastisol</option>
                        <option value="DTF">Sablon DTF</option>
                    </select>
                </label><br>
                <label for="size2">Ukuran:<br>
                    <select name="size2" class="form-control form-control-lg">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="3XL">3XL</option>
                    </select>
                </label><br>
                <label for="jumlah2">Jumlah:<br>
                    <input type="number" name="jumlah2" class="form-control form-control-lg mb-3 jumlah" placeholder="1">
                </label><br>

                <!-- Produk 4 -->
                <label for="tipe3">Bahan:<br>
                    <select name="tipe3" class="form-control form-control-lg">
                        <option value="20s">Cotton Combed 20s</option>
                        <option value="24s">Cotton Combed 24s</option>
                        <option value="30s">Cotton Combed 30s</option>
                    </select>
                </label><br>
                <label for="sablon3">Mau diapain?<br>
                    <select name="sablon3" class="form-control form-control-lg">
                        <option value="Plastisol">Sablon Plastisol</option>
                        <option value="DTF">Sablon DTF</option>
                    </select>
                </label><br>
                <label for="size3">Ukuran:<br>
                    <select name="size3" class="form-control form-control-lg">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="3XL">3XL</option>
                    </select>
                </label><br>
                <label for="jumlah3">Jumlah:<br>
                    <input type="number" name="jumlah3" class="form-control form-control-lg mb-3 jumlah" placeholder="1">
                </label><br>

                <!-- Produk 5 -->
                <label for="tipe4">Bahan:<br>
                    <select name="tipe4" class="form-control form-control-lg">
                        <option value="20s">Cotton Combed 20s</option>
                        <option value="24s">Cotton Combed 24s</option>
                        <option value="30s">Cotton Combed 30s</option>
                    </select>
                </label><br>
                <label for="sablon4">Mau diapain?<br>
                    <select name="sablon4" class="form-control form-control-lg">
                        <option value="Plastisol">Sablon Plastisol</option>
                        <option value="DTF">Sablon DTF</option>
                    </select>
                </label><br>
                <label for="size4">Ukuran:<br>
                    <select name="size4" class="form-control form-control-lg">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="3XL">3XL</option>
                    </select>
                </label><br>
                <label for="jumlah4">Jumlah:<br>
                    <input type="number" name="jumlah4" class="form-control form-control-lg mb-3 jumlah" placeholder="1">
                </label><br>

                <!-- Produk 6 -->
                <label for="tipe5">Bahan:<br>
                    <select name="tipe5" class="form-control form-control-lg">
                        <option value="20s">Cotton Combed 20s</option>
                        <option value="24s">Cotton Combed 24s</option>
                        <option value="30s">Cotton Combed 30s</option>
                    </select>
                </label><br>
                <label for="sablon5">Mau diapain?<br>
                    <select name="sablon5" class="form-control form-control-lg">
                        <option value="Plastisol">Sablon Plastisol</option>
                        <option value="DTF">Sablon DTF</option>
                    </select>
                </label><br>
                <label for="size5">Ukuran:<br>
                    <select name="size5" class="form-control form-control-lg">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="3XL">3XL</option>
                    </select>
                </label><br>
                <label for="jumlah5">Jumlah:<br>
                    <input type="number" name="jumlah5" class="form-control form-control-lg mb-3 jumlah" placeholder="1">
                </label><br>

                <!-- Input file -->
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
