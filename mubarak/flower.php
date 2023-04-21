<?php $nama=htmlspecialchars($_GET['nama']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css"/>
    <script type='text/javascript' src='https://cdn.prinsh.com/NathanPrinsley-effect/green-bintang-jatuh.js'></script>
    <link rel="icon" href="jabat.png" type="image/x-icon">
    <title><?php echo $nama ?>, Selamat Hari Raya Idul Fitri</title>
</head>
<body class="bg">
  <div class="im">
    <img class="im" src="ketupat.gif" style="margin-top: 20px;">
  </div>
  <style type="text/css">
        .bg{
          background: url('masjid.png') no-repeat center;
          background-size: cover;
          padding: 100px 40px;
          text-align: center;
          color: white;
        }
    </style>
  
  <div class="nprinsley-text-glitchan" style="">Hai, <?php echo $nama ?></div>
   <marquee><div class="nprinsley-text-rainbowan" >Selamat Hari Raya </div></marquee>
   <marquee><div class="nprinsley-text-rainbowan" >Idul Fitri 1444</div></marquee>
   <marquee><div class="nprinsley-text-rainbowan" align="center">Mohon Maaf Lahir Batin</div></marquee>
  <div class="">
      <img  class="is" src="bedug.gif" >
  </div>
  <audio loop="true" autoplay="true">
    <source src="fitri.mp3" type="audio/mpeg">
</audio>
  </body>
</html>
