<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="peralihan.php">
        <input type="text" name="un" placeholder="nickname" autocomplete="off" required>
        <input type="number" name="ag" placeholder="age" autocomplete="off" required>
        <input type="text" name="fav" placeholder="your's favorite riddle" autocomplete="off" required>
        <input type="email" name="em" placeholder="email" autocomplete="off" required>
        <input type="text" name="sr" placeholder="saran(jika sudah pernah berkunjung)" autocomplete="off" required>
        <input type="submit" name="sub" class="sub"/>
    </form>
    <?php
    if(isset($_POST['sub']))
    {
        $un = $_POST['un'];
        $ag = $_POST['ag'];
        $fav = $_POST['fav'];
        $em = $_POST['em'];
        $num= $_POST['sr'];
    }

?>
</body>
</html>