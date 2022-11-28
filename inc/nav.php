<body>
    <!-- Loader -->
    <div id="loader">
        <div class="loading">
            <div><img src="assets/img/logo.png" alt=""></div>
        </div>
    </div>
    <!-- Sidebar -->
    <div class="togo-fixed-sidebar togo-sidebar-left">
		<div class="togo-header-container">
			<!--Logo-->
            <div class="logo">
                <a class="logo-blck" href="index.php"><img src="assets/img/logo.png" alt=""></a>
            </div>
			<!-- Burger menu -->
			<div class="burger-menu">
				<div class="line-menu line-half first-line"></div>
				<div class="line-menu"></div>
				<div class="line-menu line-half last-line"></div>
			</div>
			<!--Navigation menu-->
            <nav class="togo-menu-fixed">
                <ul>
					<!-- <li class="current-menu"><a href="index.html">Home</a></li> -->
					<li class="drop-down wow fadeInUp" data-wow-duration="2s"><a href="#">Project</a>
                        <ul class="drop-dwn-list">
                        <li class="drop-down <?php if($page == 'services.php'){echo 'active';}?> wow fadeInUp"><a href="#">Interior Design</a>
                        <ul class="drop-dwn-list">
                            <li class="drop-down"><a class="<?php if($page == 'commercial.php'){echo 'active';}?> wow fadeInUp" href="commercial.php">Commercial</a>
                            <li class="drop-down"><a class="<?php if($page == 'residential.php'){echo 'active';}?> wow fadeInUp" href="residential.php">Residential</a>
                        </ul>
                            <li class="drop-down"><a class="<?php if($page == 'architectural.php'){echo 'active';}?> wow fadeInUp" href="architectural.php">Architectural Design</a></li>
                            <li class="drop-down"><a class="<?php if($page == 'productgraphic.php'){echo 'active';}?> wow fadeInUp" href="productgraphic.php">Product & Graphic Design</a></li>
                        </ul>
                    </li>
                        <!-- <li><a href="about-us.html">About Us</a></li> -->
                        
					<li><a class="<?php if($page == 'services.php'){echo 'active';}?> wow fadeInUp" data-wow-duration="2.5s" href="services.php">Service</a></li>
					<li><a class="<?php if($page == 'contact.php'){echo 'active';}?> wow fadeInUp" data-wow-duration="3s" href="contact.php"> Contact</a></li>
				</ul>
			</nav>

            <div class="menu-mobile">
            <ul>
                <li><a class="wow fadeInUp" data-wow-duration="3s" href="#">Portfolio</a></li>
                <li><a class="wow fadeInUp" data-wow-duration="4s" href="#">Questionaire</a></li>
                <!-- <audio id="#my_audio" src="assets/mp3/Fashion-Luxury-Lounge.mp3"></audio> -->
                <!-- <button id="plp" class="ad-control"><i class="fa fa-volume-off"></i><i class="fa fa-volume-up"></i>kk</button> -->
            </ul>
        </div>
            
			<!-- Menu social media -->
			<div class="togo-menu-social-media">
                <div class="social">
                    <a class="wow fadeInDown" data-wow-duration="1.5s" href="https://www.facebook.com/albaldesign/" target="_blank"><i class="ti-facebook"></i></a>
                    <a class="wow fadeInDown" data-wow-duration="2s" href="https://www.instagram.com/albal_design/" target="_blank"><i class="ti-instagram"></i></a>
                    <a class="wow fadeInDown" data-wow-duration="2.5s" href="https://www.linkedin.com/company/albal-design" target="_blank"><i class="ti-linkedin"></i></a>
                    <a class="wow fadeInDown" data-wow-duration="3s" href="https://www.youtube.com/channel/UC0U-ta_g34oR-avsDfAD-LA" target="_blank"><i class="ti-youtube"></i></a>
                </div>
                <div class="togo-menu-copyright text-left mb-0 mt-0">
                    <p><b style="color:#000;">ALBAL DESIGN STUDIO</b> <br>Umm Suqeim 1, Jumeirah Beach Road (Opposite Ajman Bank), Dubai, UAE</p>
                </div>
            </div>
		</div>
    </div>

    <div class="right-sudebar">
        <div class="menu">
            <ul>
                <li><a class="wow fadeInUp" data-wow-duration="3s" href="#">Portfolio</a></li>
                <li><a class="wow fadeInUp" data-wow-duration="4s" href="#">Questionaire</a></li>
                <!-- <button id="plp" class="ad-control paush1"><i class="fa fa-volume-off"></i><i class="fa fa-volume-up"></i>lll</button>  -->
            </ul>
        </div>
    </div>
    <!-- Content -->
    <div class="togo-side-content">