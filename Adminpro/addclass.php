<?php
require_once 'database.php'
?>
<!doctype html>
<html>
    <head>
        <meta charset utf-8>
        <title>Admin.pro</title>
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="img/favicon.png" type="image/png">   
        <link rel="stylesheet" href="css/addclass.css">
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
                <div id="tab-3" class="tabs-content__item">         

                        <form class="add_class" id="form" action="#" method="POST">
                            <div class="close-button_add_new_class">
                                <a href="classes.php">
                                    <img class="grafic-close_add_class" src="img/close.png">
                                </a>
                            </div>    
                            <h4>Новий клас</h4>
                            <div class="add_new_class_content">
                                <div class="left_content" name="clas">  
                                    <label>Номер класу</label>
                                    <input class="_req" type="number" min="1" max="11" onkeypress="if(this.value.length&gt;1) return false;" name="numerclass" placeholder="10">
                                    <label> Буква класу</label>
                                    <input class="letter _req" type="text" name="letterclass" placeholder="А">
                                    <label> Класний керівник</label>
                                    <select class="class-teacher _req _select" name="teachers">
                                    <option name ="teacher" value="defoult">Обрати</option>
                                    <?php
$sql= "SELECT idteacher, teacherfname, teachersname, teacherpname, teacher_idteacher from teacher t left join class c on t.idteacher=c.teacher_idteacher where teacher_idteacher IS NULL";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      
?>

                                <option value="<?php echo $row['idteacher'];?>"><?php echo $row['teacherfname']." ".$row['teachersname']." ".$row['teacherpname'] ;  ?></option>

<?php
  }
} else {
  echo "0 results";
}
?>
                                    </select>          
                                </div>     
                            
                            </div> 
                            <div class="bottom_button-addclass">
                               <input type="submit" value="Створити клас" name="ok">
                           </div>              
                        </form>  
                        <?php
                    if (isset($_POST["ok"])) {
                        $_POST['clas']=$_POST["numerclass"]."-".$_POST["letterclass"];
    $sql="SELECT * from class where class='{$_POST['clas']}'";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo '<text class="class-add-error">'."Вибачте, але створювати декілька однакових класів не можна, якщо у Вашої школи немає такого класу, але додати його неможливо, зверніться до адміністратора ПЗ MyDairy";
        }
                        else{
    
    $sql = mysqli_query($conn, "INSERT INTO `myd`.`class` (`idclass`, `class`, `school_idschool`, `teacher_idteacher`) VALUES ('','{$_POST['clas']}', '1', '{$_POST['teachers']}');");
    if ($sql) {
        echo '<text class="class-add">'.
          'Клас успішно доданий!'.'</text>';
      } else {
        echo '<text class="class-add-error">'.'Виникла помилка в створенні класу. Спробуйте ще раз..'.'</text>';
      }
  }
}
?>  
                </div>         
            </div>
        </div>   
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/maskinput-addclass.js"></script>
    </main>
    </body>
</html>                