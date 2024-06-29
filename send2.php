<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Ambil data dari form
    $name   = htmlspecialchars($_POST['name']);
    $phone  = htmlspecialchars($_POST['phone']);
    $alamat = htmlspecialchars($_POST['message']);
    $no_wa  = htmlspecialchars($_POST['noWA']);
    $link   = htmlspecialchars($_POST['link']);

    // Inisialisasi produk
    $products = [];
    $totalProducts = 0;

    // Mengambil data produk dari form
    for ($i = 0; $i <= 5; $i++) {
        if (!empty($_POST["tipe$i"]) && !empty($_POST["size$i"]) && !empty($_POST["jumlah$i"])) {
            $tipe   = htmlspecialchars($_POST["tipe$i"]);
            $size   = htmlspecialchars($_POST["size$i"]);
            $jumlah = htmlspecialchars($_POST["jumlah$i"]);
            $products[] = [
                'tipe' => $tipe,
                'size' => $size,
                'jumlah' => $jumlah,
            ];
            $totalProducts += $jumlah;
        }
    }

    // Validasi minimal satu produk dipilih
    if ($totalProducts === 0) {
        echo '<script>alert("Silahkan pilih setidaknya satu produk."); window.history.go(-1);</script>';
        exit;
    }

    // Pengolahan file yang diunggah (jika ada)
    $file_name = '';
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_name = basename($_FILES['file']['name']);
        move_uploaded_file($file_tmp, 'uploads/' . $file_name);
    }

    // Format pesan untuk WhatsApp
    $products_text = implode("%0D", array_map(function ($product) {
        return "Tipe: {$product['tipe']}, Size: {$product['size']}, Jumlah: {$product['jumlah']} pcs";
    }, $products));

    $message = "Nama: $name%0DNomor Handphone: $phone%0DAlamat: $alamat%0DProduk:%0D$products_text%0DWebsite: $link";

    // Jika ada file yang diunggah, tambahkan ke dalam pesan WhatsApp
    if (!empty($file_name)) {
        $message .= "%0DFile yang diunggah: $file_name";
    }

    // Redirect ke WhatsApp
    $whatsapp_url = "https://api.whatsapp.com/send?phone=$no_wa&text=$message";
    header("Location: $whatsapp_url");
    exit;
} else {
    echo '<script>window.history.go(-1);</script>';
}
?>
