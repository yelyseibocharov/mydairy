<?php
require_once 'database.php'
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8_general_ci">   
        <title>Admin.pro</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/windowpeople.css">
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
<?   if (isset($_POST["name"])) {
                        $sql = "UPDATE student SET studentfname='{$_POST["surname"]}', studentsname='{$_POST["name"]}',
                         studentpname='{$_POST["patronymic"]}',  studentnumber='{$_POST["phonenumber"]}', studentdate='{$_POST["bday"]}', 
                         studentadress='{$_POST["address"]}', studentnumbm='{$_POST["phonenumbermother"]}', studentnumf='{$_POST["phonenumberfather"]}' ,
                         studentemail='{$_POST["email"]}', class_idclass='{$_POST["class"]}' where idstudent='{$_GET["names"]}'";

                        if ($conn->query($sql) === TRUE) {
                            echo  '<text class="people-add">'."Дані успішно оновлено".'</text>';
                        } else {
                            echo  '<text class="people-add-error">'."Помилка при обробці даних. Спробуйте пізніше, або зверніться до адмінистратора ПЗ MyDairy: ".'</text>';
                        }


                    } ?>
    <main>
        <div class="admincontent">
        <?php
            include('nav.php')
        ?> 
            <div class="tabs-content">  
                <div id="tab-2" class="tabs-content__item">    
                    <div class="peopleinfo"> 
                        <div class="first-line"> 
                            <div class="photopeople">
                                <img class="graficstudent" src="img/admin.png">
                            </div> 
                            <?
                            $sql="SELECT * from student where idstudent='{$_GET['names']}'";                       
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while($row = $result->fetch_assoc()) {   
                                                                        ?>  
                            <form id="form" class="edit-info" action="#" method="POST">
                                <div class="edit-peopleinforight">
                                    <div class="edit-peopleinfofirstline">
                                        <div class="surname">    
                                            <label class="definition">Прізвище</label>
                                            <input type="text" name="surname" class="_req" value="<?php echo $row["studentfname"];?>">
                                        </div> 
                                        <div class="name">
                                            <label class="definition">І'мя</label>
                                            <input type="text" name="name" class="_req" value="<?php echo $row["studentsname"];?>">
                                        </div>
                                        <div class="patronymic">
                                            <label class="definition">По батькові</label> 
                                            <input type="text" name="patronymic" value="<?php echo $row["studentpname"];?>">
                                        </div> 
                                    </div>
                                    <?php  
                                                                    }
                                                                    }
                                                                    
                                                                    
                                                                        ?>  
                                    <div class="people-info-secondline">    
                                        <div class="class">
                                            <label class="definition">Клас</label> 
                                            <select class="select-class _req _select" name="class">
                                                <?
                                                $sql="SELECT idclass, class from class order by class ASC";                       
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) { 
                                                    ?>
                                                <option value="<?php echo $row['idclass'];?>"><?php echo $row['class'];?></option>
                                                <?}
                                        }?>
                                            </select>  
                                        </div> 
                                        <? 
                                        $sql="SELECT * FROM student s JOIN class c on c.idclass=s.class_idclass where idstudent='{$_GET['names']}'";                       
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while($row = $result->fetch_assoc()) {   
                                                                     ?>   
                                        <div class="bday">
                                            <label class="definition">Дата народження</label>
                                            <input type="date" class="_req" name="bday" value="<?php echo $row["studentdate"];?>">
                                        </div>    
                                        <div class="phonenumber">
                                            <label class="definition">Номер телефону</label>
                                            <input type="text" name="phonenumber" class="tel" value="<?php echo $row["studentnumber"];?>"> 
                                        </div>     
                                    </div>        
                                </div> 
                                <div class="edit-secondline">
                                    <div class="edit-people-info-thirdline">
                                        <div class="adrmail">
                                            <div class="address">
                                                <label class="definition">Адреса</label> 
                                                <input type="text" name="address" class="_req" value="<?php echo $row["studentadress"];?>"> 
                                            </div>   
                                          
                                            <div class="phonenumber-mother">
                                                <label class="definition">Номер мати</label> 
                                                <input type="text" name="phonenumbermother" class="tel" value="<?php echo $row["studentnumbm"];?>">
                                            </div> 
                                            <div class="phonenumber-father">
                                                <label class="definition">Номер тата</label> 
                                                <input type="text" name="phonenumberfather" class="tel" value="<?php echo $row["studentnumf"];?>">
                                            </div>    
                                        </div>    
                                        <div class="fathermother">
                                            <div class="email">
                                                <label class="definition">Email</text> 
                                                <input type="text" name="email" value="<?php echo $row["studentemail"];?>" class="_req _email"> 
                                            </div>
                                            <div class="button-back">
                                                <a href="#form">Повернутись</a>
                                            </div> 
                                            <div class="button-save">
                                                <input type="submit" value="Зберегти">
                                            </div>    
                                        </div>      
                                    </div>       
                                </div> 
                            </form>      
                            <div class="peopleinforight">
                                <div class="people-info-firstline">
                                    <div class="surname">
                                        <h3><?php echo $row["studentfname"];?></h3>
                                        <label class="definition">Прізвище</label>
                                    </div>    
                                    <div class="name">
                                        <h3><?php echo $row["studentsname"];?></h3>
                                        <label class="definition">І'мя</label>
                                    </div>                                     
                                    <div class="patronymic">
                                        <h3><?php echo $row["studentpname"];?></h3>
                                        <label class="definition">По батькові</label> 
                                    </div>
                                    <div class="edit">
                                        <img href="#form" class="graficedit"src="img/edit.png">
                                    </div>    
                                </div>
                                <div class="people-info-secondline">    
                                    <div class="class">
                                        <h4><?php echo $row["class"];?></h4>
                                        <label class="definition">Клас</label> 
                                    </div>    
                                    <div class="bday">
                                        <h4><?php echo $row["studentdate"];?></h4>
                                        <label class="definition">Дата народження</label> 
                                    </div>    
                                    <div class="phonenumber">
                                        <h4><?php echo $row["studentnumber"];?></h4>
                                        <label class="definition">Номер телефону</label> 
                                    </div>     
                                </div> 
                            </div>       
                        </div>     
                        <div class="secondline">
                            <div class="people-info-thirdline">
                                <div class="section-first">   
                                    <div class="address">
                                        <h4><?php echo $row["studentadress"];?></h4>
                                        <label class="definition">Адреса</label> 
                                    </div>    
                                    <div class="phonenumber-mother">
                                        <h4><?php echo $row["studentnumbm"];?></h4>
                                        <label class="definition">Номер мати</label> 
                                    </div> 
                                    <div class="phonenumber-father">
                                        <h4><?php echo $row["studentnumf"];?></h4>
                                        <label class="definition">Номер тата</label> 
                                    </div> 
                                </div>    
                                <div class="section-second">   
                                    <div class="email">
                                        <h4><?php echo $row["studentemail"];?></h4>
                                        <label class="definition">Email</label> 
                                    </div> 
                                </div>        
                            </div>
                        </div>
                       <? }}?>

                    </div>
                </div>
            </div> 
        </div>  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/maskinput-newteacher.js"></script>
        <script src="js/validate-newteacher.js"></script>   
        <script src="js/editinfo-windowpeople.js"></script>
        </main>
        </body>
    </html> 