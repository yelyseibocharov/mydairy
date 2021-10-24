<?php
require_once 'database.php'
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8_general_ci">   
        <title>Admin.pro</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/newteacher.css">
        <link rel="shortcut icon" href="img/favicon.png" type="image/png">   
        <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin&display=swap" rel="stylesheet">
    </head>
    <body>
    <!--------------HEADER--------------->
    <header>
        <?php
            include('header.php')
        ?>
    </header>        
        
<!--------------MAIN--------------->      
    <main>
        <div class="admincontent">
        <?php
            include('nav.php')
        ?>  
            <div class="tabs-content">      
                <div id="addteacherwindow" class="add_teacher_window">
                    <div class="top-button_close">
                        <a href="myschool.php"><img src="img/close.png"></a>     
                    </div>
                    <h3>Додати вчителя</h3>
<?php
                    
                   
                if (isset($_POST["name"])) { 
                    $check=1;
                $sql="SELECT * from teacher where teacheremail='{$_POST['email']}'";
                $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    echo '<text class="people-add-error">'."Користувач з данним email вже є".'</text>';
                    }
                    else {
                        
                        if($_POST["admin-check"]==1){  
                            $chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
                            $max=10;
                            $size=StrLen($chars)-1;
                            $password=null;
                            while($max--)
                            $password.=$chars[rand(0,$size)];
                            $passwords=password_hash($password, PASSWORD_DEFAULT);
                            $sql = mysqli_query($conn, "INSERT INTO `myd`.`teacher` (`idteacher`, `teacherfname`, `teachersname`, `teacherpname`, `teacherdate`, `teachernumber`, `teacheradr`, `teacheremail`, `tpermission`, `tpassword`, `school_idschool`, `osvita_idosvita`) 
                            VALUES ('', '{$_POST['surname']}', '{$_POST['name']}', '{$_POST['patronymic']}', '{$_POST['bdate']}', '{$_POST['tel']}', '{$_POST['address']}', '{$_POST['email']}','1','{$passwords}' , '$check', '{$_POST['osvita']}')");
                            if ($sql) {
                                $mail=$_POST['email'];
                                mail($mail, "Ваш тимчасовий пароль. Ваш MyDairy.", "Вітаємо у системі, Ваш одноразовий пароль для доступу до додатку, будь ласка, змінить його при першому вході: $password");
                                echo '<text class="people-add">'.'Вчитель успішно доданий!'.'</text>';
                            } 
                            else {
                                echo '<text class="people-add-error">'.'Виникла помилка в створенні вчителя. Спробуйте ще раз..'.'</text>';
                            }
                        }
                        else{
                            $sql = mysqli_query($conn, "INSERT INTO `myd`.`teacher` (`idteacher`, `teacherfname`, `teachersname`, `teacherpname`, `teacherdate`, `teachernumber`, `teacheradr`, `teacheremail`, `tpermission`, `tpassword`, `school_idschool`, `osvita_idosvita`) 
                            VALUES ('', '{$_POST['surname']}', '{$_POST['name']}', '{$_POST['patronymic']}', '{$_POST['bdate']}', '{$_POST['tel']}', '{$_POST['address']}', '{$_POST['email']}','0',' ' , '$check', '{$_POST['osvita']}')");
                            if ($sql) {
                            $mail=$_POST['email'];
                            mail($mail,"MyDairy. Ваш MyDairy", "Вітаємо у системі, Ви зареєстровані у навчальному закладі, та незабаром, після оновлення додатку Ви отримаєте логін/пароль від свого акаунту :)");
                            echo '<text class="people-add">'.'Вчитель успішно доданий!'.'</text>';
                            } 
                            else {
                                    echo '<text class="people-add-error">'.'Виникла помилка в створенні вчителя. Спробуйте ще раз..'.'</text>';}
                              }
                            }
                        }

?>  
                    
                    <form id="form" class="form" action="#" method="POST">
                        <div class="teacher-info-content">
                            <div class="wrapper-column">
                                <div class="left-column_teacher">
                                    <div class="wrapper-input">    
                                        <label>Введіть прізвище*</label>
                                        <input type="text" name="surname" class="name _req _letter" placeholder="Абрамов">
                                    </div>
                                    <div class="wrapper-input">
                                        <label>Введіть І'мя*</label>
                                        <input type="text" name="name" class="name _req _letter" placeholder="Абрам">
                                    </div>
                                    <div class="wrapper-input">    
                                        <label>По батькові</label>
                                        <input type="text" name="patronymic" class="name _letter" placeholder="Абрамович">
                                    </div>    
                                </div>
                                <div class="center-column_teacher">
                                    <div class="wrapper-input">
                                        <label>Введіть адресу*</label>
                                        <input type="text" name="address" class="_req">
                                    </div>
                                    <div class="wrapper-input">
                                        <label>Дата народження*</label>
                                        <input type="date" name="bdate" class="_req"> 
                                    </div>    
                                    <div class="wrapper-input">
                                        <label>Номер телефону*</label>
                                        <input type="tel" class="tel _req" name="tel" placeholder="Введіть номер телефону">
                                    </div>
                                </div>    
                                <div class="right-column_teacher">
                                    <div class="wrapper-input">
                                        <label>Освіта*</label>
                                        <select class="select-osvita _req _select" name="osvita">
                                            <option value="defoult">Обрати</option>
                                            <?php
$sql= "SELECT * from osvita o join teacher t on t.osvita_idosvita=o.idosvita left join school s on t.school_idschool=s.idschool group by osvita";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>

                                    <option value="<?php echo $row['osvita_idosvita'];?>"><?php echo $row['osvita'];  ?></option>

<?php
  }
} else {
  echo "0 results";
}
?>
                                    </select>
                                    </div>
                                    <div class="wrapper-input">
                                        <label>Email*</label>
                                        <input type="text" name="email" class="_req _email" placeholder="qwerty123@gmail.com">
                                    </div>    
                                </div>  
                            </div>  
                        </div>
                        <div class="bottom-button_teacher">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="admin-check" class="admin-check" value=1>
                                <label>Права адміністратора</label>
                            </div>
                            <input type="submit" name="add" value="Створити">
                        </div>  
                    </form>       
                    </div>       
                </div>    
             </div>  
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/maskinput-newteacher.js"></script>
        <script src="js/validate-newteacher.js"></script>
    </main>
    </body>
</html> 