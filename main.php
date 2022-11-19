<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css"/>
    <?php include 'index.php'; ?>
</head>

<body>

    <div class="flex-container">

        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>


        <div class="about me">

            <h1><?php echo $p ?></h1>

            <div>
                <?php
                echo "<img src=img/php.jpg>";
                ?>
                
            </div>

                <div class="data">
                    

                    <div class="fullname">
                        <p>Меня зовут
                        <?php echo $name,' ',$surname,'<br>';
                        echo 'город',' ',$city;?>
                        </p>

                        <p> Мне 
                        <?php echo $age;?>
                        лет</p>
                        <p><i>Мы научились создавать переменные  и изучили операции с ними</i></p>
                    </div>
                </div>

                <div class="knowledge">
                    <?php include 'knowledge.inc.php';?>
                    <?php
                    echo $a,'',$b,'',$c;
                    ?><br>

                    <?php
                        $a=10;
                        $b=20;
                        $c=$a+$b;
                        echo $c;
                    ?><br>
                    <?php
                        echo $d;
                    ?>
                </div>

                <div class="article">
                    <p class="text">
                        vini vidi vici
                    </p>
                </div>
        </div>

        <?php include 'footer.inc.php'?>
    </div>
</body>