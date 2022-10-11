<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="komen.css">
    <title>Document</title>
</head>
<body>
<div class="contain">
    <table border="2">
        <tr>
            <td colspan="2" align="center">KOMENTAR</td>
        </tr>
        <tr>
            <td>
                <ul>
                    <?php
                        ob_start();
                        include('Rarea.php');
                        ob_end_clean();
                    ?>
                    <li>nama : <?php echo($un)?></li> 
                    <li>umur : <?php echo($ag)?></li> 
                    <li>riddle favorite :<?php echo($fav) ?></li>
                    <li>email :<?php echo($em) ?></li>
                </ul>
            </td>
            <td>
                saran : <?php echo($num) ?>;
            </td>
        </tr>
    </table>
    <p><a href="index.html" >kembali</a></p>
</div>
</body>
</html>