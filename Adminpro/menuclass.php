<?php
require_once 'database.php'
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8_general_ci">   
        <title>Admin.pro</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/menuclass.css">
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
            <?php
                                                                                if(isset($_GET["go-to-class"])){
                                                                                $sql="SELECT idteacher, teacherfname, teachersname, teacherpname from teacher t join class c on t.idteacher=c.teacher_idteacher where class='{$_GET['class']}'";
                                                                            }
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while($row = $result->fetch_assoc()) {   
                                                                        ?>                          
            <div class="tabs-content">    
                <div id="tab-3" class="tabs-content__item">    
                    <div class="lesson-info">
                        <h3 class="class-name"><?php echo $_GET['class']?></h3>
                        <form class="class-teacher" method="GET" action="windowteacher.php">
                            <h3>Класний керівник:</h3>
                            
                            <div class="go-to-profile">   
                            <input type="hidden" name="names" value="<?php echo $row["idteacher"] ?>"> 
                            <input type="submit" name="ok" id="go-to-teacher" value="<?php echo $row["teacherfname"]. " ". $row["teachersname"]. " ".$row["teacherpname"]?>" >
                            </div>
                            
                            
                        </form>    
                    </div> 

                                                                    <?php  
                                                                    }
                                                                    } else {
                                                                    echo "0 results";
                                                                    }


                                                                    if (isset($_GET["go-to-class"])){
                                                                        echo $_GET['class'];
                                                                        $sql= "SELECT * FROM student s join class c on s.class_idclass=c.idclass WHERE class='{$_GET['class']}' ORDER BY studentfname ASC";
                                                                    }
                                                                    
                                                                    $result = $conn->query($sql);
                                                                    
                                                                    
                                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {  
                                                    $a++  
                                                    ?>
                    <div class="people-panel">
                        <form class="peopleinfo" action="windowpeople.php" method="GET">
                            <h3 class="numer"><?php echo $a?></h3>
                            <div class="peoplecont">
                                <div class="info-about-people">
                                    <img class="graficphotopeople" src="img/admin.png">           
                                    <input type="hidden" name="names" value="<?php echo $row["idstudent"] ?>"><?php echo '<h3>'. $row["studentfname"]. " ". $row["studentsname"]." ". $row["studentpname"] .'</h3>' ?>
                                </div>
                                <input type="submit" name="ok" id="go-to-stud" value="Перейти у профіль">
                            </div>    
                        </form>
                                                                                    
                                                            <?php
                                                            }
                                                            } else {
                                                            echo "0 results";
                                                            }
                                                            ?>                                                          
                    </div>                  
                </div>
            </div>
        </div>    
    </main>
    </body>
</html>                