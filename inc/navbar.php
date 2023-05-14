<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Basic Page Needs
         ================================================== -->
      <meta charset="utf-8">
      <html lang='en-GB'>
         <!--[if IE]>
         <meta http-equiv="x-ua-compatible" content="IE=9" />
         <![endif]-->
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Esolution1 - The US Leading Building Estimators</title>
         <!-- ==============================================
            Favicons
            =============================================== -->
         <link rel="shortcut icon" href="front_assets/images/favicon.png">
         <link rel="apple-touch-icon" href="front_assets/images/favicon.png">
         <link rel="apple-touch-icon" sizes="72x72" href="front_assets/images/favicon.png">
         <link rel="apple-touch-icon" sizes="114x114" href="front_assets/images/favicon.png">
         <!-- ==============================================
            CSS VENDOR
            =============================================== -->
         <link rel="stylesheet" type="text/css" href="front_assets/css/vendor/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="front_assets/css/vendor/font-awesome.min.css">
         <link rel="stylesheet" type="text/css" href="front_assets/css/vendor/owl.carousel.min.css">
         <link rel="stylesheet" type="text/css" href="front_assets/css/vendor/owl.theme.default.min.css">
         <link rel="stylesheet" type="text/css" href="front_assets/css/vendor/magnific-popup.css">
         <!-- ==============================================
            Custom Stylesheet
            =============================================== -->
         <link rel="stylesheet" type="text/css" href="front_assets/css/style.css">
         <link rel="stylesheet" type="text/css" href="front_assets/cfgen-form-1/css/form.css">
         <link href="front_assets/css/style.css" rel="stylesheet" type="text/css">
         <script type="text/javascript" src="front_assets/js/vendor/modernizr.min.js"></script>
         <script type="text/javascript" src="front_assets/cfgen-form-1/js/form.js"></script>
   </head>
   <body>
   <div class="animationload">
         <div class="loader"></div>
   </div>
                <a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>
   <div class="top_nav">   
         <div class="phone-info ">
             <span style="font-size: 16px; padding-right: 20px;" class="ph_no"> 
                  <a href="tel: +1 (929) 396-0799" style="margin-left:7px; color: #fff;">
                  <i class="fa fa-phone"></i>+(929) 396-0799 </a>
             </span> 
             <span style="font-size: 16px;"> 
                <a href="mailto:info@esolution1.com" style="margin-left:7px;color: #fff;"><i class="fa fa-envelope"></i>
             <span class="__cf_email__" data-cfemail="u">info@esolution1.com
             </span>
                  </a>     
                <a href="mailto:info@mahiinnovation.com" style="margin-left:7px;color: #fff;"><i class="fa fa-envelope"></i>
             <span class="__cf_email__" data-cfemail="u">info@mahiinnovation.com
             </span>
                  </a>
                  <a href="https://mahiinnovation.co/" style="margin-left:7px;color: #fff;"><i class="fa fa-globe"></i>
             <span class="__cf_email__" data-cfemail="u">Esolution1 by Mahi innovation
             </span>
                  </a> 
              </span> 
         </div>
   </div>

   <!-- HEADER -->
   <div class="header header-1">
   <!-- NAVBAR SECTION -->
         <div class="navbar navbar-main">
              <div class="container container-nav">
                  <div class="row">
                     <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                         </button>
                     </div>
                  <a class="navbar-brand" href="index.php">
                     <!--<img src="front_assets/images/logo.png" alt="Building Estimators" style="width: 350px;height: 110px;margin: -20px;">-->
                     <h4 class="pt-3" style="padding-top: 20px;">Esolution1</h4>
                     <!--<img src="front_assets/images/logo.png" alt="Building Estimates" class="logo-stiky">-->
                  </a>
    <?php
        $index='active';
        $contact=$about=$works=$qa=$price=$contact='';
        	$current_page=$_SERVER['PHP_SELF'];
        	$page_name=explode('/',$current_page);
        	$final_page= end($page_name);
        	if($final_page=='index.php'){
        		$index='active';
        	}
        	if($final_page=='about-us.php'){
        		$about='active';
        		$index='';
        	}
        	if($final_page=='services.php'){
        		$services='active';
        		$index='';
        	}
        	if($final_page=='howitworks.php'){
        		$howitworks='active';
        		$index='';
        	}
      
        	if($final_page=='contact.php'){
        		$contact='active';
        		$index='';
        	}

        ?>
   <nav class="navbar-collapse collapse ">
         <ul class="nav navbar-nav navbar-right ">
             <li class="<?php echo $index?>"><a href="index.php" data-hover="dropdown" class="" >HOME</a></li>
             <li class="<?php echo $about?>"><a href="about-us.php" data-hover="dropdown" >ABOUT US </a>
             <li class="<?php echo $services?>"><a href="services.php" data-hover="dropdown" >SERVICES </a></li>
             <li class="<?php echo $services?>"><a href="services.php" data-hover="dropdown" >SAMPLE WORK </a></li>
             <li class="<?php echo $howitworks?>"><a href="howitworks.php" data-hover="dropdown" >HOW IT WORKS</a></li>
             <li class="<?php echo $contact?>"><a href="contact.php" data-hover="dropdown" >CONTACT</a></li>
         </ul>
   </nav>
          </div>
       </div>
    </div>
</div>