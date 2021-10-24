<?php
require_once '../database.php'
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>MyDairy</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <!---------------------------------HEADER------------------------------------>
    <?php
    include('header.php')
    ?>

    <!----------------------------------MAIN------------------------------------->
    <main class="main">
        <section class="backgroundline">
            <div class="wrapper-left">
                <img id="strelkaleft" src="img/strelkaleft.png">
            </div>
            <div class="slider">
                <div id="slide" class="slide">
                    <div class="infoteacher">
                        <div class="img">
                            <img class="graficteacher" src="img/teacher.png">
                        </div>
                        <div class="textt">
                            <h4>Викладачу</h4>
                            <text class="info-text">Дивіться розклад, відзначайте відвідування уроків та ставте
                                оцінки.</text>
                        </div>
                    </div>
                </div>
                <div id="slide" class="slide">
                    <div class="infostudent">
                        <div class="img">
                            <img class="graficstudent" src="img/student.png">
                        </div>
                        <div class="textt">
                            <h4>Учням</h4>
                            <text class="info-text">Дивіться розклад занять на тиждень, отримані оцінки та домашні
                                завдання.</text>
                        </div>
                    </div>
                </div>
                <div id="slide" class="slide active">
                    <div class="infomydairy">
                        <img class="infograficlogo" src="img/logov2.png">
                        <text class="info-text">MyDairy - електронний додаток, що створений для зручної праці й навчання
                            вчителів та учнів.</text>
                    </div>
                </div>
            </div>
            <div class="wrapper-right">
                <div id="stop-interval">
                    <img id="strelkaright" src="img/strelkaright.png">
                </div>
            </div>
            <script src="js/main.js"></script>
        </section>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="js/burger.js"></script>
    </main>
    <!---------------------------------FOOTER------------------------------------>
    <?php
    include('footer.php')
    ?>
</body>

</html>