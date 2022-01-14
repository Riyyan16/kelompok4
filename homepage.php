<!DOCTYPE html>
<html lang="en">
<title>Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="width: 300px; display:none; background-color: #04AA6D;" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large w3-button" style="background-color: red;;">Close &times;</button>
  <div style="text-align: center;">
    <img style="width: 200px; margin-top: 10px;" src="Lord.png">
    <hr>
    <li class="w3-bar-item ">Nama: UserName</li>
    <li class="w3-bar-item ">Email: UserName@gmail.com</li>
  </div>
  <hr>
  <a href="profil.php" class="w3-bar-item w3-button" style="background-color: #4abe4d;"><b>Cek Profile</b></a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <p id="email" style="display: inline;">Disini Email Boss</p>
  <div class="w3-container">
    <div class="topnav">
        <a class="active" href="homepage.php">Home</a>
        <a href="profil.php">Profil</a>
        <a onclick="alert('Silahkan Pilih Koin')">Beli</a>
    </div>
  </div>
</div>
<div class="slideshow-container" style="text-align: center; padding: 30px;">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="logo.png" style width="230" height="200">
    <div class="text"></div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="Lord.png" style width="230" height="200">
    <div class="text"></div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="unnamed.jpg" style width="230" height="200">
    <div class="text"></div>
  </div>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
  <div style="padding: 20px; text-align: center;">
    <p><b>Update data dalam: <span id="timer">0</span> Detik</b></p>
    <input type="text" value="" id="tes">
    <button id="cari" style="width: auto; height: auto;">Cari</button>
    <br>
  </div>
  <div class="grid-container" >
  <div class="item" >
    <table id="coins">
      <tr>
        <th >Pairs</th>
        <th>Harga</th>
        <th>Beli</th>
        <th>jual</th>
        <th>Tertinggi 24h</th>
        <th>Terendah 24h</th>
      </tr>
    </table>
  </div>
  <div class="item" >
    <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; "> Top Performance</h1>
    <table id="top">
      <tr>
        <th>Pairs</th>
        <th>Harga</th>
        <th>Beli</th>
        <th>Persentase</th>
      </tr>
    </table>
    <br>
    <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> Top Loser</h1>
    <table id="loser">
      <tr>
        <th style="background-color: red;">Pairs</th>
        <th style="background-color: red;">Harga</th>
        <th style="background-color: red;">Beli</th>
        <th style="background-color: red;">Persentase</th>
      </tr>
    </table>
  </div>
  </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script src="script.js">
</script>
<script>
  showSlides()
  console.log(globalklik)
  updateDataAPI()
</script>
</body>
</html>
