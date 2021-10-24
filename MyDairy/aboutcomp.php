<!doctype html>
<html>
<head>
<meta charset="utf-8">    
<title>MyDairy</title>
<link rel="stylesheet" href="css/aboutcomp.css">
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
        <div class="continfo">
            <?php
            include('mininav.php')
            ?> 
            <div class="aboutus">
                <div class="aboutbg">
                    <h4>Про нас</h4>
                </div>       
                <div class="textbg">
                    <div class="textinfo">MyDairy  - електронний додаток, що створений 
                    для зручності праці й навчання вчителів та учнів.
                    Завдяки йому, учні можуть бачити розклад, домашні 
                    завдання на неділю та свої відмітки, а вчителі в свою чергу, 
                    свій розклад та список учнів у яких вони проводять уроки, 
                    ставити відмітки  про відвідування занять та оцінки за 
                    роботу на уроці.     
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