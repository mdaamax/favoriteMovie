<?php
$Name = 'Avatar'; # поменять
//$githubLink = 'http://php/index4.php'; # поменять
$director = 'Мда Макс';
$rating = '11/10';
$act = [
    0=>['name'=>'Коля', 'lastname'=>'Иванов'],
    1=>['name'=>'Вася', 'lastname'=>'Петров'],
    2=>['name'=>'Петя', 'lastname'=>'Сидоров'],
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
    <body>
    <section>
            <div class="card">
                <div class="poster">
                    <img src="poster.jpg"
                </div>
                <div class="details">
                    <h1><?php echo $Name; ?></h1>
                    <h3>Режисер by <?php echo $director; ?> </h3>
                    <h4>Рейтинг <?php echo $rating; ?></h4>
                </div>
            </div>
    </section>
    <section>

        <div class="actors">
            <h1>Актеры фильма:</h1>
            <h3>
                <? foreach ($act as $mas) {
                    echo $mas['name']." ".$mas['lastname'].'<br>';
                }
                ?>
            </h3>

        </div>

    </section>

    </body>
</html>