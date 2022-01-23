<?php
    require 'database.php';
    resetr();
    
    if( isset($_POST["submit"])){
        //jika sudah ditekan dijalankan function tambah
        $bool = true;
        $tes = $_POST;
        $data = query("SELECT * FROM user");
        foreach ($data as $item) { 
            if($tes['email']==$item['email']){  
                
                $vara = $item['id'];
                hapus($vara);
                tambah($item);
                echo "<script>alert('Selamat Datang Di Lord Crypto');</script>"; 
                echo "<script>location.href='homepage.php'</script>";
                $bool = false;
            }
        }
        
        if($bool){
            $ler = $tes['email'];
            echo "<script>alert('$ler Akun anda belum terdaftar');</script>"; 
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <title>Login - Lord Crypto</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <img src="Lord.png" width="100" height="100">
                <h2>LOGIN</h2>
                <div class="underline-title">

                </div>
            </div>
            <div class="form">
                <form method="post">
                <center>
                <input id="user-email" class="form-content" style="width: 100%" placeholder="Email" type="Email"name="email" autocomplete="on" required/>
                <br>
                <br>
                <input id="user-password" class="form-content" style="width: 100%" placeholder="Password" type="Password"name="password"  required/>
                <button id="submit-btn" type="submit" name="submit">LOGIN</button>
                <br> <br>
                <br>
                <br>
                <br>
                    <a href="" onClick="alert('Pakai Akun Google Saja')" id="signup">Belum punya akun?</a>
                </center>
                </form>
                
            </div>
        </div>
    </div>

</body>
</html>