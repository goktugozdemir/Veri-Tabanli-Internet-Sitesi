<style>

<?php include 'style.css'; ?>

</style>
<?php

session_start(); 
   if ( isset($_SESSION['ıd']) ) { 
   
     header("Location:iletisim2.php"); 
   
     exit(); 
   
    } 
?>

<head>
	<title>
		İletişim
	</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div class = "wrapper">
    <header>
      <div class="logo">
        <h1 style="letter-spacing: 2px; color: white;">BURSA KÜTÜPHANELERİ</h1> 
      </div>
      <nav>
        <ul>
          <li><a href="AnaSayfa.php">ANA_SAYFA</a></li>
          <li><a href="Kitaplar.php">KİTAPLAR</a></li>
          <li><a href="ÜyeGirişi.php">ÜYE_GİRİŞİ</a></li>
          <li style="background-color: 7C606B; padding: 6px;"><a href="İletişim.php">İLETİŞİM</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <br><br>
        <div class="box">
          <h1 style="text-align: center; font-size: 30px;">Bize 7/24 Ulaşabilirsiniz</h1><br><br>
          <h1 style="text-align: center; font-size: 16px;">Telefon Numarası: 555555555555</h1>
          <h1 style="text-align: center; font-size: 16px;">E-posta adresi: 123@hotmail.com</h1>
        </div>
    </section>
    <footer>
      <br>
      <h1 style="font-size: 15px; color: white; text-align: center;">
      <li style="display: inline-block;">Telefon Numarası: 555555555555</li>
      <br>
      <li style="display: inline-block;">E-posta adresi: 123@hotmail.com</li></h1>
    </footer>

</body>