<?php

session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	$success='<h2>Obrigado!</h2>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Suporte | MegaCraftBR</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/favicon.ico" >
<!-- START CSS PHP -->		
	<link rel="stylesheet" type="text/css" href="jqtransformplugin/jqtransform.css" />
	<link rel="stylesheet" type="text/css" href="formValidator/validationEngine.jquery.css" />
	<link rel="stylesheet" type="text/css" href="demo.css" />
	<?=$css?>
<!-- FIM CSS PHP -->	
<!-- START Javascript PHP -->	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>
	<script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="script.js"></script>
<!-- FIM Javascript PHP -->	
<!-- START CSS -->	
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.css.map" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href='css/style-menu.css' rel='stylesheet' type='text/css'>	
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">	
<!-- START Javascript -->	
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/tremer.js"></script> 
</head>
<body>
<div id="loading_page">
<div class="preloader-master preloader">
<i class="fa fa-circle-o-notch fa-spin fa-4x fa-fw margin-bottom"></i></div>
<!--- <div class="intro-text-master intro-text"></div> --->
</div>
<div class="content-container" id="content-container" style="display:none;">	
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
            <!-- Header Content / Intro Area Start -->
            <p>VISITE NOSSO SERVER
            <p>JOGAR.MEGACRAFTBR.COM.BR</p>
            <p>Servidor MegaCraftBR Super Classico com  Mine-game e Novo servidor SKYBLOCK.</p>
            <!-- Header Content / Intro Area Start  END -->

        </div>
        <!-- FLOATBOX END -->
    </div>
    <!-- SCENERY END -->
</div>
<!-- Mobile Menu END --> 
    <!-- CONTENT START -->
    <section class="content-area" id="content-area">
        <div class="container">
            <div class="row">
                <!-- COLUMN 1 START (ABOUT US) -->
                <section class="col-md-8 content-section"><h4 class="section-title"><span>SUPORTE ENVIE-NOS UMA MENSAGEM</span></h4>
				
<div id="main-container">
	<div id="pre3">
<span style="color: #303030;">
    <h4>Formulario de contato</h4></span>
<span style="color: #787878;">
    <h5>Fale diretamente com a Staff</h5>
    
    <form id="contact-form" name="contact-form" method="post" action="submit.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width="15%"><label for="name"><h5>Nome:</h5></label></td>
          <td width="70%"><div class="jqTransformInputWrapper" style="width: 178px;"><div class="jqTransformInputInner"><div><input type="text" class="validate[required,custom[onlyLetter]] jqtranformdone jqTransformInput" name="name" id="name" value=""></div></div></div></td>
          <td width="15%" id="errOffset">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="email"><h5>Email:</h5></label></td>
          <td><div class="jqTransformInputWrapper" style="width: 178px;"><div class="jqTransformInputInner"><div><input type="text" class="validate[required,custom[email]] jqtranformdone jqTransformInput" name="email" id="email" value=""></div></div></div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><label for="subject"><h5>Assunto:</h5></label></td>
          <td><select name="subject" id="subject">
            <option value="" selected="selected"> - Escolher -</option>
            <option value="'Perguntas'">Perguntas</option>
            <option value="'Denuncias'">Denuncias</option>
            <option value="'Duvidas sobre o VIP'">Duvidas sobre o VIP</option>
            <option value="'Duvidas sobre Moedas'">Duvidas sobre Moedas</option>
            <option value="'Outras'">Outras</option>
          </select>          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><label for="message"><h5>Mensagem:</h5></label></td>
          <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?></textarea></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="captcha"><h5><?=$_SESSION['n1']?> + <?=$_SESSION['n2']?> =</h5></label></td>
          <td><div class="jqTransformInputWrapper" style="width: 178px;"><div class="jqTransformInputInner"><div><input type="text" class="validate[required,custom[onlyNumber]] jqtranformdone jqTransformInput" name="captcha" id="captcha"></div></div></div></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td colspan="2"><input type="submit" class="i2Style" value="Confimar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" class="i2Style" value="Limpar" />
          
          <?=$str?>          <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
        </tr>
      </table>
      </form>
      <?=$success?>
    </div></span>
	<br/>                       
	<br/> 						
	<div id="pre3">
        <span style="color: #303030;"><h4>Skype da STAFF</h4></span>
		<div class="wrapper">
		<p class="address"><span style=' color:#303030; text-shadow: #000 1px 1px 10px; '>MegaKingBR:</span><span style="color: #787878;">&nbsp;&nbsp;megakingbr<br/></span></p>
		<p><span style='color:#303030; text-shadow: #000 1px 1px 10px; '>xXCritterXx:</span><span style="color: #787878;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xxcritter.xx<br/></span></p><br/>
		</div>
        <span style="color: #787878;"><p><i class="fa fa-envelope"></i>&nbsp;E-mail:<a href="mailto:">contato@megacraftbr.com.br</a></p><br/>						
		<h3 class="pad_top1">Informacoes</h3>
		<p class="miscellaneous">Server de Minecraft Super Classico, equipe dedicada, sempre fazendo o melhor para sua diversao.</p>
	</div>
  </section>
                <!-- COLUMN 1 END (ABOUT US)-->
				


                <!-- COLUMN 2 START (SCREENSHOTS) -->			
                <section class="col-md-3 content-section">
                  <h4 class="section-title"><span>Tweets mais recentes</span></h4>
			<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/MegaCraftBR" data-widget-id="577942239206383617">Tweets de @MegaCraftBR</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <!-- COLUMN 2 END (SCREENSHOTS) -->
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
                    <a href="#" class="yahoo social-link"></a>
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
	<script src="js/main.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
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