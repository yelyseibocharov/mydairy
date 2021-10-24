<?php
require_once 'database.php'
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8_general_ci">
    <title>Admin.pro</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/newstudent.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
                <div id="addstudentwindow" class="add_student_window">
                    <div class="top-button_close">
                        <a href="myschool.php"><img src="img/close.png"></a>
                    </div>
                    <h3>Додати учня</h3>

                    <?php 
/*
                    if (isset($_POST["Name"])) {
                        $sql = mysqli_query($conn, "INSERT INTO `mydb`.`student` (`idstudent`, `studentfname`, `studentsname`, `studentpname`, `studentnumber`, `studentdate`, `studentadress`, `studentnumbm`, `studentnumf`, `studentemail`, `class_idclass`) 
                        VALUES ('', '{$_POST['surname']}', '{$_POST['name']}', '{$_POST['patronymic']}', '{$_POST['tel']}', '{$_POST['bdate']}', '{$_POST['address']}', '{$_POST['telm']}', '{$_POST['telf']}', '{$_POST['email']}', '1')");
                    
                    if ($sql) {
                        echo '<p>Успешно!</p>';
                      } else {
                        echo '<p>Произошла ошибка: ' . mysqli_error($conn) . '</p>';
                      }
                    }
            */


  if (isset($_POST["name"])) {
    $sql="SELECT * from student where studentemail='{$_POST['email']}'";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<text class="people-add-error">'."Користувач з данним email вже є".'</text>';
        }
    else{
    $sql = mysqli_query($conn, "INSERT INTO `myd`.`student` (`idstudent`, `studentfname`, `studentsname`, `studentpname`, `studentnumber`, `studentdate`, `studentadress`, `studentnumbm`, `studentnumf`, `studentemail`, `class_idclass`) 
                        VALUES ('', '{$_POST['surname']}', '{$_POST['name']}', '{$_POST['patronymic']}', '{$_POST['tel']}', '{$_POST['bdate']}', '{$_POST['address']}', '{$_POST['telm']}', '{$_POST['telf']}', '{$_POST['email']}', '{$_POST['class']}' )");

    if ($sql) {
        echo '<text class="people-add">'.'Учень успішно доданий!'.'</text>';
      } else {
        echo '<text class="people-add-error">'.'Виникла технічна помилка в створенні учня. Спробуйте ще раз..'.'</text>';
      }
  }
}
?>
                    <form name="form" id="form" class="form" method="post">
                        <div class="student-info-content">
                            <div class="wrapper-column">
                                <div class="left-column_student">
                                    <div class="wrapper-input">
                                        <label>Введіть прізвище*</label>
                                        <input type="text" name="surname" class="name _req" placeholder="Абрамов">
                                    </div>
                                    <div class="wrapper-input">
                                        <label>Введіть І'мя*</label>
                                        <input type="text" name="name" class="name _req" placeholder="Абрам">
                                    </div>
                                    <div class="wrapper-input">
                                        <label>По батькові</label>
                                        <input type="text" name="patronymic" class="name" placeholder="Абрамович">
                                    </div>
                                    <div class="wrapper-input">
                                        <label>Email*</label>
                                        <input type="text" name="email" class="_req _email" placeholder="qwerty123@gmail.com">
                                    </div>
                                </div>
                                <div class="center-column_student">
                                    <div class="wrapper-input">
                                        <label>Введіть адресу*</label>
                                        <input type="text" name="address" class="_req" placeholder="м.Харків, вул.Архітекторів">
                                    </div>
                                    <div class="wrapper-input">
                                        <label>Дата народження*</label>
                                        <input type="date" name="bdate" class="_req">
                                    </div>
                                    <div class="wrapper-input">
                                        <label>Клас*</label>
                                        <select class="select-class _req _select" name="class">
                                            <option value="defoult">Обрати</option>
                                            <?php
$sql= "SELECT idclass, class_idclass, class from student s right join class c on c.idclass=s.class_idclass group by class";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>

                                            <option value="<?php echo $row['idclass']; ?>">
                                                <?php echo $row['class'];  ?>
                                            </option>

                                            <?php
  }
} else {
  echo "0 results";
}
?>
                                        </select>
                                    </div>
                                </div>
                                <div class="right-column_student">
                                    <div class="wrapper-input">
                                        <label>Номер телефону учня</label>
                                        <input type="tel" class="tel" name="tel" placeholder="Введіть номер телефону">
                                    </div>
                                    <div class="wrapper-input">
                                        <label>Номер телефону батька</label>
                                        <input type="tel" class="tel" name="telf" placeholder="Введіть номер телефону">
                                    </div>    
                                    <div class="wrapper-input">
                                        <label>Номер телефону мати</label>
                                        <input type="tel" class="tel" name="telm" placeholder="Введіть номер телефону">
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="bottom-button_stud">
                            <input id="but" type="submit" name="add" value="Створити">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/maskinput-newteacher.js"></script>
        <script src="js/validate-newteacher.js"></script>
    </main>
</body>

</html>