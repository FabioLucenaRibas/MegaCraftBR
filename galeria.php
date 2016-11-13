<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Galeria | MegaCraftBR</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/favicon.ico" >
<!-- START CSS -->	
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.css.map" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href='css/style-menu.css' rel='stylesheet' type='text/css'>	
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/gridGallery.css" />
<!-- START Javascript -->	
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="js/tremer.js"></script> 	
	<script src="js/main.js"></script>
	<!-- SCRIPTS FOR FOR THE PLUGIN-->
    <script src="js/rotate-patch.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/autoGrid.min.js"></script>
</head>
<body>
<div id="loading_page">
<div class="preloader-master preloader">
<i class="fa fa-circle-o-notch fa-spin fa-4x fa-fw margin-bottom"></i></div>
<!--- <div class="intro-text-master intro-text"></div> --->
</div>
	<header class="cd-header">
		<div class="cd-logo"><a href="index.php"><img src="img/home.png" alt="Logo"></a></div>

		<nav>
			<ul class="cd-secondary-nav">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="vips.php">Vips</a></li>
							<li><a href="moedas.php">Moedas</a></li>
							<li><a href="http://forum.megacraftbr.com.br/">Forum</a></li>
							<li><a href="galeria.php">Galeria</a></li>
							<li><a href="cores.php">Tabela de Cores</a></li>
							<li><a href="downloads.php">Downloads</a></li>
							<li><a href="suporte.php">Suporte</a></li>
			</ul>
		</nav> <!-- cd-nav -->

		<a class="cd-primary-nav-trigger" href="#0">
			<!--<span class="cd-menu-text">Menu</span>--><span class="cd-menu-icon"></span>
		</a> <!-- cd-primary-nav-trigger -->
	</header>

	<nav>
		<ul class="cd-primary-nav">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="vips.php">Vips</a></li>
							<li><a href="moedas.php">Moedas</a></li>
							<li><a href="http://forum.megacraftbr.com.br/">Forum</a></li>
							<li><a href="galeria.php">Galeria</a></li>
							<li><a href="cores.php">Tabela de Cores</a></li>
							<li><a href="downloads.php">Downloads</a></li>
							<li><a href="suporte.php">Suporte</a></li>
		</ul>
	</nav>
    <!-- SCENERY START -->
    <div class="scenery">
        <div class="clouds" id="clouds"></div>
        <div class="mountains mountains3">
            <div class="mountains mountains2">
                <div class="mountains mountains1">
                    <div class="beast beast_small" id="beast_small"></div>
                    <div class="grass1">
                        <div class="beast beast_big" id="beast_big"></div>
                        <div class="bushes">
                            <div class="bush1">
                                <div class="bush2"></div>
                            </div>
                            <div class="grass2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FLOATBOX START -->
        <div class="floatbox" id="floatbox">
            <div class="tremer"><h1 class="logo"><img src="img/logo-megacraftbr.png" alt="Company logo"></h1></div>
            			<header>
            <!-- Header Content / Intro Area Start -->
            <p>VISITE NOSSO SERVER</p>
            <p>JOGAR.MEGACRAFTBR.COM.BR</p>
            <p>Servidor MegaCraftBR Super Classico com  Mine-game e Novo servidor SKYBLOCK.</p>
            <!-- Header Content / Intro Area Start  END -->
			</header>

        </div>
        <!-- FLOATBOX END -->
    </div>

  <!-- SCENERY END -->
    <section class="content-area" id="content-area">
    <div class="row">            
	<section class="col-md-12 content-section">		
	<div id="grid" data-directory="gallery"></div>	
    <script>
      $(function(){
            //INITIALIZE THE PLUGIN
            $('#grid').grid({
                categoriesOrder: 'byName', //byDate, byDateReverse, byName, byNameReverse, random
                imagesOrder: 'byDate', //byDate, byDateReverse, byName, byNameReverse, random
                isFitWidth: true, //Nedded to be true if you wish to center the gallery to its container
                lazyLoad: true, //If you wish to load more images when it reach the bottom of the page
                showNavBar: true, //Show the navigation bar?
                smartNavBar: true, //Hide the navigation bar when you don't have categories or just 1
                imagesToLoadStart: 15, //The number of images to load when it first loads the grid
                imagesToLoad: 5, //The number of images to load when you click the load more button
                aleatoryImagesFromCategories: true,//Get few images from each category if not it will get them in order
                horizontalSpaceBetweenThumbnails: 15, //The space between images horizontally
                verticalSpaceBetweenThumbnails: 15, //The space between images vertically
                columnWidth: 'auto', //The width of each columns, if you set it to 'auto' it will use the columns instead
                columns: 5, //The number of columns when you set columnWidth to 'auto'
                columnMinWidth: 220, //The minimum width of each columns when you set columnWidth to 'auto'
                isAnimated: true, //Animation when resizing or filtering with the nav bar
                caption: true, //Show the caption in mouse over
                captionCategory: true,//Show the category section of the caption
                captionType: 'grid', // 'grid', 'grid-fade', 'classic' the type of caption effect
                lightBox: true, //Do you want the lightbox?
                lightboxKeyboardNav: true, //Keyboard navigation of the next and prev image
                lightBoxSpeedFx: 500, //The speed of the lightbox effects
                lightBoxZoomAnim: true, //Do you want the zoom effect of the images in the lightbox?
                lightBoxText: true, //If you wish to show the text in the lightbox
                lightboxPlayBtn: true, //Show the play button?
                lightBoxAutoPlay: false, //The first time you open the lightbox it start playing the images
                lightBoxPlayInterval: 4000, //The interval in the auto play mode 
                lightBoxShowTimer: true, //If you wish to show the timer in auto play mode
                lightBoxStopPlayOnClose: false, //Stop the auto play mode when you close the lightbox?
            });
      });
    </script>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
	<!-- CONTENT END-->
    <!-- FOOTER START -->
    <footer class="page-footer">
        <div class="footer-top-bg"></div>
        <div class="footer-content-wrapper">
        <!----------------------------------------------------------------------------------- 
        To use this Template you NEED TO KEEP the Designed By sycoinc link in the footer.
        Without this in the footer i ask you do not use this template UNLESS HEAVILY EDITED.
        Since this is a free Template this is all i ask when you use this.
        ------------------------------------------------------------------------------------>
            <div class="footer-content">
				  <!-- SOCIAL START -->
            <section class="social">
                <p><span class="follow-text">Siga-nos</span>
                    <a href="https://twitter.com/megacraftbr" class="twitter social-link"></a>
                    <a href="https://www.facebook.com/megacraftbrasil" class="facebook social-link"></a>                  
					<a href="http://www.planetminecraft.com" class="pmc social-link"></a>
                    <!-- ADDITIONAL SOCIAL ICONS -->
                    <!--
                    <a href="#" class="amazon social-link"></a>
                    <a href="#" class="android social-link"></a>
                    <a href="#" class="apple social-link"></a>
                    <a href="#" class="appstore social-link"></a>
                    <a href="#" class="behance social-link"></a>
                    <a href="#" class="blogger social-link"></a>
                    <a href="#" class="delicious social-link"></a>
                    <a href="#" class="deviantart social-link"></a>
                    <a href="#" class="digg social-link"></a>
                    <a href="#" class="dribbble social-link"></a>
                    <a href="#" class="dropbox social-link"></a>
                    <a href="#" class="ebay social-link"></a>
                    <a href="#" class="facebook social-link"></a>
                    <a href="#" class="flickr social-link"></a>
                    <a href="#" class="forrst social-link"></a>
                    <a href="#" class="google social-link"></a>
                    <a href="#" class="googledisc social-link"></a>
                    <a href="#" class="googleplus social-link"></a>
                    <a href="#" class="hotmail social-link"></a>
                    <a href="#" class="html5 social-link"></a>
                    <a href="#" class="instagram social-link"></a>
                    <a href="#" class="lastfm social-link"></a>
                    <a href="#" class="linkedin social-link"></a>
                    <a href="#" class="myspace social-link"></a>
                    <a href="#" class="paypal social-link"></a>
                    <a href="#" class="picasa social-link"></a>
                    <a href="#" class="pinterest social-link"></a>
                    <a href="#" class="rss social-link"></a>
                    <a href="#" class="skype social-link"></a>
                    <a href="#" class="soundcloud social-link"></a>
                    <a href="#" class="stumbleupon social-link"></a>
                    <a href="#" class="technorati social-link"></a>
                    <a href="#" class="tumblr social-link"></a>
                    <a href="#" class="twitter social-link"></a>
                    <a href="#" class="vimeo social-link"></a>
                    <a href="#" class="windows social-link"></a>
                    <a href="#" class="wordpress social-link"></a>
                    <a href="#" class="yahoo social-link"></a><br>
					<a href="#" class="youtube social-link"></a>
                    
                    -->
                </p>
            </section>
            <!-- SOCIAL START -->
				<!-- FOOTER CONTENT START -->
                MegaCraftBR &copy; 2013 - Template Designed by <a href="http://www.minecraftwebsitetemplates.com">sycoinc</a>
                <!-- FOOTER CONTENT END -->
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->
    <!-- SCRIPTS AND TECHICAL STUFF -->
	<script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.backgroundpos.min.js"></script>
    <script src="js/jquery.tweet.js"></script>
    <script src="js/script.js"></script>
    <div id="fake_timer" style="display:none"></div>
    <div class="pattern"></div>
</div>
<!-- .content-container -->
</body>
</html>