<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $diller = implode(", ", $_POST["diller"]);
    $cinsiyet = $_POST["cinsiyet"];
    $mesaj = $_POST["mesaj"];

    $bilgiler = "$ad $soyad $email $telefon $diller $cinsiyet $mesaj\n";

    // Dosyaya bilgileri ekle
    $dosya = 'gonderilenler.txt';
    file_put_contents($dosya, $bilgiler, FILE_APPEND | LOCK_EX);
}
?>
