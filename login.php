<?php
$bildiri = ''; 

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        if ($email == 'b231210574@gmail.com' && $password == 'b231210574') {
            $bildiri = "Hoşgeldiniz";
            header("Location: Anasayfa.html");
            exit;
        } else {
            $bildiri = "Hatalı email veya şifre<br>(3 saniye içinde giriş sayfasına yönlendirileceksiniz.)";
            header("refresh:3; url=Gırıs.html");
            exit;
        }
    } else {
        $bildiri = "Lütfen email ve şifrenizi giriniz.";
        header("refresh:3; url=Gırıs.html");
    }
}
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Giriş</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-info text-center">
    <h1 class="text-danger"><?= $bildiri ?></h1>
</body>
</html>
