<?php
    require_once 'database.php'
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">   
        <title>Admin.pro</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/myschool.css">
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
                <div id="btnScrollToTop">
                    <img src="img/ScrollToTop.png" id="ScrollToTop">
                </div>
                <div id="tab-2" class="tabs-content__item">    
                    <div class="tab-2_content">
                        <div class="firstcolumn--2">
                           <form class="people-list" action="#" method="GET">
                                <a href="?tab=stud" class="find-triggers__item">Учні</a>
                                <a href="?tab=teacher" class="find-triggers__item">Вчителі</a>
                            </form>
                            <div class="buttons">
                                <div class="subjects">
                                    <a href="windowsubjects.php">Предмети</a>
                                </div>
                                <div class="cabinets">
                                    <a href="windowcabinets.php">Кабінети</a>
                                </div>    
                            </div>        
                        </div>      
                        <div class="secondcolumn--2">
                            <div class="new-people">
                                <div class="buttons-top">
                                    <div class="addstudent">
                                        <a href="newstudent.php">Новий учень</a>
                                    </div> 
                                    <div class="addteacher">
                                        <a href="newteacher.php">Новий вчитель</a>
                                    </div>    
                                </div>           
                            </div>  
                            <div class="peoples">
                                <?php 
                                if ($_GET["tab"]=="stud" || !isset($_GET["tab"])){
                                ?>
                                <div id="find-1" class="find-content__item">
                                    <form class="find-panel" action="#" method="get">
                                    <input type="hidden" name="tab" value="stud"> 
                                        <div class="username">
                                            <text>Введіть ПІБ</text>
                                            <input class="name" type="search" placeholder="Абрамов Абрам Абрамович" name="username">
                                        </div>
                                        <div class="find-button" >    
                                            <input type="submit" name="search" value="Пошук" >
                                        </div>  
                                    </form>
                                    <form class="people-list-adaptive" action="#" method="GET">
                                        <a href="?tab=stud" class="find-triggers__item-adaptive" id="find-stud">Учні</a>
                                        <a href="?tab=teacher" class="find-triggers__item-adaptive">Вчителі</a>
                                    </form> 
                                    <?php
                                        if (isset($_GET["search"])){

                                            $sql= "SELECT idstudent, studentfname, studentsname, studentpname, class FROM student s join class c on s.class_idclass=c.idclass WHERE studentfname like '%{$_GET['username']}%' OR studentsname like '%{$_GET['username']}%' OR studentpname like '%{$_GET['username']}%'";
                                        }
                                        else {
                                        $sql= "SELECT idstudent, studentfname, studentsname, studentpname, class FROM student s join class c on s.class_idclass=c.idclass ORDER BY studentfname ASC";
                                        }
                                        $result = $conn->query($sql);
                                        if ($result->num_rows == 0) {
                                            echo '<text class="errorfind">'.'Учень не знайдений'.'</text>';
                                        }
                                        while($row = $result->fetch_assoc()) {
                                    ?>    
                                      
                                    <div class="people-panel">
                                        <form class="peopleinfo" action="windowpeople.php" method="GET">
                                            <div class="peopleinfo-wrapper">
                                                <img class="photopeople" src="img/admin.png">        
                                                <div class="info-about-people">
                                                    <div class="people-name">
                                                        <input type="hidden" name="names" value="<?php echo $row["idstudent"] ?>"><?php echo '<h3>'. $row["studentfname"]. " ". $row["studentsname"]." ". $row["studentpname"] .'</h3>' ?>
                                                    </div>
                                                    <text class="function">Учень <?php echo $row["class"]; ?> класу</text>
                                                    <div class="go-to-profile">    
                                                        <input type="submit" name="ok" value="Перейти у профіль" >   
                                                    </div>
                                                </div>   
                                            </div> 
                                        </form>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    
                                </div> 
                                <?php 
                                    } 
                                ?> 
                                <?php 
                                    if ($_GET["tab"]=="teacher"){
                                ?>    
                                <div id="find-2" class="find-content__item">               
                                    <form  class="find-panel" action="#" method="get">
                                       <input type="hidden" name="tab" value="teacher"> 
                                        <div class="username">
                                            <text>Введіть ПІБ</text>
                                            <input class="name" type="search" placeholder="Абрамов Абрам Абрамович" name="username">
                                        </div>
                                        <div class="find-button" >    
                                            <input type="submit" name="searchf" value="Пошук" >
                                        </div>  
                                    </form>
                                    <form class="people-list-adaptive" action="#" method="GET">
                                        <a href="?tab=stud" class="find-triggers__item-adaptive" id="find-stud">Учні</a>
                                        <a href="?tab=teacher" class="find-triggers__item-adaptive">Вчителі</a>
                                    </form>     
                                    <?php
                                        if (isset($_GET["searchf"])){
                                            $sql= "SELECT idteacher, teacherfname, teachersname, teacherpname, osvitadiscipline FROM teacher t join osvita o on t.osvita_idosvita=o.idosvita WHERE teacherfname like '%{$_GET['username']}%' OR teachersname like '%{$_GET['username']}%' OR teacherpname like '%{$_GET['username']}%'";
                                        }
                                        else {
                                        $sql= "SELECT idteacher, teacherfname, teachersname, teacherpname, osvitadiscipline FROM teacher t join osvita o on t.osvita_idosvita=o.idosvita ORDER BY teacherfname ASC";
                                        }
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                    ?>   
                                    <div class="people-panel">
                                        <form class="peopleinfo" action="windowteacher.php" method="GET">
                                            <div class="peopleinfo-wrapper">
                                                <img class="photopeople" src="img/admin.png">        
                                                <div class="info-about-people">
                                                    <div class="people-name">
                                                        <input type="hidden" name="names" value="<?php echo $row["idteacher"] ?>"><?php echo '<h3>'. $row["teacherfname"]. " ". $row["teachersname"]." ". $row["teacherpname"].'</h3>'  ?>
                                                    </div>
                                                    <text class="function"><?php echo $row["osvitadiscipline"]  ?></text>
                                                    <div class="go-to-profile">    
                                                        <input type="submit" name="ok" value="Перейти у профіль" >
                                                    </div>
                                                </div> 
                                            </div>
                                        </form>     
                                        <?php
                                            }
                                            } else {
                                            echo '<text class="errorfind">'.'Вчитель не знайдений'.'</text>';
                                            }
                                            $conn->close();
                                        ?>
                                    </div>    
                                </div> 
                                <?php } ?> 
                            </div>                 
                        </div>  
                    </div>    
                </div>
            </div> 
        </div>  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/ScrollToTop.js"></script>
    </main>
    </body>
</html> 