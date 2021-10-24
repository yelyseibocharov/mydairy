<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>SuperAdmin</title>
    <link rel="stylesheet" href="css/applic_in.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include('header.php')
    ?>
    <main>          
        <article class="content">
            <section class="content__left">
                <ul class="menu__left">
                    <li><a href="index.php">Заяви від закладів</a></li>
                    <li><a href="reg_applic.php">Заяви на реєстрацію</a></li>
                </ul> 
            </section>
                
            <section class="content__right">
                <div class="head__name">    
                    <h1>Заява від закладу</h1>
                </div>    
                <div class="schoolinfo">
                    <div class="wrapper">
                        <div class="schoolinfo__leftcolumn">
                            <div class="schoolinfo_cont" name="schoolinfo__abrname">
                                <h3>Назва закладу:</h3>
                                <text>Харківський ліцей №149</text>
                            </div>
                            <div class="schoolinfo_cont" name="name">
                                <h3>Повна назва закладу:</h3>
                                <text>Прочухан Дмитро Володимирович</text>
                            </div>
                            <div class="schoolinfo_cont" name="ipn">
                                <h3>ІПН закладу:</h3>
                                <text>123123412343</text>
                            </div>    
                            <div class="schoolinfo_cont" name="town">
                                <h3>Місто:</h3>
                                <text>Харків</text>
                            </div>
                            <div class="schoolinfo_cont" name="adr">
                                <h3>Адреса закладу:</h3>
                                <text>проспект Перемоги 228</text>
                            </div>
                            <div class="schoolinfo_cont" name="tel">
                                <h3>Телефон закладу:</h3>
                                <text>+38(999) 999-99-99</text>
                            </div>
                        </div> 
                        <div class="schoolinfo__rightcolumn">
                            <div class="schoolinfo_cont" name="director">
                                <h3>Директор:</h3>
                                <text>Прочухан Дмитро Володимирович</text>
                            </div>
                            <div class="schoolinfo_cont" name="director-tel">
                                <h3>Номер тел. директора:</h3>
                                <text>+38(999) 999-99-99</text>
                            </div>
                            <div class="schoolinfo_cont" name="director-mail">
                                <h3>Email:</h3>
                                <text>Прочухан Дмитро Володимирович</text>
                            </div>
                            <div class="schoolinfo_cont" name="director-comment">
                                <h3>Коментар:</h3>
                                <text>Жили были дед и баба</text>
                            </div>   
                        </div>  
                    </div>    
                    <div class="buttons">
                        <input type="submit" name="reject" value="Відхилити">
                        <input type="submit" name="accept" value="Прийняти">
                    </div>  
                </div>    
            </section>    
        </article>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>   
    <script src="../html-header/burger.js"></script>
</body>
</html>