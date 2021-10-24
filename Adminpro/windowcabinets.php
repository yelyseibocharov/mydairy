<?php
require_once 'database.php';
if(isset($_GET["del-cab-button"])){
    $sql = "DELETE from cabinet where idcabinet='{$_GET['cabinets']}'"; 
    if ($conn->query($sql) === TRUE) {
        header("Refresh:1; url=windowcabinets.php"); 
        echo '<text class="cab-add-error">'."Успішно видалено!".'</text>';   
    }
    else{
        echo '<text class="cab-add-error">'."Помилка".'</text>';
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8_general_ci">   
        <title>Admin.pro</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/windowcabinets.css">
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
                <div class="cabinets">     
                    <div class="headtab">
                        <h3>Кабінети</h3>
                        <div class="button-add-cab">   
                            <a href="#addcab">Додати кабінет</a>
                        </div>  
                    </div>      
                    <form class="cablist" method="GET" action="#">
                        <select size="3" name="cabinets">
                        <?php
$sql= "SELECT * FROM cabinet";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
                            <option value="<?php echo $row["idcabinet"]?>"><?php echo "№{$row["cabinetnumber"]}". "  ". $row["cabinetname"]."   ". "({$row["cabinetplace"]} місць)";  ?></option>
                            <?php
  }
} else {
  echo "0 results";
}
?>
                        </select> 
                        <div class="button-del">
                           <a href="#delcab">Видалити</a>
                        </div>
                        <div id="delcab" class="delcab">
                            <h3>Підтвердіть дію</h3>
                            <div class="buttons">
                                <input type="submit" name="del-cab-button" value="Видалити">
                                <div class="button-back">
                                    <a href="#delcab">Назад</a>
                                </div>    
                            </div>    
                        </div>    
                    </form>
                    <form id="form" class="addcab" action="#" method="GET">
                        <div class="add_cab_head">
                            <img href="#" src="img/close.png">
                        </div>    
                            <h3>Налаштування кабінету</h3>
                        <div class="addcabcontent">        
                            <div class="cabnamber">
                                <label>Введіть № кабінету</label>
                                <input class="_req" type="number" min="1" max="100" onkeypress="if(this.value.length&gt;2) return false;" name="cabnamber">
                            </div>
                            <div class="cabplaces">
                                <label>Введіть кількість місць</label>
                                <input class="_req"type="number" min="1" max="100" onkeypress="if(this.value.length&gt;2) return false;" name="cabnumber">
                            </div>
                            <div class="cabname">
                                <label>Назва кабінету</label>
                                <input type="cabtext" class="cabtext _req" name="cabname" placeholder="Кабінет математики">
                            </div>    
                        </div>    
                        <div class="button-addcab">
                            <input type="submit" name="button-addcab" href="#addcab" value="Створити"> 
                        </div>    
                    </form>  
                    <div class="bottom-button">
                        <div class="back">    
                            <a href="myschool.php">Повернутись</a>
                        </div>    
                    </div>  
<?php
if (isset($_GET["cabname"])) {

        $sql="SELECT * from cabinet where cabinetnumber='{$_GET['cabnamber']}'";
        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            echo '<text class="cab-add-error">'."Вибачте, але створювати декілька однакових кабінетів не можна, якщо у Вашої школи немає такого кабінету, але додати його неможливо, зверніться до адміністратора ПЗ MyDairy".'</text>';
            }
        else{
            
    $sql = mysqli_query($conn, "INSERT INTO myd.cabinet ( cabinetnumber, cabinetname, cabinetplace) 
    VALUES ( '{$_GET['cabnamber']}', '{$_GET['cabname']}', '{$_GET['cabnumber']}')");
    //Если вставка прошла успешно
    if ($sql) { 
      echo '<text class="cab-add">'.
      'Кабінет успішно доданий!'.'</text>';
    } else {
        echo '<text class="cab-add-error">'.'Виникла помилка в створенні кабінета. Спробуйте ще раз..'.$conn->error.'</text>';
    }
}}
   
  ?>
                    
                     
                                          
                </div>  
            </div>    
        </div>      
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/add_cab-windowcabinets.js"></script>     
        <script src="js/validate-newteacher.js"></script>   
    </main>
    </body>
</html> 