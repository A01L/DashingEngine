<?php
$link = cut_text(1, $_SERVER['REQUEST_URI'], 8);
$rid = get_data('route', 'id', 'name', $link);
$oid = get_data('route', 'oid', 'name', $link);
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo get_data('organization', 'organization', 'id', $oid); ?> | Галерея</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="../public/eorox/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/eorox/css/animate.min.css">
        <link rel="stylesheet" href="../public/eorox/css/magnific-popup.css">
        <link rel="stylesheet" href="../public/eorox/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../public/eorox/font-flaticon/flaticon.css">
        <link rel="stylesheet" href="../public/eorox/css/dripicons.css">
        <link rel="stylesheet" href="../public/eorox/css/slick.css">
        <link rel="stylesheet" href="../public/eorox/css/meanmenu.css">
        <link rel="stylesheet" href="../public/eorox/css/default.css">
        <link rel="stylesheet" href="../public/eorox/css/style.css">
        <link rel="stylesheet" href="../public/eorox/css/responsive.css">
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
                                    <a href='../<?php echo get_data("route", "name", "oid", $oid); ?>'><h1><?php echo get_data('organization', 'organization', 'id', $oid); ?></h1></a>
                                </div>
                            </div>
                             <div class="col-xl-2 col-lg-2">
                                
                            </div>
                            <div class="col-xl-6 col-lg-6">
                              
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                          
                                             <li><a href="../<?php echo get_data("route", "name", "oid", $oid); ?>#about">О нас</a></li>
                                           
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
                                                                                          
                                            <li><a href="../<?php echo get_data("route", "name", "oid", $oid); ?>#blog">Блог</a></li>                                               
                                            <li><a href="../<?php echo get_data("route", "name", "oid", $oid); ?>#contact">Контакты</a></li>                                               
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
        <!-- offcanvas-area -->
                <div class="offcanvas-menu">
                <span class="menu-close"><i class="fas fa-times"></i></span>
              <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                                <input type="text" name="s" id="search" value="" placeholder="Search"  />
                                <button><i class="fa fa-search"></i></button>
                            </form>

                    
                    <div id="cssmenu3" class="menu-one-page-menu-container">
                        <ul id="menu-one-page-menu-2" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="services.html">Services</a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Team </a></li>
                             
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery Study</a></li>
                             <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>  
                    
                    <div id="cssmenu2" class="menu-one-page-menu-container">
                        <ul id="menu-one-page-menu-1" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
                        </ul>
                    </div>                
            </div>
            <div class="offcanvas-overly"></div>
                 <!-- offcanvas-end -->
        <!-- main-area -->
        <main>
            
            <!-- search-popup -->
		<div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content search-popup">
					<div class="text-center">
						<a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
					</div>
					<div class="row search-outer">
						<div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
						<div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /search-popup -->
            <!-- breadcrumb-area -->
             <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(../public/eorox/img/bg/blog-hd.png)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>Галерея</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
			<!-- gallery-area -->
            <section id="work" class="pb-90">
                <div class="container">                  
					<div class="portfolio ">
               
                      

                <div class="grid col4">
                    <?php
				$conn = $GLOBALS['ectr_connect'];  
				$sql = "SELECT * FROM `gallery` WHERE `oid` = '$oid' ORDER BY `id` DESC";
				if($result = $conn->query($sql)){
				   $rowsCount = $result->num_rows; // ID - constant
				   foreach($result as $row){
				   ?>
						<div class="grid-item website" style="position: absolute; left: 0%; top: 0px;">     
                            <div class="box">
                                <a href="../public/gallery/<?php echo $row['path']; ?>" class="popup-image"> <img src="../public/gallery/<?php echo $row['path']; ?>" alt="protfolio"></a>
                        </div>
                            <a href="../public/gallery/<?php echo $row['path']; ?>" class="popup-image box-hover"> <i class="fas fa-search"></i></a>
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
                </div>
            </section>
             <!-- gallery-area-end -->
         
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
        <script src="../public/eorox/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="../public/eorox/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="../public/eorox/js/popper.min.js"></script>
        <script src="../public/eorox/js/bootstrap.min.js"></script>
        <script src="../public/eorox/js/slick.min.js"></script>
        <script src="../public/eorox/js/ajax-form.js"></script>
        <script src="../public/eorox/js/paroller.js"></script>
        <script src="../public/eorox/js/wow.min.js"></script>
        <script src="../public/eorox/js/js_isotope.pkgd.min.js"></script>
        <script src="../public/eorox/js/imagesloaded.min.js"></script>
        <script src="../public/eorox/js/parallax.min.js"></script>
         <script src="../public/eorox/js/jquery.waypoints.min.js"></script>
        <script src="../public/eorox/js/jquery.counterup.min.js"></script>
        <script src="../public/eorox/js/jquery.scrollUp.min.js"></script>
        <script src="../public/eorox/js/jquery.meanmenu.min.js"></script>
        <script src="../public/eorox/js/parallax-scroll.js"></script>
        <script src="../public/eorox/js/jquery.magnific-popup.min.js"></script>
        <script src="../public/eorox/js/element-in-view.js"></script>
        <script src="../public/eorox/js/main.js"></script>
    </body>
</html>