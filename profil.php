<?php
  require 'database.php';
  $bring = query("SELECT * from user");
  $data=0;
  $data = take($bring);
  if($data==0)
    echo "<script>location.href='index.php' </script>"
?>
<!DOCTYPE html>
<html lang="en">
<title>Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3_real.css">
<link rel="stylesheet" href="style.css">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="w3-teal" style="padding-top: 10px;">
    <div class="w3-container">
      <div class="topnav">
          <a  href="homepage.php">Home</a>
          <a class="active" href="profil.php">Profil</a>
          <a onclick="alert('Silahkan Pilih Koin di halaman Home')">Beli</a>
      </div>
    </div>
  </div>


<div class="row" style="padding: 10px;">
  <div class="leftcolumn">
    <div class="card">
      <h1  style="text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">PROFIL</h1>
        <div style="display: inline;">
          <p><img src="data:image/png;base64,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" 
            width="auto" height="200px" style="float:left">
        </div>
        <div style="margin-left: 210px;">
          <h3 >Username &nbsp;: <span id="username"><?= $data['username'] ?></span></h3>
          <h3 >Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span id="email"></span><?= $data['email'] ?></h3>
          <h3 >Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span id="Phone"></span>081234567890</h3>
          <br><br><br><br><br>
          <?= debug_to_console("tes") ?>
        </div>
    </p>
    
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card" style="overflow:scroll; height:600px;">
      <h2>Riwayat Pembelian</h2>
      <?php
          $ambil = query("SELECT * FROM riwayat");
          $tes = array();
          foreach($ambil as $item){
            if($item['email']==$data['email'])
              $tes[] = $item;
          }
          for ($i = 0; $i < count($tes); $i++){
              echo "<p> <b>Order koin</b> " .$tes[$i]['koin']. " Pada Tanggal " .$tes[$i]['tanggal']. "<br>Sebanyak = " 
              .$tes[$i]['jumlah']. " Berhasil dengan Harga " .$tes[$i]['harga']. "</p>";
          }
      ?>
    </div>
  </div>
</div>

<div class="footer">
    <img src="https://img.freepik.com/free-vector/hand-drawn-cryptocurrency-mining-set-doodle-background_140689-82.jpg?size=626&ext=jpg" alt="" style="width: 20%;" height="100px">
    <img src="https://img.freepik.com/free-vector/hand-drawn-cryptocurrency-mining-set-doodle-background_140689-82.jpg?size=626&ext=jpg" alt="" style="width: 20%;" height="100px">
    <img src="https://img.freepik.com/free-vector/hand-drawn-cryptocurrency-mining-set-doodle-background_140689-82.jpg?size=626&ext=jpg" alt="" style="width: 20%;" height="100px">
    <img src="https://img.freepik.com/free-vector/hand-drawn-cryptocurrency-mining-set-doodle-background_140689-82.jpg?size=626&ext=jpg" alt="" style="width: 20%;" height="100px">
    <img src="https://img.freepik.com/free-vector/hand-drawn-cryptocurrency-mining-set-doodle-background_140689-82.jpg?size=626&ext=jpg" alt="" style="width: 18%;" height="100px">
</div>

</body>
</html>
