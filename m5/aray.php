<?php
echo "<h3>Array Biasa</h3>";

// Array kendaraan
$arrKendaraan = ["Mobil", "Pesawat", "Kereta Api", "Kapal Laut"];

// Tampilkan dengan loop
for ($i = 0; $i < count($arrKendaraan); $i++) {
    echo ($i + 1) . ". " . $arrKendaraan[$i] . "<br>";
}

echo "<br>";

// Array kota
$arrKota = [];
$arrKota[] = "Jakarta";
$arrKota[] = "Medan";
$arrKota[] = "Bandung";
$arrKota[] = "Malang";
$arrKota[] = "Sulawesi";

echo "<h3>Daftar Kota</h3>";
foreach ($arrKota as $index => $kota) {
    echo ($index + 1) . ". " . $kota . "<br>";
}

echo "<hr>";
echo "<h3>Array Asosiatif</h3>";

// Array alamat
$arrAlamat = [
    "Rona" => "Banjarmasin",
    "Dhiwa" => "Bandung",
    "Ilham" => "Medan",
    "Oku" => "Hongkong"
];

echo "<b>Alamat:</b><br>";
foreach ($arrAlamat as $nama => $alamat) {
    echo $nama . " : " . $alamat . "<br>";
}

echo "<br>";

// Array NIM
$arrNim = [];
$arrNim["Rona"] = "11011112";
$arrNim["Dhiwa"] = "11011101";
$arrNim["Ilham"] = "11011309";
$arrNim["Oku"] = "11014765";
$arrNim["Fadhlan"] = "11011113";

echo "<b>NIM:</b><br>";
foreach ($arrNim as $nama => $nim) {
    echo $nama . " : " . $nim . "<br>";
}
?>