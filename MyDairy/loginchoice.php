<!doctype html>
<html>
<head>
<meta charset="utf-8">    
<title>MyDairy</title>
<link rel="stylesheet" href="css/loginchoice.css">
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
   

    <!------------------------------MAIN------------------------------>
    <main class="main">
        <div class="choicecont">
            <div class="textchoice">
                <h4>Оберіть користувача</h4>
            </div>  
            <div class="circles">
                <a href="loginadmin.php" id="graficadmin" class="circle">
                    <img class ="graficadmin" src="img/admin-logo.png">    
                </a> 
            </div>      
        </div>   
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>   
    <script src="js//burger.js"></script> 
     <!-------------------------------FOOTER------------------------------------>
   
    <?php
    include('footer.php')
    ?>
</body>
</html>