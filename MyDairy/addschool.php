<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>MyDairy</title>
    <link rel="stylesheet" href="css/addschool.css">
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
    <?php
if (isset($_POST["schoolnameabr"])){
$to = "yourmail@gmail.com"; 
$message = "Повна назва школи: ".$_POST['schoolname']."<br>";
$message .= "Скорочена назва школи: ".$_POST['schoolsname']."<br>";
$message .= "ІПН: ".$_POST['ipn']."<br>";
$message .= "Місто: ".$_POST['city']."<br>";
$message .= "Адреса: ".$_POST['address']."<br>";
$message .= "Телефон: ".$_POST['phone']."<br>";
$message .= "ПІБ Директора: ".$_POST['dirname']."<br>";
$message .= "Телефон Директора: ".$_POST['number']."<br>";
$message .= "email Директора: ".$_POST['email']."<br>";
$message .= "Коментар від Директора: ".$_POST['comm']."<br>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $message, $headers);
}
?>
    <main class="main">
        <div class="addschoolcont">
            <span class="head"><h4>Реєстрація навчального закладу</h4></span>
            <form id="form" class="form_cont" method="POST">
                <div class="forma">
                    <div class="schoolcont">
                        <h4>Школа</h4>
                        <div class="wrapper">
                            <label for="schoolsname">Скорочена назва*</label>
                            <input class="_req" type="text" name="schoolsname"
                                    placeholder="Введіть скорочену назву">
                        </div>
                        <div class="wrapper">
                            <label for="schoolnameabr">Повна назва*</label>
                            <input class="_req" type="text" name="schoolnameabr"
                                    placeholder="Введіть повну назву">
                        </div> 
                        <div class="wrapper">           
                            <label for="ipn">ІПН*</label>
                            <input class="_req _ipn" type="text" name="ipn" maxlength="10" placeholder="Введіть ІПН" onkeyup="this.value = this.value.replace(/[^\d]/g,'');">
                        </div>
                        <div class="wrapper">                            
                            <label for="city">Місто*</label>
                            <input class="_req" type="text" name="city" placeholder="Введіть місто">
                        </div>
                        <div class="wrapper">    
                            <label for="address">Адреса*</label>
                            <input class="_req" type="text" name="address"
                                    placeholder="Введіть адресу">
                        </div>
                        <div class="wrapper">                                    
                            <label for="schoolphone">Телефон*</label>
                            <input class="tel _req" type="text" name="schoolphone"
                                    placeholder="Введіть телефон НЗ">
                        </div>            
                    </div>
                    <div class="directorcont">
                        <h4>Директор</h4>
                        <div class="wrapper"> 
                            <label for="dirname">ПІБ*</label>
                            <input class="_req" type="text" name="dirname"
                                    placeholder="Введіть ПІБ">
                        </div>                                    
                        <div class="wrapper">         
                            <label for="dirphone">Телефон*</label>
                            <input class="tel _req" type="text" name="dirphone"
                                    placeholder="Введіть номер телефону">
                        </div>  
                        <div class="wrapper">         
                            <label for="email">Email*</label>
                            <input class="_req _email" type="text" name="email"
                                    placeholder="Введіть поштову адресу">
                        </div>  
                        <div class="wrapper">         
                            <label for="comm">Коментар</label>
                            <textarea name="comm"placeholder="Введіть коментар..."></textarea> 
                        </div>    
                    </div>
                </div>
                <div class="buttoncont">
                    <input type="submit" value="Надіслати" name="ok">
                </div>
            </form>
        </div>
    </main>

    <!---------------------------------FOOTER------------------------------------>

    <?php
    include('footer.php')
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>   
<script src="js/burger.js"></script> 
<script src="js/maskinput.js"></script>
<script src="js/valid.js"></script>
</html>