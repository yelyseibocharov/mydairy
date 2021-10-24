<!doctype html>
<html>
<head>
<meta charset="utf-8">    
<title>MyDairy</title>
<link rel="stylesheet" href="css/loginteacher.css">
<link rel="stylesheet" href="css/header-footer.css">
<link rel="shortcut icon" href="img/favicon.png" type="image/png">    
<meta name="viewport" content="width=device-width">
</head>
<body>
    <!---------------------------------HEADER------------------------------------>
    <?php
    include('header.php')
    ?>
    

    <!------------------------------MAIN------------------------------>

    <main class="main">
        <div class="loginbg">   
            <form class="logincont">
                <h4>Авторизація </h4>  
                <input type="text" name="username" placeholder="Введіть логін">
                <input type="password" name="password" placeholder="Введіть пароль">  
                <div class="loginbottom">
                    <span><a href="#">Забув(ла) пароль?</a></span>
                    <input type="submit" name="submit" value="Увійти">
                </div>
            </form>    
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