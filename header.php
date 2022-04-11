<style>
    .btn:focus{
        box-shadow:none;
    }
    .caret{
        background-color:#f5f0e9;

    }
ul{
    min-width:50px;
    margin-left:20px;
    margin-top:-20px;
}
.sub-title{
    font-family:'Arial',cursive;
}

</style>
<?php
session_start();
$langs = array('az','tr','rus','en');
if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = 'az';
    
}
if(isset($_GET['lang']) && $_GET['lang']!=''){
    if(in_array($_GET['lang'], $langs)){       
      $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}
$lang_id=$_GET['lang'];
if($lang_id=='az'){
    $lang_id='';
}
include('lang/'.$_SESSION['lang'].'.php');
$language1 = ""; 
$language2 = "";
$language3 = "";
$language4 = "";


                                     
                            switch ($_SESSION['lang']) {
    case 'az':
        $language1 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;margin-bottom:23px;' src='assets/images/azerbaijan.webp' alt='az'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='assets/images/tr-01.webp' alt='tr'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;' src='assets/images/russia.webp' alt='rus'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='assets/images/united-kingdom.webp' alt='en'/></a>";
        break;
    case 'tr':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;margin-bottom:23px;' src='assets/images/tr-01.webp' alt='tr'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='assets/images/azerbaijan.webp' alt='az'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;' src='assets/images/russia.webp' alt='rus'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='assets/images/united-kingdom.webp' alt='en'/></a>";
        break;
    case 'rus':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;margin-bottom:23px;' src='assets/images/russia.webp' alt='rus'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='assets/images/tr-01.webp' alt='tr'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='assets/images/azerbaijan.webp' alt='az'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='assets/images/united-kingdom.webp' alt='en'/></a>";
        break;
    case 'en':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;margin-bottom:23px;' src='assets/images/united-kingdom.webp' alt='en'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='assets/images/tr-01.webp' alt='tr'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;' src='assets/images/russia.webp' alt='rus'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='assets/images/azerbaijan.webp' alt='az'/></a>";
        break;
}

?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Əsas səhifə | Dastan Aqro</title>

 
    <link rel="alternate" href="https://www.test.recruit.az/" hreflang="az" />
    <link rel="alternate" href="https://www.test.recruit.az/?lang=tr" hreflang="tr" />
    <link rel="alternate" href="https://www.test.recruit.az/?lang=rus" hreflang="ru" />
    <link rel="alternate" href="https://www.test.recruit.az/?lang=en" hreflang="en" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/logo.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo.svg">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <!-- Fonts-->
    <link
      href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Css-->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css?ver=11.0" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css?ver=2.0" />
    <!-- <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" /> -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />

    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/vegas.min.css" />
    <link rel="stylesheet" href="assets/css/nouislider.min.css" />
    <link rel="stylesheet" href="assets/css/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/css/agrikol_iconl.css" />
    <!-- Template styles -->
    <link rel="stylesheet" href="assets/css/main.css?ver=9.0" />
    <link rel="stylesheet" href="assets/css/responsive.css?ver=34.0" />
  </head>

  <body>
    <div class="preloader">
      <img src="assets/images/logo.svg" class="preloader__image" alt="" style="width:100%;height:250px">
    </div>

    <!-- /.preloader -->

    <div class="page-wrapper" >
        <div class="site-header__header-one-wrap">
            <div class="topbar-one">
                <div class="topbar_bg" style="background-image: url(assets/images/shapes/header-bg.png)"></div>
                <div class="container">
                    <div class="topbar-one__left">
                        <a href="mailto:info@dastanagro.az"><span class="icon-message"></span>info@dastanagro.az </a>
                        <a href="tel:+994 12 504 77 77"><span class="icon-phone-call">+994 12 504 77 77</span></a>
                    </div>
                   
            <div class="topbar-one__middle">
              <a href="<?php echo 'https://www.test.recruit.az?lang='.$_SESSION['lang'];?>" class="main-nav__logo">
                <img
                  src="assets/images/logo.svg"
                  class="main-logo"
                  alt="Dastan Agro logo" style="width:120px; height:120px;"
                />
              </a>
            </div>
            <div class="topbar-one__right">
              <div class="topbar-one__social">
                <a href="https://www.facebook.com/dastanagro.az"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.linkedin.com/company/dastanagro"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/dastanagro.az/"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
    
            

             <header class="main-nav__header-one">
            <nav class="header-navigation stricky">
                <div class="container clearfix" style="margin-top: 15px;">
                    <div class="main-nav__left">
                            <!-- <a href="#" class="main-nav__search search-popup__toggler"><i
                                    class="icon-magnifying-glass"></i></a> -->
                            <a href="#" class="side-menu__toggler" >
                                <i class="fa fa-bars" ></i>
                            </a>
                        </div>
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                            <li class="dropdown <?php echo $index ?>">
                            <a 
                            style="font-family:'Arial',cursive;" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['index'] ?></a>
                            </li>
                            <li class="dropdown  <?php echo $about ?>">
                            <a
                            style="font-family:'Arial',cursive;"              href="<?php echo 'about.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['about'] ?></a>
                            </li>
                            <li class="dropdown <?php echo $service ?>">
                            <a 
                            style="font-family:'Arial',cursive;"            href="<?php echo 'service.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['products'] ?></a>
                            </li>
                            <li class="dropdown <?php echo $agriculture ?>">
                            <a 
                            style="font-family:'Arial',cursive;"           href="<?php echo 'agriculture.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['agriculture'] ?></a> 
                            </li>
                            <li class="dropdown <?php echo $projects ?>">
                            <a 
                            style="font-family:'Arial',cursive;"             href="<?php echo 'projects.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['equipments'] ?></a>
                                 
                            </li>
                           
                            <li class="dropdown <?php echo $contact ?>">
                            <a 
                            style="font-family:'Arial',cursive;"           href="<?php echo 'contact.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['contact'] ?></a>
                                    </li>
        <!-- <li class="flag" > -->
</ul>
<div class="dropdown" >
    <button class="btn btn-light" type="button" data-toggle="dropdown" style="margin-top:40px;border:none;background:none;box-shadow:none;transform:none"> <?php echo $language1 ?>
   </button>
   
    <ul class="dropdown-menu" style="min-width:44px; margin-top: -27px;margin-left: 13px; padding-bottom: 10px; padding-top:0; padding: top 15px;">    
    <li style="padding-top: 10px;">
    <?php echo $language2 ?>
    </li>
    <li>
        <?php echo $language3 ?>
    </li>
    <li>
    <?php echo $language4 ?>
    </li>                          
                                            
    </ul>
    </div>

<div class="main-nav__right">
                            <div class="icon_cart_box">
                                <a href="cart.html">
                                    <!-- <span class="icon-shopping-cart"></span> -->
                                </a>
                            </div>
                        </div>
                    </div>
</div>
                </nav>
            </header>
        </div>
        

        
  
    <!-- </div>
    <div class="main-nav__right">
                            <div class="icon_cart_box">
                                <a href="cart.html">
                                    <span class="icon-shopping-cart"></span>
                                </a> -->
    <!-- </div>       -->

                  <!-- </li> -->

                    <!-- /.navbar-collapse -->

               
    <!-- <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a> -->


    <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/bootstrap-select.min.js"></script>
   <script src="assets/js/bootstrap-datepicker.min.js"></script>
