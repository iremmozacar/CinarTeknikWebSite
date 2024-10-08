<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini alalım
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $message = htmlspecialchars($_POST['message']);

    // E-posta gönderilecek adres
    $to = "iremozacaar@gmail.com";  // Buraya kendi e-posta adresinizi ekleyin

    // E-posta başlığı
    $subject = "Yeni İletişim Mesajı";

    // Mesaj içeriği
    $body = "İsim: $name\nEmail: $email\nTelefon: $phone\nAdres: $address\nMesaj: $message";

    // E-posta başlıkları
    $headers = "From: $email";

    // E-posta gönderimi
    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajınız başarıyla gönderildi!";
    } else {
        echo "Mesaj gönderilirken bir hata oluştu.";
    }
}
?>