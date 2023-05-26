PDO veri ekleme kodları;<?php
include("baglantı.php");
if (isset($_POST['user'], $_POST['kullanıcıadı'])) {

    $adi = trim(filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING));
    $kullanıcıadı = trim(filter_input(INPUT_POST, 'kullanıcıadı', FILTER_SANITIZE_EMAIL));

    if (empty($user) || empty($kullanıcıadı)) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    if (!filter_var($kullanıcıadı, FILTER_VALIDATE_EMAIL)) {
        die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
    }

    try {

        $baglant = new PDO("mysql:host=localhost;db=muhammet16", "muhammet16", "");
        $baglant->exec("SET NAMES utf8");
        $baglant->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sorgu = $baglant->prepare("SELECT * FROM kullanicilar,sifre(kullanıcıadı, sifre) VALUES(?, ?, ?)");
        $sorgu->bindParam(1, $adi, PDO::PARAM_STR);
        $sorgu->bindParam(2, $kullanıcıad, PDO::PARAM_STR);

        $sorgu->execute();

        echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";

    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $baglant = null;
}