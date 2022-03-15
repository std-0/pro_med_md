<?


function menu($title){

   ?>
   <!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->

        <!--// Meta Tags //-->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Anaula - Construction Template" />
        <meta name="keywords" content="construction,business,finance,corporate" />
        <!--// Frameworks //-->
        <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
        <link rel="stylesheet" href="vendor/css/magnific.popup.min.css" />
        <link rel="stylesheet" href="vendor/css/fancybox.min.css" />
        <link rel="stylesheet" href="vendor/css/animate.min.css" />
        <link rel="stylesheet" href="vendor/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="vendor/css/owl.carousel.default.min.css" />
        <link rel="stylesheet" href="fonts/font_awesome/css/all.css" />
        <link rel="stylesheet" href="fonts/flat_icons/flaticon.css" />
        <!--// Style Css //-->
        <link rel="stylesheet" href="css/style.css" />
        <!--// Theme Color Css //-->
        <link rel="stylesheet" href="css/skins/default-color.css" id="theme-color-toggle" />
        <title>
            <?
            if($title == ''){
                $title = 'ProMed.MD - Centrul Medical multispecializat';
            }else{
                $title = 'ProMed.MD - ' . $title;
            }
            echo $title;
            ?>
        </title>
    </head>
    <body>
        <!--// Page Wrapper Start //-->
        <div class="page-wrapper">
            <!--// Header Start //-->
            <header class="header fixed-top" id="header">
                <div id="navbar-top">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8 nav-info-wrap">
                                <div class="nav-info-box">
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:info@pro-med.md">
                                        <span>info@pro-med.md</span>
                                    </a>
                                </div>
                                <div class="nav-info-box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <a href="https://www.google.com/maps/place/Strada+Ion+Creangă+24,+Chișinău,+Молдавия/@47.0364913,28.8088124,17z/data=!3m1!4b1!4m5!3m4!1s0x40c97dbf6f305e5d:0x3a6804574f0c0cd5!8m2!3d47.0364913!4d28.8110064?hl=ru&authuser=0" target="_blank">
                                         <span>ул.И.Креангэ 24/1</span></a> 
                                   
                                </div>
                                <div class="nav-info-box">
                                <i class="fa fa-phone"></i>
                                    <a href="tel:+37322743413">
                                        <span>022 74 34 13</span>
                                    </a>
                                </div>

                                <div class="nav-info-box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <a href="https://www.google.com/maps/place/Strada+Nicolae+H.+Costin+13,+Chișinău+2051,+Молдавия/@47.0337652,28.7887152,17z/data=!3m1!4b1!4m5!3m4!1s0x40c97deee7df3ed3:0xb009f7cc225f3ccd!8m2!3d47.0337652!4d28.7909092?hl=ru&authuser=0" target="_blank" >
                                    <span>ул.М.Костин 13/1</span></a> 
                                   
                                </div>
                                <div class="nav-info-box">
                                    <i class="fa fa-phone"></i>
                                        <a href="tel:+37322445758">
                                            <span>022 44 57 58</span>
                                        </a>
                                    </div>
                            </div>
                            <div class="col-md-4 nav-social-links">
                                <a href="https://www.facebook.com/centrulmedicalpromed/#"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/promed.centrul.medical/?hl=ru"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCKp2lTH_DU2Mt6v8nnzK44w"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="nav-menu-wrap">
                    <div class="container">
                        <nav class="navbar bg-white navbar-expand-lg p-0">
                            <a class="navbar-brand" href="index.php">
                                <img src="/img/general/promed_medical_center.png" alt="Logo White" class="img-fluid" style="height: 40px;" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="togler-icon-inner">
                                    <span class="line-1"></span>
                                    <span class="line-2"></span>
                                    <span class="line-3"></span>
                                </span>
                            </button>
                            <!-- <button class="search-btn-mobile" data-toggle="modal" data-target="#headerSearchBar"><i class="fa fa-search"></i></button> -->
                            <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Главная</a>
                                    </li>
                                   
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="operatii" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Офтальмологические операции
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="operatii">
                                            <a class="dropdown-item" href="service-trei.php">Операции катаракты</a>
                                            <a class="dropdown-item" href="service-patru.php">Кератоконус</a>
                                            <a class="dropdown-item" href="service-cinci.php">Оккулопластические операции</a>
                                            <a class="dropdown-item" href="empty.php">Офтальмологические консультации </a>
                                            <a class="dropdown-item" href="service-one.php">Лечение близорукости</a>
                                            <a class="dropdown-item" href="service-ss.php">Лазерные процедуры</a>
                                        </div>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="about-us.php">О нас</a>
                                    </li>

                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="medical_optic.php">Медицинская оптика</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="index-default-rtl.html#" id="languageDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-globe"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="languageDropdownMenu">
                                            
                                            <a class="dropdown-item" href="../..">Ro</a>
                                            <a class="dropdown-item" href="../en">En</a>
                                        </div>
                                    </li> <br>
                                    <li class="nav-item navbar-btn-resp d-flex align-items-center">
                                        <a href="empty.php" class="outline-button">Онлайн Консультация</a>
                                    </li> 
                                    <br>
                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <!--// Header End  //-->
   <?


}





?>