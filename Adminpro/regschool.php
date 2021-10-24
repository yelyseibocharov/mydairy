<?php
require_once 'database.php'
?>
<!doctype html>
<html>
    <head>
        <meta charset utf-8>
        <title>Admin.pro</title>
        <link rel="stylesheet" href="css/regschool.css">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin&display=swap" rel="stylesheet">
    </head>
    <body>
    <!--------------HEADER--------------->
    <header>
        <div class="header">
            <div class="logo">
                <a href="regschool.php">
                    <h1>Admin.pro</h1> 
                </a>       
            </div>                
        </div>
    </header>        
        
<!--------------MAIN--------------->      
    <main>
        <div class="admincontent">
            <div class="tabs-content">       
                <div id="tab-1" class="tabs-content_item_1">     
                    <div class="headtab">
                        <h3>Вітаємо у додатку MyDairy!</h3>
                        <div class="poloska">
                            <div class="activerect-1"></div>
                        </div>    
                    </div>
                    <form action="#" method="GET">
                    <div class="content-tab">
                        <div class="leftcont">
                            <text>Введіть назву навчального закладу</text>
                            <input type="text" name="schoolname" placeholder="Київська Загальнооствітня Школа №1">
                            <text>Введіть скорочену назву</text>
                            <input type="text" name="abbreviation" placeholder="КЗШ №1">    
                            <text>Номер телефону НЗ</text>
                            <input type="text" name="phonenumber" placeholder="380996699666">
                            <text>Тип НЗ</text>
                            <select class="selecttype">
                                <option>Обрати</option>
                                <?php
$sql= "SELECT * FROM tip";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
                            <option><?php echo $row["tip"];  ?></option>
                            <?php
  }
} else {
  echo "0 results";
}?>
                            </select>
                            <text>Форма Власності </text>
                            <select class="selectform">
                                <option>Обрати</option>
                                <?php
$sql= "SELECT * FROM forma";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
                            <option><?php echo $row["forma"];  ?></option>
                            <?php
  }
} else {
  echo "0 results";
}?>
                            </select>
                            <text>Структура НЗ</text>
                            <select class="selectform">
                                <option>Обрати</option>
                                <?php
$sql= "SELECT * FROM structure";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
                            <option><?php echo $row["structure"];  ?></option>
                            <?php
  }
} else {
  echo "0 results";
}?>
        
                            </select>
                        </div>
                        <div class="rightcont">
                            <text>Місцезнаходження НЗ</text>
                            <select class="selectlocation">
                                <?php
$sql= "SELECT * FROM obl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
                            <option><?php echo $row["obl"];  ?></option>
                            <?php
  }
} else {
  echo "0 results";
}?>
                            </select>    
                             
                            <text>Поштовий індекс</text>
                            <input type="text" name="dirname" placeholder="61000">
                            <text>Адреса НЗ</text>
                            <input type="text" name="dirname" placeholder="м.Харків, вулиця МАНІЗЕРА 15">
                            <text>Дата створення НЗ</text>
                            <input type="text" name="dirname" placeholder="гггг/мм/дд"> 
                        </div>  
                    </div>  
                    <div class="next-1">
                      <text>Перевірте вказані дані та перейдіть далі</text>    
                      <input type="submit" class="nextb" id="nextb" href="#" value="Далі">
                    </div>    
                    </form>
                </div>            
        </main>
    </body>
</html> 