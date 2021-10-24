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
        <link rel="stylesheet" href="css/classes.css">
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
                        <div id="#tab-3_cont" class="tab-3_content">
                            <div class="firstline--3">
                                <div class="add-class">
                                    <div class="button-add-class">
                                        <a href="addclass.php">Створити клас</a>
                                    </div>    
                                </div>    
                            </div> 
                            <div class="secondline--3">     
                                <h3>Оберіть клас</h3>
                                <div class="class-back">
                                    <form action="menuclass.php" method="GET">
                                        <select class="select-class" name="class">
                                            <?php
$sql= "SELECT * FROM class order by class ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["class"];
?>

                                <option><?php echo $row["class"];?></option>

<?php
  }
} else {
  echo "0 results";
}
?>
                                        </select>
                                        <div class="button-go-to-class">
                                            <input type="submit" name="go-to-class" value="Перейти до класу">    
                                        </div>    
                                    </form>   
                                </div>                                                   
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>    
    </main>
    </body>
</html>                