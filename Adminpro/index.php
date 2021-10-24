<? 
require_once "../database.php"
?>
<!doctype html>
<html>
    <head>
        <meta charset utf-8>
        <title>Admin.pro</title>
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="img/favicon.png" type="image/png">   
        <link rel="stylesheet" href="css/style.css">
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
                <div id="tab-1" class="tabs-content__item">
                    <section class="firstcolumn--1">    
                        <div class="people">
                            <h4>Люди</h4>
                            <div class="peoplecontent">
                                <span><a href="newteacher.php">Додати вчителя</a></span>
                                <span><a href="newstudent.php">Додати школяра</a></span>
                            </div>
                        </div>
                        <div class="directories">
                            <h4>Довідники</h4>
                            <div class="dircontent">
                                <span><a href="windowsubjects.php">Предмети</a></span>    
                                <span><a href="windowcabinets.php">Кабінети</a></span>
                                <span><a href="https://mon.gov.ua/ua/osvita/zagalna-serednya-osvita/navchalni-programi" target="_blank">Робочі програми</a></span>  
                            </div>    
                        </div>
                    </section>
                    <section class="secondcolumn--1">    
                        <div class="class">
                            <h4>Класи</h4>
                            <div class="classcontent">
                                <span><a href="addclass.php">Створити клас</a></span>
                            </div>    
                        </div>
                    </section>        
                </div>
            </div>  
        </div>  
    </main>
    </body>
</html> 