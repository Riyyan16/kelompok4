<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <title>Card</title>
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
                <form action="homepage.php" get="POST">
                <center>
                <input id="user-email" class="form-content" style="width: 100%" placeholder="Email" type="Email"name="Email" autocomplete="on" required/>
                <br>
                <br>
                <input id="user-password" class="form-content" style="width: 100%" placeholder="Password" type="Password"name="Password"  required/>
                <button id="submit-btn">LOGIN</button>
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