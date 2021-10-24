<?php
    require_once 'database.php'
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8_general_ci">   
        <title>Admin.pro</title>
        <link rel="stylesheet" href="css/windowsubjects.css">
        <meta name="viewport" content="width=device-width">
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
                <div class="subjects">     
                    <div class="headtab">
                        <h3>Предмети</h3>
                    </div> 
               
                    <forn class="subjectlist" action="#" method="POST">
                        <select size="3">
                            <?php
$sql= "SELECT * FROM discipline";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      ?>       
                            <option value="<?$row["iddiscipline"];?>"><?php echo $row["disciplinename"];  ?></option>

<?php
  }
} else {
  echo "0 results";
}

?>
                        </select> 
                    </form>    
                    <div class="back">     
                        <a href="myschool.php">Повернутись</a>
                    </div>    
<?php
/*if (isset($_GET["subject"])) {
    $sql="SELECT * from discipline where disciplinename='{$_GET['subject']}'";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "Вибачте, але створювати декілька однакових предметів не можна, якщо у Вашої школи немає такого предмету, але додати його неможливо, зверніться до адміністратора ПЗ MyDairy";
        }
    else{
     $sql = mysqli_query($conn, "INSERT INTO `myd`.`discipline` ( `iddiscipline`, `disciplinename`) 
     VALUES ( '','{$_GET['subject']}')");
    if ($sql) { 
      echo '<text class="cab-add">'.
      'Дисципліна успішно додана!'.'</text>';
    } else {
        echo '<text class="cab-add-error">'.'Виникла помилка в створенні дисципліни. Спробуйте ще раз..'.'</text>';
    }
}}*/
  ?>
            </div>  
        </div> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/add_subject-windowsubjects.js"></script>  
        <script src="js/validate-newteacher.js"></script>        
    </main>
    </body>
</html> 