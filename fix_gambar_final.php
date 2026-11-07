<?php
// Script Penghubung Gambar untuk Struktur Hosting 'All-in-Public'

// Kita ada di public_html.
// Kita ingin menghubungkan: public_html/storage/news_images  --->  public_html/storage/app/public/news_images

$target_asli = __DIR__ . '/storage/app/public/news_images';
$link_palsu  = __DIR__ . '/storage/news_images';

// 1. Buat folder tujuan asli jika belum ada (supaya upload berhasil)
if (!file_exists($target_asli)) {
    mkdir($target_asli, 0777, true);
    echo "✅ Folder gudang asli dibuat.<br>";
}

// 2. Buat symlink
if (file_exists($link_palsu)) {
    echo "⚠️ Link sudah ada. Hapus folder 'storage/news_images' dulu jika gambar masih error.<br>";
} else {
    symlink($target_asli, $link_palsu);
    echo "✅ BERHASIL: Jalur gambar sudah diperbaiki! <br>";
}
echo "<br>Silakan coba upload 1 berita baru untuk tes.";
?>