<!doctype html>
<html>
<head>
<meta charset="utf-8">    
<title>MyDairy</title>
<link rel="stylesheet" href="css/contacts.css">
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
        <div class="contcontacts">
            <?php
            include('mininav.php')
            ?>   
            <div class="contacts">
                <div class="contactsbg">
                    <h4>Зв'язатися з нами</h4>
                </div>       
                <div class="textbg">
                    <div class="textinfo">
                        <h4>Зателефонуйте нам:</h4>
                        <div class="numbers">
                            <div class="fnumber">
                                <div class="fphone">
                                    <img class="graficphone" src="img/phone-logo.png"> 
                                </div>
                                <a href="tel:+38(099)666-66-66">+38(099)666-66-66</a>
                            </div>    
                            <div class="snumber">
                                <div class="sphone">
                                    <img class="graficphone" src="img/phone-logo.png"> 
                                </div>    
                                <a href="tel:+38(066)999-99-99">+38(066)999-99-99</a>
                            </div>    
                        </div>
                    </div>
                    <div class=linktelega>
                        <h4>Або напишіть:</h4>
                        <div class="link">
                        <a href="https://t.me/freeddan" target="_blank"><img class="grafictelegamain" src="img/telegram.png"></a>
                        <a class="textlink" href="https://t.me/freeddan" target="_blank">Telegram</a> 
                        </div> 
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