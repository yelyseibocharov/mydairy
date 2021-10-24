<!doctype html>
<html>
<head>
<meta charset="utf-8">    
<title>MyDairy</title>
<link rel="stylesheet" href="css/partners.css">
<link rel="stylesheet" href="css/header-footer.css">
<link rel="stylesheet" href="css/mininav.css">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="img/favicon.png" type="image/png">    
</head>
<body>
    <!---------------------------------HEADER------------------------------------>
    <?php
    include('header.php')
    ?>
    
    <!----------------------------------MAIN------------------------------------->    
    <main class="main">
        <?php
        include('mininav.php')
        ?> 
        <div class="partners">
            <div class="heading">
                <h4>Наші партнери</h4>
            </div>
            <a href="http://ct-college.net/" target="_blank" class="partners-cont" id="fpartner">
                <div class="college">
                    <img class="graficcollege" src="img/ctcollege.png"> 
                </div>      
                <div class="infofpartner">
                    <h4>ВСП "ХКТФК НТУ "ХПІ""</h4>    
                    <text>Відокремлений структурний підрозділ "Харківський 
                    комп'ютерно-технологічний фаховий коледж НТУ "ХПІ""</text>
                </div>    
            </a>
        </div>       
    </main>  
    <!---------------------------------FOOTER------------------------------------>
    
    <?php
    include('footer.php')
    ?>
</body>
</html>