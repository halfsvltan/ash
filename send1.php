<?php
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $name   = htmlspecialchars($_POST['name']);
    $phone  = htmlspecialchars($_POST['phone']);
    $alamat = htmlspecialchars($_POST['message']);
    $no_wa  = htmlspecialchars($_POST['noWA']);
    $link   = htmlspecialchars($_POST['link']);

    // Pengolahan produk
    $products = [];
    for ($i = 0; $i <= 5; $i++) {
        if (!empty($_POST["product$i"]) && !empty($_POST["size$i"]) && !empty($_POST["quantity$i"])) {
            $product = htmlspecialchars($_POST["product$i"]);
            $size    = htmlspecialchars($_POST["size$i"]);
            $quantity = htmlspecialchars($_POST["quantity$i"]);
            $products[] = "Produk: $product, Ukuran: $size, Jumlah: $quantity pcs";
        }
    }

    if (empty($products)) {
        echo "
        <script>
        alert('Silahkan isi setidaknya satu produk.');
        window.history.go(-1);
        </script>
        ";
        exit;
    }

    // Pengolahan file yang diunggah
    $file_name = '';
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_name = basename($_FILES['file']['name']);
        move_uploaded_file($file_tmp, 'uploads/' . $file_name);
    }

    // Format pesan untuk WhatsApp
    $products_text = implode("%0D", $products);
    $message = "Nama: $name%0DNomor Handphone: $phone%0DAlamat: $alamat%0DProduk:%0D$products_text%0DWebsite: $link";

    // Jika ada file yang diunggah, tambahkan ke dalam pesan WhatsApp
    if (!empty($file_name)) {
        $message .= "%0DFile yang diunggah: $file_name";
    }

    // Redirect ke WhatsApp
    header("Location: https://api.whatsapp.com/send?phone=$no_wa&text=$message");
    exit;
} else {
    echo "
    <script>
    window.history.go(-1);
    </script>
    ";
}
?>
