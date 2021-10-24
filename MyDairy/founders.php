<!doctype html>
<html>
<head>
<meta charset="utf-8">    
<title>MyDairy</title>
<link rel="stylesheet" href="css/founders.css">
<link rel="stylesheet" href="css/header-footer.css">
<link rel="stylesheet" href="css/mininav.css">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="img/favicon.png" type="image/png">    
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <!---------------------------------HEADER------------------------------------>
    <?php
    include('header.php')
    ?>
    <!------------------------------MAIN------------------------------>
    <main class="main">
        <?php
        include('mininav.php')
        ?>    
            <div class="founders">
                <div class="founder">
                    <div class="graficyel">
                        <img src="img/yelisey.jpg">
                    </div>    
                    <div class="info">
                        <h4>Бочаров Єлисей</h4>
                        <text>Засновник додатку "MyDairy", студент 4-го курсу "ВСП ХКТФК НТУ "ХПІ""</text>
                    </div>   
                </div>    
                <div class="founder" id="second-founder">
                    <div class="graficdan">
                        <img src="img/daniil.jpg">
                    </div>
                    <div class="info">
                        <h4>Коноваленко Даніїл</h4>
                        <text>Засновник додатку "MyDairy", студент 4-го курсу "ВСП ХКТФК НТУ "ХПІ""</text>
                    </div>
                </div>
            </div>
            
        </div>       
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>   
    <script src="js/burger.js"></script> 
     <!-------------------------------FOOTER------------------------------------>
     
    <?php
    include('footer.php')
    ?>
</body>
</html>