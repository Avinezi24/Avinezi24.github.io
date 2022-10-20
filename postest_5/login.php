<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="adminlogin.css">
    <title>Rgame</title>
</head>
<body>
    <div class="container">
        <div class="isi">
            <p class="wlcm">SELAMAT DATANG</p>
            <a href="#" class="button" id="btn">MASUK</a>
        </div>
        
    </div>

<div class="pop">
    <div class="isi2">
    <form method="POST">
        <input type="username" name="un" placeholder="username" autocomplete="off" required>
        <input type="password" name="pw" placeholder="password" autocomplete="off" required>
        <input type="submit" name="sub" class="sub"/>
    </form>
    </div>
</div>   
<?php
    if(isset($_POST['sub']))
    {
        $unn = $_POST['un'];
        $pww = $_POST['pw'];
        if ($unn=='admin' && $pww=='postest'){
            header("location:list.php");
            exit();}
        else{
            echo("inputan yang anda masukan salah");
        }
    }
?>
    <script src="login.js"></script>
</body>
</html>