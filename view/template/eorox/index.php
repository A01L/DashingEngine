<?php
$link = cut_text(1, $_SERVER['REQUEST_URI'], 0);
$rid = get_data('route', 'id', 'name', $link);
$oid = get_data('route', 'oid', 'name', $link);

tracker($link);
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo get_data('organization', 'organization', 'id', $oid); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="public/eorox/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/eorox/css/animate.min.css">
        <link rel="stylesheet" href="public/eorox/css/magnific-popup.css">
        <link rel="stylesheet" href="public/eorox/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="public/eorox/font-flaticon/flaticon.css">
        <link rel="stylesheet" href="public/eorox/css/dripicons.css">
        <link rel="stylesheet" href="public/eorox/css/slick.css">
        <link rel="stylesheet" href="public/eorox/css/meanmenu.css">
        <link rel="stylesheet" href="public/eorox/css/default.css">
        <link rel="stylesheet" href="public/eorox/css/style.css">
        <link rel="stylesheet" href="public/eorox/css/responsive.css">
    </head>
    <body>
     <!-- header -->
        <header class="header-area header-three">  
           
			<div id="header-sticky" class="menu-area">
                <div class="container-fluid pl-50 pr-50">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-1 col-lg-1">
                                <div class="logo">
                                    <a href='<?php echo get_data("route", "name", "oid", $oid); ?>'><h1><?php echo get_data('organization', 'organization', 'id', $oid); ?></h1></a>
                                </div>
                            </div>
                             <div class="col-xl-2 col-lg-2">
                                
                            </div>
                            <div class="col-xl-6 col-lg-6">
                              
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                          
                                             <li><a href="#about">О нас</a></li>
                                           
                                             <!--<li class="has-sub"><a href="gallery.html">Pages</a>
												<ul>
                                                   <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="game.html">Our Game</a></li>
                                                    <li><a href="matchese.html">Matchese</a>
												</li>
                                                <li><a href="matchese-details.html">Matchese Details</a></li>
                                                    <li><a href="live-streaming.html">Live Streaming</a></li> <li><a href="error.html">404 Page</a></li>
                                                </ul>
											</li>-->
                                                                                          
                                            <li><a href="#blog">Блог</a></li>                                               
                                            <li><a href="#contact">Контакты</a></li>                                               
                                        </ul>
                                    </nav>
                                </div>
                            </div>   
                            <div class="col-xl-2 col-lg-2 text-left d-none d-lg-block mt-30 mb-30">
                               <div class="cart-top">
                                   <ul>
                                        <li><a href="/Link?r=<?php echo get_data_two("links", "trac", "oid", $oid, "name", "instagram"); ?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="/Link?r=<?php echo get_data_two("links", "trac", "oid", $oid, "name", "whatsapp"); ?>"><i class="fab fa-whatsapp"></i></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                          
                               
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
  
      
        <!-- main-area -->
        <main>
            
        
            <!-- slider-area -->
            <section id="home" class="slider-area slider-four fix p-relative">
               
                <div class="slider-active">
				<div class="single-slider slider-bg d-flex align-items-center" style="background: url(public/eorox/img/slider/bg.jpeg) no-repeat;background-size: cover; background-position: center top;">
                        <div class="container">
                           <div class="row justify-content-center pt-50">
                               <div class="col-lg-1 col-md-1">
                               </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="slider-content s-slider-content">
                                        <h5 data-animation="fadeInDown" data-delay=".4s">#<?php echo get_data_two('pages', 'title2', 'oid', $oid, 'type', 'intro'); ?></h5>
                                         <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo get_data_two('pages', 'title', 'oid', $oid, 'type', 'intro'); ?></h2>
                                         <div class="slider-btn">                                          
                                            <a href="#about" class="btn ss-btn mr-15"><?php echo get_data_two('pages', 'data', 'oid', $oid, 'type', 'intro'); ?></a>
                                        
                                        </div>   
                                        
                                                              
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    </div>
                    
               
            </section>
            <!-- slider-area-end -->
             
             <!-- about-area -->
            <section id="about" class="about-area about-p pt-70 pb-120 p-relative"  style="background: url(public/eorox/img/bg/about-bg.png) no-repeat;">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative" >
                                <img src="public/eorox/img/features/about_img.png" alt="img">    
                            </div>
                        
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-30">
                                <div class="about-title second-title pb-25">  
                                    <h2><?php echo get_data_two('pages', 'title', 'oid', $oid, 'type', 'about'); ?> <span><?php echo get_data_two('pages', 'title2', 'oid', $oid, 'type', 'about'); ?></span></h2>
                                     <div class="line"> <img src="public/eorox/img/bg/circle_left.png" alt="circle_right"></div>
                                   
                                </div>
                                
                                <p><?php echo get_data_two('pages', 'data', 'oid', $oid, 'type', 'about'); ?> </p>
                                <div class="about-content3 mt-30">
                                    <div class="row">
                                    <div class="col-md-12">
                
                                    </div>
                            
                                    </div>
                                    
                                
                                </div>
                                <div class="slider-btn2 mt-30">                                          
                                    <a href="/<?php echo get_data('route', 'name', 'oid', $oid); ?>/Gallery" class="btn ss-btn">Наша галерея !</a>					
                                </div>
                              
                      
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
         
           
            <!-- features-area -->
            <section id="graph" class="features-area pt-120 pb-120"  style="background:url('public/eorox/img/bg/video-bg.png');">
                <div class="container">
          
                    <div class="row align-items-center text-center">
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="section-title cta-title  mb-20"> 
                                <h2><?php echo get_data_two('pages', 'title', 'oid', $oid, 'type', 'join'); ?></h2>
                                <p><?php echo get_data_two('pages', 'data', 'oid', $oid, 'type', 'join'); ?> </p>
                            </div>
                            <a href="#contact" class="btn ss-btn mr-15 mt-20 active"><?php echo get_data_two('pages', 'title2', 'oid', $oid, 'type', 'join'); ?></a>
                        
                        </div>
                                             
						
                    </div>
                    
                </div>
            </section>
            <!-- features-area-end -->
         
             
             <!-- blog-area -->
            <section id="blog" class="blog-area  p-relative pt-120 pb-170 fix" style="background: url(public/eorox/img/bg/blog-bg.png) no-repeat; background-position: right bottom;">
                   
                <div class="container">
                
                    <div class="row">
                       
                    <?php
                        $conn = $GLOBALS['ectr_connect'];  
                        $sql = "SELECT * FROM `blogs` WHERE `oid` = '$oid' ORDER BY `id` DESC LIMIT 3";
                        if($result = $conn->query($sql)){
                           $rowsCount = $result->num_rows; // ID - constant
                           foreach($result as $row){
                           
                           ?>
                               <div class="col-lg-4 col-md-12">
                                    <div class="single-post2 mb-30  p-relative">
                                        <div class="blog-thumb2">
                                            <a href="Blog/<?php echo $row['id']; ?>"><img src="public/posts/<?php echo $row['img']; ?>" alt="img"></a>
                                    
                                        </div>
                                        <div class="blog-content2">     
                                 
                                    
                                             <div class="row">
                                                <div class="col-lg-12">
                                                 <h4><a href="Blog/<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>    
                                                    <div class="b-meta">
                                                     
                                                    </div>
                                                    <p><?php echo $row['data']; ?></p>
                                                </div>
                                            </div>
                                    
                                    
                                     
                                        </div>
                                
                                
                                    </div>
                                </div>
                           <?php

                           }
                           if ($rowsCount == "0") {           
      
                           }
                           $result->free();
                        } else{
                              echo "Ошибка: " . $conn->error;
                          }
                    ?>
                        
                      
                        
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->
       
            
		     <!-- contact-area -->
            <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix" >
                
                <div class="container">
             
					<div class="row">
						
                         <div class="col-lg-6">
                         <div class="contact-info">
						  <div class="section-title center-align">
                               
                                <h2>
                                   <?php echo get_data_two('pages', 'title', 'oid', $oid, 'type', 'footer1'); ?> <br> <span><?php echo get_data_two('pages', 'title2', 'oid', $oid, 'type', 'footer1'); ?></span>
                                </h2>
                                <span class="line5"> <img src="public/eorox/img/bg/f-line.png" alt="circle_left"></span>
                               <p><?php echo get_data_two('pages', 'data', 'oid', $oid, 'type', 'footer1'); ?> </p>
                            </div>
                             <div class="row mt-50">
                                <div class="col-lg-6">
                                 <h4><?php echo get_data_two('pages', 'title', 'oid', $oid, 'type', 'sub_footer'); ?></h4>
                                    <p>
                                        <?php echo get_data_two('pages', 'data', 'oid', $oid, 'type', 'sub_footer'); ?>
                                    </p>
                                 </div>
                                
                                
                             </div>
                            </div>
							
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-bg02 wow fadeInLeft  animated">
                            <div class="section-title center-align">
                               
                                <h2>
                                    <?php echo get_data_two('pages', 'title', 'oid', $oid, 'type', 'footer2'); ?><br> <span><?php echo get_data_two('pages', 'title2', 'oid', $oid, 'type', 'footer2'); ?> </span>
                                </h2>
                                <span class="line5"> <img src="public/eorox/img/bg/f-line.png" alt="circle_left"></span>
                                 <p><?php echo get_data_two('pages', 'data', 'oid', $oid, 'type', 'footer2'); ?> </p>
                            </div>
                             
						<form action="Form" method="post" class="contact-form mt-30">
                            <input name="oid" value="<?php echo $oid; ?>" readonly hidden>
							<div class="row">
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-30">                                    
                                    <input type="text" id="firstn" name="name" placeholder="Ваше мия" required>
                                </div>                               
                            </div>
							
							<div class="col-lg-6">                               
                                <div class="contact-field p-relative c-subject mb-30">                                   
                                    <input type="text" id="email" name="phone" placeholder="Телефон" required>
                                </div>
                            </div>		
                           
                            <div class="col-lg-6">                               
                                <div class="contact-field p-relative c-subject mb-30">                                   
                                    <input type="text" id="subject" name="title" placeholder="Заголовок" required>
                                </div>
                            </div>	
                            
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-30">                                  
                                    <textarea name="data" id="message" cols="30" rows="10" placeholder="Сообщение"></textarea>
                                </div>
                                <div class="slider-btn">                                          
                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Отправить</button>				
                                        </div>                             
                            </div>
                            </div>
                        
                    </form>
                            
                            </div>
                        
						</div>
					</div>
                    
                </div>
               
            </section>
            <!-- contact-area-end -->
			
         
        </main>
        <!-- main-area-end -->
        <!-- footer -->
        <footer class="footer-bg footer-p" style="background: #1e191f;">
          
            <div class="copyright-wrap">
                <center>
                  <div class="col-lg-6">                         
                             <?php echo get_data('organization', 'organization', 'id', $oid); ?> © 2023 Разработана на Dashing. 
                  </div>
                </center>
            </div>
        </footer>
        <!-- footer-end -->


		<!-- JS here -->
        <script src="public/eorox/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="public/eorox/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="public/eorox/js/popper.min.js"></script>
        <script src="public/eorox/js/bootstrap.min.js"></script>
        <script src="public/eorox/js/slick.min.js"></script>
        <script src="public/eorox/js/ajax-form.js"></script>
        <script src="public/eorox/js/paroller.js"></script>
        <script src="public/eorox/js/wow.min.js"></script>
        <script src="public/eorox/js/js_isotope.pkgd.min.js"></script>
        <script src="public/eorox/js/imagesloaded.min.js"></script>
        <script src="public/eorox/js/parallax.min.js"></script>
         <script src="public/eorox/js/jquery.waypoints.min.js"></script>
        <script src="public/eorox/js/jquery.counterup.min.js"></script>
        <script src="public/eorox/js/jquery.scrollUp.min.js"></script>
        <script src="public/eorox/js/jquery.meanmenu.min.js"></script>
        <script src="public/eorox/js/parallax-scroll.js"></script>
        <script src="public/eorox/js/jquery.magnific-popup.min.js"></script>
        <script src="public/eorox/js/element-in-view.js"></script>
        <script src="public/eorox/js/main.js"></script>
    </body>
</html>