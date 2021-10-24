<?php
require_once 'database.php'
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8_general_ci">   
        <title>Admin.pro</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/windowadmin.css">
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
<?
if (isset($_POST["passwordok"]))
{
        $user= "SELECT idteacher, teacheremail, tpassword FROM teacher WHERE idteacher='{$_SESSION['autorized']}' ";
        $result = $conn->query($user);
        if ($result->num_rows > 0) {
        $wrongpassword=true;
        while($row = $result->fetch_assoc()) {
        if (password_verify($_POST['passwordold'], $row['tpassword'] )){
        $wrongpassword=false;
        $passwords=password_hash($_POST["passwordnew"], PASSWORD_DEFAULT);
        $sql = "UPDATE teacher SET tpassword='$passwords' where idteacher='{$_SESSION['autorized']}'"; 
        if ($conn->query($sql) === TRUE) {
        $mail=$_POST['email'];
        mail($mail, "Ваш пароль змінено. Ваш MyDairy.", "Вітаємо у системі, Ваш пароль для доступу до додатку, був змінений. Якщо Ви не робили зміну, просимо терміново звернутися до адміністратора ПЗ MyDairy");
        echo '<text class="people-add">'.
         'Пароль успішно змінений!'.'</text>';
         } else {
           echo '<text class="people-add-error">'.'Виникла помилка у зміні паролю до облікового запису. Зверніться до адміністратора ПЗ MyDairy'.'</text>';
         }
                    break;
                }    
                if($wrongpassword){
                    echo '<text class="people-add-error">'."Невірний пароль!".'</text>';
                }
                 }
                }}
                if (isset($_POST["name"])) {
                                            $sql = "UPDATE teacher SET teacherfname='{$_POST["surname"]}', teachersname='{$_POST["name"]}', teacherpname='{$_POST["patronymic"]}', teacherdate='{$_POST["bday"]}', teachernumber='{$_POST["phonenumber"]}', 
                                            teacheradr='{$_POST["address"]}', teacheremail='{$_POST["email"]}' where idteacher='{$_SESSION["autorized"]}'";
                    
                    if ($conn->query($sql) === TRUE) {
                        echo '<text class="people-add">'."Дані успішно оновлено".'</text>';
                    } else {
                        echo '<text class="people-add-error">'."Помилка при обробці даних. Спробуйте пізніше, або зверніться до адмінистратора ПЗ MyDairy: ".'</text>';
                    }
                    
                    
                                        }
                ?>
                
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
                            $sql="SELECT * from teacher where idteacher='{$_SESSION['autorized']}'";
                                                                            
                                                                    $result = $conn->query($sql);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while($row = $result->fetch_assoc()) {   
                                                                        ?>      

                            <form id="form" class="edit-info" method="POST" action="#">
                                <div class="edit-peopleinforight">
                                    <div class="edit-peopleinfofirstline">
                                        <div class="surname">    
                                            <label class="definition">Прізвище</label>
                                            <input type="text" name="surname" class="_req" value="<?php echo $row["teacherfname"];?>">
                                        </div> 
                                        <div class="name">
                                            <label class="definition">І'мя</label>
                                            <input type="text" name="name" class="_req" value="<?php echo $row["teachersname"];?>">
                                        </div>
                                        <div class="patronymic">
                                            <label class="definition">По батькові</label> 
                                            <input type="text" name="patronymic" value="<?php echo $row["teacherpname"];?>">
                                        </div> 
                                    </div>
                                    <div class="people-info-secondline">      
                                        <div class="bday">
                                            <label class="definition">Дата народження</label>
                                            <input type="date" name="bday" class="_req" value="<?php echo $row["teacherdate"];?>">
                                        </div>    
                                        <div class="phonenumber">
                                            <label class="definition">Номер телефону</label>
                                            <input type="text" name="phonenumber" class="tel" value="<?php echo $row["teachernumber"];?>"> 
                                        </div>     
                                    </div>        
                                </div> 
                                <div class="edit-secondline">
                                    <div class="edit-people-info-thirdline">
                                        <div class="adrmail">
                                            <div class="address">
                                                <label class="definition">Адреса</label> 
                                                <input type="text" name="address" class="_req" value="<?php echo $row["teacheradr"];?>"> 
                                            </div>    
                                            <div class="email">
                                                <label class="definition">Email</label> 
                                                <input type="text" name="email" class="_req _email" value="<?php echo $row["teacheremail"];?>"> 
                                            </div>   
                                        </div>    
                                        <div class="button-bottom">
                                            <div class="button-back">
                                                <a href="#form">Повернутись</a>
                                            </div> 
                                            <div class="button-save">
                                                <input type="submit" value="Зберегти" name="submitt">
                                            </div>     
                                        </div>      
                                    </div>       
                                </div>
                            </form>
              
                            <div class="peopleinforight">
   
                                <div class="people-info-firstline">
                                    <div class="surname">
                                        <h3><?php echo $row["teacherfname"];?></h3>
                                        <label class="definition">Прізвище</label>
                                    </div>    
                                    <div class="name">
                                        <h3><?php echo $row["teachersname"];?></h3>
                                        <label class="definition">І'мя</label>
                                    </div>                                     
                                    <div class="patronymic">
                                        <h3><?php echo $row["teacherpname"];?></h3>
                                        <text class="definition">По батькові</text> 
                                    </div>
                                    <div class="edit">
                                        <img href="#form" class="graficedit" src="img/edit.png">
                                    </div>    
                                </div>
                                <div class="people-info-secondline"> 
                                    <div class="bday">
                                        <h4><?echo $row["teacherdate"]?></h4>
                                        <label class="definition">Дата народження</text> 
                                    </div>    
                                    <div class="phonenumber">
                                        <h4><?echo $row["teachernumber"]?></h4>
                                        <label class="definition">Номер телефону</label> 
                                    </div> 
                                       
                                </div>
                          
                            </div>   

                        </div>     
                        <div class="secondline">
                            <div class="people-info-thirdline">
                                <div class="address">
                                    <h4><?echo $row["teacheradr"]?></h4>
                                    <label class="definition">Адреса</label> 
                                </div>    
                                <div class="email">
                                    <h4><?echo $row["teacheremail"]?></h4>
                                    <label class="definition">Email</label> 
                                    </div>
                                    <div id="pass" class="password">
                                    <a href="#edit-pass">Змінити пароль</a>
                                </div>    
                            </div>
                        </div>


                        <?php  
                                                                    }
                                                                    } else {
                                                                    echo "0 results";
                                                                    }?>
                                                                    
                        <form id="edit-pass" class="edit-pass" action="#" method="POST">
                            <div class="close-button">
                                <img href="#edit-pass" src="img/close.png">
                            </div>    
                            <h3>Змінити пароль</h3>
                            <div class="oldpass">
                                <input type="pass" name="passwordold" placeholder="Введіть старий пароль">
                            </div>   
                            <div class="newpass"> 
                                <input type="pass" name="passwordnew" placeholder="Введіть новий пароль">
                            </div>
                            <div class="pass-save">
                                <input name="passwordok" type="submit" value="Змінити">
                            </div>    
                        </form>   
                       
                    </div>
                </div>
            </div> 
        </div>  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/editinfo-windowadmin.js"></script>
        <script src="js/maskinput-newteacher.js"></script>
        <script src="js/validate-newteacher.js"></script>                                                            
        </main>
        </body>
    </html> 