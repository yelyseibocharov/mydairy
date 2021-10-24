<?php
require_once '../database.php'
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">    
<title>MyDairy</title>
<link rel="stylesheet" href="css/loginadmin.css">
<link rel="stylesheet" href="css/header-footer.css">
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
   
   
   <?
   if (isset($_POST['loginadmin'])) {
    $user= "SELECT idteacher, teacheremail, tpassword FROM teacher WHERE teacheremail='{$_POST['username']}'";
    $result = $conn->query($user);
        if ($result->num_rows > 0) {
            $wrongpassword=true;
         while($row = $result->fetch_assoc()) {
            if (password_verify($_POST['password'], $row['tpassword'] )){
                $wrongpassword=false;
                $_SESSION['autorized']=$row['idteacher'];
                ?>
                <script type="text/javascript">
                setTimeout(function() {window.location.href = "../Adminpro/index.php"}, 1000);
                </script>
<?php
                break;
            }
            }
            if($wrongpassword){
               echo '<div class="alertlogin"><span>'."Невірний логін/пароль!".'</span></div>';
           }
            }
        }
            ?>
             

    <main class="main">
        <div class="loginbg">   
            <form class="logincont" method="POST" id="form" action="loginadmin.php">
                <h4>Авторизація </h4>  
                <input class="_req _email" type="text" name="username" placeholder="Введіть логін">
                <input class="_req" type="password" name="password" placeholder="Введіть пароль">  
                <div class="loginbottom">
                <input type="submit" name="loginadmin" value="Увійти">
                </div>
                <? if($_SESSION['autorized']=$row['idteacher']) {
                   ?>
                   <div class="alertlogin">
                        <span>Ви успішно авторизовані!</span>
                    </div>
                    <? 
                } 
                ?>
            </form>    
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