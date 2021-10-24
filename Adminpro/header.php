<? 
require_once "../database.php"
?>
<head>
    <link rel="stylesheet" href="css/header.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>   
    <script src="js/burger.js"></script>
</head>
<?php
        $sql="SELECT idteacher, teacherfname, teachersname, teacherpname from teacher where idteacher='{$_SESSION['autorized']}'";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
               ?>

<div class="header">
    <div class="logo">
        <a href="index.php">
            <h1>Admin.pro</h1> 
        </a>       
    </div>        
    <div class="person">
        <div class="photoadmin">
            <img class="photo" src="img/admin.png">  
        </div>  
         <div class="nameadmin">
            <a href="WindowAdmin.php">
            <h4><?php echo $row["teacherfname"]." ".$row["teachersname"]." ".$row["teacherpname"] ?></h4>
            </a>
        </div> 
        <form class="logoutbtn" method = "POST" action="">
            <input type="submit" name="logout"id="logoutbtn">
            <?php 
            }
        }
        if (isset($_POST["logout"])){
            session_unset($_SESSION['autorized']);
            session_destroy();
        
             ?><script type="text/javascript">
             window.location.href = "../MyDairy/index.php";
             </script> <? 
             }
             ?>
            

            <img class="logoutgrafic" src="img/logout.png">
        </form>    
    </div>
    <div class="header__burger">
        <span></span>
    </div>   
    <div class="person_burger">
        <div class="photoadmin">
            <a href="WindowAdmin.php">
                <img class="photo" src="img/admin.png">  
            </a>  
        </div>  
        <div class="burger_admin_content">
            <div class="nameadmin">
                <a href="WindowAdmin.php">
                    <h4>Ревенко Ілля Володимирович</h4>  
                </a>
            </div>
            <div class="burger_tabs-triggers">
                <a href="index.php" id="burger_first">
                    <span class="links_span">Робочий стіл</span>
                </a>
                <a href="myschool.php" id="burger_second">
                    <span class="links_span">Моя школа</span>
                </a>
                <a href="classes.php" id="burger_third">
                    <span class="links_span">Класи</span>
                </a>
                <a href="windowsubjects.php" id="burger_fifth">
                    <span class="links_span">Предмети</span>
                </a>
                <a href="windowcabinets.php" id="burger_last">
                    <span class="links_span">Кабінети</span>
                </a>
            </div> 
            <div class="logout">
                <form class="logoutbtn-burger" method = "POST" action="">
                    <input type="submit" name="logout-burger" id="logoutbtnburger" href="WindowAdmin.php" value="Вийти">
                </form>
                <? if (isset($_POST["logout-burger"])){
            session_unset($_SESSION['autorized']);
            session_destroy();
            ?> 
            <script type="text/javascript">
            window.location.href = "../MyDairy/index.php";
            </script> <? 
            }
            ?>
             
            </div>  
        </div> 
    </div>            
</div>
