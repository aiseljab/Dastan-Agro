<?php
$index = '';
$about = '';
$service = '';
$projects = 'current';
$agriculture='';
$contact = '';
 

include_once "header.php";
?>

        <section class="page-header" style="background-image: url(assets/images/header.jpg);">
            <div class="container">
                <h2>TEXNİKALAR </h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li style="font-family: Arial"><a href="index.php">Əsas SƏHİFƏ</a></li>
                    <li style="font-family: Arial"><span>Texnikalar</span></li>
                </ul>
            </div>
        </section>

        <section class="recent-project our_projects">
            <div class="container">
                <div class="row repeated-html" id="repeated-html">
                
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="our_projects_btn">
                            <!-- <a href="#" class="thm-btn">Load More Projects</a> -->
                            <button class="thm-btn" id="lmbutton" onclick="loadmore()" >Load More Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<div class="side-menu__block">
    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">
        <div class="side-menu__top justify-content-end">
            <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                    src="assets/images/shapes/close-1-1.png" alt=""></a>
        </div><!-- /.side-menu__top -->

        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>

        <div class="side-menu__sep"></div><!-- /.side-menu__sep -->

        <div class="side-menu__content">
            <p><a href="mailto:needhelp@tripo.com">info@dastanagro.com</a> <br> <a href="tel:888-999-0000">+994 12 504 77 77
                 </a></p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
            </div>
        </div>
    </div>
</div>


<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>



        <?php include_once "footer.php" ?>
        <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/typed-2.0.11.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/appear.js"></script>

    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>
  
   
    
    <script>

        let recent_projects = [["https://azsf.az/upload/letters/kNJ9oKyIZvgMLx4UnITnI278_fKl8A9R.jpg", 
                                "Ropa Tiger 6", "Ropa Tiger 6", 
                                "Dünyanın ən güclüsü sayılan, və innovativ texniki özəlliklərə malik ROPA TIGER 6  ilə şəkər çuğunduru yığımı daha keyfiyyətli və itkisiz şəkildə həyata keçirilir."],
                                
                                ["https://azsf.az/upload/letters/N0BwS3YXeqIMsDAqGa1s_pLHto45zMCU.jpg", 
                                "John Deere S760", "John Deere S760", 
                                "Premium kabin və işıqlandırma, avtotrack (GPS/RTK), arxa görünüş kamerası, təzimləyici ventilyatorun sürətinin və ələklərin ara məsafəsinin avtomatik tənzimlənməsi və boşaltma sistemi, başlıq idarəetmə sistemləri ilə qarğıdalı, taxıl, soya kimi məhsulların biçini həyata keçirilə bilir."],
                                
                                ["https://azsf.az/upload/letters/7Y8A1F7CsZe2S1DeAsp66YQSJaCnbDeP.jpg", 
                                "John Deere 7930", "Ropa Tiger 6", 
                                "220 at gücü, Tier II/III mühərriki, kondisioner, premium işıqlandırma özəlliyinə malik kənd təsərrüfatı texnikasıdır."],
                                
                                ["https://azsf.az/upload/letters/KS15xNZdUj-VzjVMuDbjErHSu5L8Vxwk.jpg", 
                                "John Deere 6155", "John Deere 6155", 
                                "155 at gücü, Tier II/III mühərriki, kondisioner, premium işıqlandırma özəlliyinə malik kənd təsərrüfatı texnikasıdır."],
                                
                                ["https://azsf.az/upload/letters/OKWtQCJlvMIv5NMb9uiXaoR6i7qdb_Ar.jpg", 
                                "Class Axion 940", "Class Axion 940", 
                                "360-375 at gücü, Tier II/IIIA mühərriki, kondisioner, GPS sistemi, premium işıqlandırma kimi özəlliyə malik müasir kənd təsərrüfatı texnikasıdır."],
                                
                                ["https://azsf.az/upload/letters/74-pqn8LGJlFHIMD_8cDbbF3OlWKNpw1.jpg", 
                                "Class Axion 820", "Class Axion 820", 
                                "183 at gücü, Tier II/IIIA mühərriki, kondisioner, GPS sistemi, premium işıqlandırma kimi özəlliyə malik müasir kənd təsərrüfatı texnikasıdır."],

                                ["https://azsf.az/upload/letters/NxEzBBFiVOMeOa6ukRz-dgMXyX3CTqm2.jpeg", 
                                "Belarus1523.2", "Belarus1523.2", 
                                "148 at gücünə malik kənd təsərrüfatı əməliyyatlarında və daşınmalarda istifadə olunan traktor.."],
                                
                                ["https://azsf.az/upload/letters/Dfh9kyioORv4kOrmtOfK7FOfFVG8rYNo.jpg", 
                                "John Deere HydraFlex 600 625 F", "John Deere HydraFlex 600 625 F", 
                                "Uzunluğu 8,2 m olan, sahənin relyefinin formasını alan kombayn başlığı ilə məhsul yığımı itkisiz həyata keçirilir."],
                                
                                ["https://azsf.az/upload/letters/B05zk6nxmkT4ZXHuJoLHI6Dd0oQGooSl.jpg", 
                                "Lemken5+1", "Lemken5+1", 
                                "Diş sayı 5+1, çevriləbilən, parking dayağı, işləmə dərinliyi mexaniki tənzimlənən, anti-şok sisteminə malik olan texnika müasir təsəürrüfatlar üçün əvəzolunmaz kotanlardandır."]

]

        let equipments = document.querySelector(".repeated-html");

        function createEquipment([img, alt, title, content]){
            let code = `
                    <div class='col-xl-4 col-lg-4'>
                        <div class='recent_project_single mrb-30'>
                            <div class='project_img_box' >
                                <img id='image' src='${img}' alt='${alt}'> 
                                <div class='recent-pro-text'>
                                    <div class='project_content'>
                                        <h3 id='title'>${title}</h3>
                                    </div>
                                    <div class='hover_box'>
                                        <p>${content}</p>
                                    </div>                                    

                                </div>
                            </div>
                        </div>
                    </div>`;
            equipments.innerHTML += code;
        };

        let currenting = 6;
        for (var i = 0; i < currenting; i++){
            createEquipment(recent_projects[i]);
        }
        
        let btn = document.querySelector(".thm-btn");
        btn.onclick = () =>{
            for (var i = currenting; i <currenting + 1; i++){
                createEquipment(recent_projects[i]);
                currenting += 1;

                if (currenting >= recent_projects.length){
                    btn.style.visibility = "hidden";
                };
            }
        }

        </script> 
