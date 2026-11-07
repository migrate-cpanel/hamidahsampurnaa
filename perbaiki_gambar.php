<?php
// Script Perbaikan Symlink Gambar Sekolah Hamidah
// Dibuat khusus untuk menyambungkan storage/app/public ke public_html/storage

$target_gudang = $_SERVER['DOCUMENT_ROOT'] . '/../storage/app/public';
$link_shortcut = $_SERVER['DOCUMENT_ROOT'] . '/storage';

echo "<h2>🛠️ Status Perbaikan Gambar</h2>";
echo "<b>Lokasi Gudang Asli:</b> " . $target_gudang . "<br>";
echo "<b>Lokasi Shortcut Baru:</b> " . $link_shortcut . "<br><br>";

// 1. Cek apakah Gudang Asli ada?
if (!file_exists($target_gudang)) {
    die("❌ <b>GAGAL FATAL:</b> Folder Gudang Asli tidak ditemukan!<br>Pastikan folder <code>storage/app/public</code> ada di luar public_html.");
}

// 2. Cek apakah Shortcut lama masih nyangkut?
if (file_exists($link_shortcut)) {
    die("⚠️ <b>GAGAL:</b> Folder 'storage' masih ada di public_html.<br>Mohon hapus dulu folder 'storage' yang ada di public_html, lalu refresh halaman ini.");
}

// 3. Eksekusi Pembuatan Link
if (symlink($target_gudang, $link_shortcut)) {
    echo "✅ <b>BERHASIL!</b> Kabel sudah disambungkan.<br>";
    echo "Silakan cek website Anda, gambar berita seharusnya sudah muncul.";
} else {
    echo "❌ <b>GAGAL:</b> Server menolak membuat link. Hubungi penyedia hosting Anda.";
}
?>