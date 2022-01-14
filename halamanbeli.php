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

<body style="margin-bottom: 5cm;">
  <!-- Sidebar -->
  <div class="w3-teal" style="padding-top: 10px;">
    <div class="w3-container">
      <div class="topnav">
          <a  href="homepage.php">Home</a>
          <a  href="profil.php">Profil</a>
          <a class="active">Beli</a>
      </div>
    </div>
  </div>
  <center>
    <div>
      <div class="grid-container" style="text-align: center; width: 50%;" >
        <div class="item" style="padding-top: 40px;">
          <img id="icon" src="https://indodax.com/v2/logo/png/color/btc.png" style="width: 200px; height: auto;">
        </div>
        <div class="item" style="text-align: left;">
          <h1>Tags</h1>
          <button class="button1"><b>Harga Beli</b></button>
          <button class="button1"><b>Harga Jual</b></button>
          <br>
          <button class="button1"><b>Volume Transaksi</b></button>
          <button class="button1"><b>Trade Currency</b></button>
        </div>
      </div>
      <div style="text-align: center; width: 50%;">
        <h1 id="judul">Judul</h1>
   
          <div class="grid-buy">
            <div class="grid-line">
              <table id="passing" style=" width: auto; float: right;" >
                <tr>
                  <th>Pairs</th>
                  <th>Harga</th>
                  <th>Beli</th>
                </tr>
                <tr>
                  <td>a</td>
                  <td>a Beli</td>
                  <td>a Jual</td>
                </tr>
              </table>
            </div>
            <div class="grid-line">
              <div style="float: left; margin-left: 25px;">
                <b>Input</b>
                <input type="number" id="angka" style="border-radius: 7px; margin-top: 60px;">
                <button id="tombol" onclick="myFunction()" href="detail.php" class="button1" 
                style="background-color: chartreuse;"><b>&nbsp;BELI&nbsp;</b></button>
              </div>
            </div>
          </div>
       
        <h3 id="detail" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Quo veritatis quas fuga a natus! Harum illum dignissimos ad 
          libero, ex corporis in ratione voluptates cupiditate temporibus 
          sed quidem? Ratione, at.</h3>
      </div>
    </div>
  </center>
  
    
    
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script src="script.js"></script>
<script>
  var myData = localStorage['objectToPass'];
  console.log(myData)
  klikTable2(myData)
  localStorage.removeItem( 'objectToPass' );
  localStorage.setItem( 'dataDetail', myData );

  $('#angka').on('change keyup paste',function(){
    console.log($('#angka').val())
    localStorage.setItem( 'dataAngka', `${$('#angka').val()}` );
  })

</script>
</body>
</html>