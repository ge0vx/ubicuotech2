<!--loader-->
<!--loader-->
<!--loader-->
<div id="loader" class="container full-container">
    <div class="showbox">
        <img class="img-load" src="<?php echo base_url(); ?>assets/img/logos/logo-ubicuo-menu.png" alt="ubicuo tech">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
            </svg>
        </div>
    </div>
</div>

<!-- sticky menu TOP -->
<!-- sticky menu TOP -->
<!-- sticky menu TOP -->
<?php
        $get = $results["menu"]["1"];
        $our = $results["menu"]["2"];
        $abo = $results["menu"]["3"];
        $adv = $results["menu"]["4"];
        $apr = $results["menu"]["5"];
        $cli = $results["menu"]["6"];

        $form = $results["form"]["title"];
        $link = $results["form"]["link"];
?>
<div class="container-fluid stcky-menu2">
    <nav class="navbar navbar-default sticky-nav">
        <div class="navbar-header">
            <div class="idioms" style="top: 6px; right: 100px">
                <a href="<?php echo base_url(); ?>site/es">
                    <img class="flags" src="<?php echo base_url(); ?>assets/img/mex.png" alt="ES" style="height:14px">
                </a>
                <br/>
                <a href="<?php echo base_url(); ?>">
                    <img class="flags" src="<?php echo base_url(); ?>assets/img/usa.jpg" alt="EN" style="height:14px;">
                </a>
            </div>
                <div class="idioms" style="top: 6px; right: 70px">
                    <a href="<?php echo base_url(); ?>site/du">
                        <img class="flags" src="<?php echo base_url(); ?>assets/img/ger.jpg" alt="DU" style="height:14px">
                    </a>
                    <br/>
                    <a href="<?php echo base_url(); ?>site/fr">
                        <img class="flags" src="<?php echo base_url(); ?>assets/img/fra.png" alt="EN" style="height:14px">
                    </a>
                </div>
                
                <button type="button" data-target="#navbarCollapse2" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">
                    <img class="ubicuo-tech-x-small-icon abs-img" src="<?php echo base_url(); ?>assets/img/logos/logo-ubicuo-menu.png" alt="ubicuo tech">
                </a>
            </div>
            <div id="navbarCollapse2" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right" style="padding: 8px 0">
                    <li>
                        <a style="border: 1px solid #002350" class="btn-costumers" href="<?php echo (base_url() . $link); ?>">
                            <?php echo $form; ?>
                        </a>
                    </li>
                    <li><a href="#contact"><?php echo $get ?></a></li>
                    <li><a href="#weoffer"><?php echo $our ?></a></li>
                    <li><a href="#about"><?php echo $abo ?></a></li>
                    <li><a href="#advantages"><?php echo $adv ?></a></li>
                    <li><a href="#we"><?php echo $apr ?></a></li>
                    <li><a href="#customers"><?php echo $cli ?></a></li>
                </ul>
            </div>
        </nav>
</div>

<!--aboslute menu-->
<!--aboslute menu-->
<!--aboslute menu-->

<?php
        $get = $results["menu"]["1"];
        $our = $results["menu"]["2"];
        $abo = $results["menu"]["3"];
        $adv = $results["menu"]["4"];
        $apr = $results["menu"]["5"];
        $cli = $results["menu"]["6"];

        $form = $results["form"]["title"];
        $link = $results["form"]["link"];
?>
<div class="container-full-coninter absolute-menu container-custom-navbar-nav" style="border: 1px, dashed, red">
           <nav class="navbar navbar-default vertical-alingn width-100 custom-navbar">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">
                    <img class="ubicuo-tech-small-icon vertical-alingn" src="<?php echo base_url(); ?>assets/img/logos/logo-ubicuo-menu.png" alt="ubicuo tech">
                </a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a style="border: 1px solid #FFF" class="btn-costumers" href="<?php echo (base_url() . $link); ?>">
                            <?php echo $form; ?>
                        </a>
                    </li>
                    <li><a href="#contact"><?php echo $get ?></a></li>
                    <li><a href="#weoffer"><?php echo $our ?></a></li>
                    <li><a href="#about"><?php echo $abo ?></a></li>
                    <li><a href="#advantages"><?php echo $adv ?></a></li>
                    <li><a href="#we"><?php echo $apr ?></a></li>
                    <li><a href="#customers"><?php echo $cli ?></a></li>
                </ul>
                <div class="idioms">
                    <a href="<?php echo base_url(); ?>site/es">
                        <img class="flags" src="<?php echo base_url(); ?>assets/img/mex.png" alt="ES">   
                    </a>
                    <a href="<?php echo base_url(); ?>">
                        <img class="flags" src="<?php echo base_url(); ?>assets/img/usa.jpg" alt="EN">
                    </a>
                    <a href="<?php echo base_url(); ?>site/du">
                        <img class="flags" src="<?php echo base_url(); ?>assets/img/ger.jpg" alt="DU">
                    </a>
                    <a href="<?php echo base_url(); ?>site/fr">
                        <img class="flags" src="<?php echo base_url(); ?>assets/img/fra.png" alt="EN">
                    </a>
                </div>
            </div>
        </nav>
</div>

<!--foreground-->
<!--foreground-->
<!--foreground-->

<?php
        $ttla = $results["view_foreground"]["titla"];
        $ttl1 = $results["view_foreground"]["titl1"];
        $ttlb = $results["view_foreground"]["titlb"];
        $ttl2 = $results["view_foreground"]["titl2"];

        $tx1 = $results["view_foreground"]["text1"];
        $tx2 = $results["view_foreground"]["text2"];
        $tx3 = $results["view_foreground"]["text3"];
        $tx4 = $results["view_foreground"]["text4"];
        $tx5 = $results["view_foreground"]["text5"];
        $tx6 = $results["view_foreground"]["text6"];

?>

<div class="container full-container">
<div style="position: absolute; z-index: 1; width: 100%; height: 100%">
</div>

    <div id="foreground2" style="background-image:url('<?php echo base_url(); ?>assets/img/foreground.jpg')">
        <div class="fore-title vertical-alingn2">
            <h1>
                <b><?php echo $ttla ?> </b> <?php echo $ttl1 ?> <b><?php echo $ttlb ?> </b> <?php echo $ttl2 ?>
            </h1>
            <hr/>
            <h1 style="position: relative">
                <div class="rotating2">
                    <span class="word2"> Offshore</span>
                    <span class="word2">Nearshore</span>
                    <span class="word2">  Onshore</span>
                    <span class="word2">End-to-End</span>
</div>
            </h1>
        </div>
        <div class="fore-title fore-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-4">
                                    <img style="margin-bottom:-15px" class="img-sfore first1" src="<?php echo base_url(); ?>assets/img/svg/header_cet.svg" alt="header_cet">
                                    <div class="txt-sfore">
                                        <?php echo $tx1; ?>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-sfore" src="<?php echo base_url(); ?>assets/img/svg/header_mobile.svg" alt="header_cet">
                                    <div class="txt-sfore">
                                        <?php echo $tx2; ?>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-sfore" src="<?php echo base_url(); ?>assets/img/svg/header_web_apps.svg" alt="header_cet">
                                    <div class="txt-sfore">
                                    <?php echo $tx3; ?>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-sfore" src="<?php echo base_url(); ?>assets/img/svg/header_uxui.svg" alt="header_cet">
                                    <div class="txt-sfore">
                                    <?php echo $tx4; ?>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-sfore" src="<?php echo base_url(); ?>assets/img/svg/header_is.svg" alt="header_cet">
                                    <div class="txt-sfore">
                                    <?php echo $tx5; ?>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-4">
                                    <img class="img-sfore" src="<?php echo base_url(); ?>assets/img/svg/header_bots.svg" alt="header_cet">
                                    <div class="txt-sfore">
                                    <?php echo $tx6; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--stickymenu 2-->
<!--stickymenu 2-->
<!--stickymenu 2-->

<?php
        $get = $results["menu"]["1"];
        $our = $results["menu"]["2"];
        $abo = $results["menu"]["3"];
        $adv = $results["menu"]["4"];
        $apr = $results["menu"]["5"];
        $cli = $results["menu"]["6"];

        $form = $results["form"]["title"];
        $link = $results["form"]["link"];
?>
<div class="container-fluid stcky-menu" id="stcky-menu">
           <nav class="navbar navbar-default sticky-nav">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse2" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">
                    <img class="ubicuo-tech-x-small-icon abs-img" src="<?php echo base_url(); ?>assets/img/logos/logo-ubicuo-menu.png" alt="ubicuo tech">
                </a>
            </div>
            <div id="navbarCollapse2" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right" style="padding: 8px 0">
                    <li>
                        <a style="border: 1px solid #002350" class="btn-costumers" href="<?php echo (base_url() . $link); ?>">
                            <?php echo $form; ?>
                        </a>
                    </li>
                    <li><a href="#weoffer"><?php echo $our ?></a></li>
                    <li><a href="#about"><?php echo $abo ?></a></li>
                    <li><a href="#advantages"><?php echo $adv ?></a></li>
                    <li><a href="#we"><?php echo $apr ?></a></li>
                    <li><a href="#customers"><?php echo $cli ?></a></li>
                </ul>
            </div>
        </nav>
</div>

<!-- OUR OFFER -->
<!-- OUR OFFER -->
<!-- OUR OFFER -->
<?php
        $tit = $results["view_our_offer"]["title"];
        $e1s = $results["view_our_offer"]["1"]["subtitle"];
        $e1t = $results["view_our_offer"]["1"]["text"];
        $e2s = $results["view_our_offer"]["2"]["subtitle"];
        $e2t = $results["view_our_offer"]["2"]["text"];
        $e3s = $results["view_our_offer"]["3"]["subtitle"];
        $e3t = $results["view_our_offer"]["3"]["text"];
        $e4s = $results["view_our_offer"]["4"]["subtitle"];
        $e4t = $results["view_our_offer"]["4"]["text"];
        $e5s = $results["view_our_offer"]["5"]["subtitle"];
        $e5t = $results["view_our_offer"]["5"]["text"];
        $e6s = $results["view_our_offer"]["6"]["subtitle"];
        $e6t = $results["view_our_offer"]["6"]["text"];

?>
<div id="weoffer" class="container-fluid white-section" style="padding-bottom: 4em">
            <div class="jumbotron text-center">
              <h2><?php echo $tit?></h2>
            </div>
            <div class="jumbotron text-center" style="padding-top: 0; padding-bottom:0;">
                <div class="container">
                   <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="card">
                            <img class="card-img effect1" data-ci="1" src="<?php echo base_url(); ?>assets/img/svg/offer_cet.svg" alt="teams">
                            <h4>
                                <?php echo $e1s?>
                            </h4>
                            <p>
                                <?php echo $e1t?>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="card">
                            <img class="card-img effect1" src="<?php echo base_url(); ?>assets/img/svg/offer_web.svg" alt="web">
                            <h4>
                                <?php echo $e2s?>
                            </h4>
                            <p>
                                <?php echo $e2t?>
                            </p>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-xs-12 col-md-6">
                        <div class="card">
                            <img class="card-img effect1" src="<?php echo base_url(); ?>assets/img/svg/offer_mobile.svg" alt="mobile">
                            <h4>
                                <?php echo $e3s?>
                            </h4>
                            <p>
                                <?php echo $e3t?>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="card">
                            <img class="card-img effect1" data-ci="2" src="<?php echo base_url(); ?>assets/img/svg/offer_gis.svg" alt="gis">
                            <h4>
                                <?php echo $e4s?>
                            </h4>
                            <p>
                                <?php echo $e4t?>
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="card">
                            <img class="card-img effect1" data-ci="2" src="<?php echo base_url(); ?>assets/img/svg/offer_ux.svg" alt="ux">
                            <h4>
                                <?php echo $e5s?>
                            </h4>
                            <p>
                                <?php echo $e5t?>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="card">
                            <img class="card-img effect1" data-ci="2" src="<?php echo base_url(); ?>assets/img/svg/offer_bots.svg" alt="bots">
                            <h4>
                                <?php echo $e6s?>
                            </h4>
                            <p>
                                <?php echo $e6t?>
                            </p>
                        </div>
                    </div>


                  </div>
                </div>
            </div>
</div>

<!-- ABOUT -->
<!-- ABOUT -->
<!-- ABOUT -->
<?php
        $title = $results["view_about"]["title"];
        $t1 = $results["view_about"]["1"];
        $t2 = $results["view_about"]["2"];
        $t3 = $results["view_about"]["3"];
        $t4 = $results["view_about"]["4"];
?>
<div id="about" class="container-fluid no-fr-padding">
            <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/img/parallax.jpg">
                
                    <div class="container" style="padding: 4em 0;">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-6 col-xs-offset-1 col-xs-10">
                                <div class="p-card text-justify">
                                        <h2>
                                            <?php echo $title?>
                                        </h2>
                                </div>
                                <div class="p-card text-justify">
                                    <br/>
                                    <ul>
                                    <li>
                                        <?php echo $t1?>
                                    </li>
                                    <!--<a class="ex-link" href="http://ccdguadalajara.com/en_US/" target="_blank"></a>-->
                                        <li>
                                        <?php echo $t2?>
                                        </li>
                                        <!--<a class="ex-link" href="https://ylai.state.gov/" target="_blank">the Young Leaders of the Americas Initiative (YLAI) program.</a>-->
                                        <li>
                                        <?php echo $t3?>
                                        </li>
                                        <!--<a class="ex-link" href="http://303software.com/" target="_blank">303 Software</a>-->
                                        <li>
                                        <?php echo $t4?>
                                            
                                            <!---<span class="hover-to-show">, Colorado based company recognized as 30 th best place to work in U.S.A. in 2017.</span>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-7 col-md-5 col-xs-offset-1 col-xs-10 phone-wrapi">
                                <img class="phone-image2" src="<?php echo base_url(); ?>assets/img/ubicuo-phone.png" alt="app">
                            </div>
                        </div>
                    </div>
            </div>
</div>
<!-- ADVANTAGES -->
<!-- ADVANTAGES -->
<!-- ADVANTAGES -->
<?php
        $title = $results["view_advantages"]["title"];
        $a1s = $results["view_advantages"]["1"]["subtitle"];
        $a1t = $results["view_advantages"]["1"]["text"];
        $a2s = $results["view_advantages"]["2"]["subtitle"];
        $a2t = $results["view_advantages"]["2"]["text"];
        $a3s = $results["view_advantages"]["3"]["subtitle"];
        $a3t = $results["view_advantages"]["3"]["text"];
        $a4s = $results["view_advantages"]["4"]["subtitle"];
        $a4t = $results["view_advantages"]["4"]["text"];
        $a5s = $results["view_advantages"]["5"]["subtitle"];
        $a5t = $results["view_advantages"]["5"]["text"];
        $a6s = $results["view_advantages"]["6"]["subtitle"];
        $a6t = $results["view_advantages"]["6"]["text"];
        
?>
<div id="advantages" class="container-fluid white-section" style="padding: 1.5em 0">
            <div class="jumbotron text-center" style="margin: 0">
							<h2><?php echo $title ?></h2>
            </div>
            <div class="jumbotron text-center" style="padding-top: 0; padding-bottom: 0;">
                <div class="container">
                   <div class="row display-flex">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card">
                            <img class="custom-size effect1" src="<?php echo base_url(); ?>assets/img/svg/advantage_real_time.svg" alt="real time">
                            <h5>
                                <b><?php echo $a1s ?></b>
                            </h5>
                            <p>
                                <?php echo $a1t ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card">
                            <img class="custom-size effect1" src="<?php echo base_url(); ?>assets/img/svg/advantage_less_cost.svg" alt="lower cost">
                            <h5>
                            <b><?php echo $a2s ?></b>
                            </h5>
                            <p>
                            <?php echo $a2t ?>
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card">
                            <img class="custom-size effect1" src="<?php echo base_url(); ?>assets/img/svg/advantage_affinity.svg" alt="affinity">
                            <h5>
                                <b><?php echo $a3s ?></b>
                            </h5>
                            <p>
                            <?php echo $a3t ?>
                            </p>
                        </div>
                    </div>
                  
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card">
                            <img class="custom-size effect1" src="<?php echo base_url(); ?>assets/img/svg/advantage_easy_travel.svg" alt="travel">
                            <h5>
                                <b><?php echo $a4s ?></b>
                            </h5>
                            <p>
                                <?php echo $a4t ?>
                            </p>
                        </div>
                    </div>
                
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card">
                            <img class="custom-size effect1" src="<?php echo base_url(); ?>assets/img/svg/advantage_intellectual_property.svg" alt="affinity">
                            <h5>
                                <b><?php echo $a5s ?></b>
                            </h5>
                            <p>
                                <?php echo $a5t ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card">
                            <img class="custom-size effect1" src="<?php echo base_url(); ?>assets/img/svg/advantage_agility.svg" alt="agility">
                            <h5>
                                <b><?php echo $a6s ?></b>
                            </h5>
                            <p>
                                <?php echo $a6t ?>
                            </p>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
            </div>

<!--we-->
<!--we-->
<!--we-->
<?php
        $title = $results["view_we"]["title"];
        $s1 = $results["view_we"]["subtitle_1"];
        $s2 = $results["view_we"]["subtitle_2"];
        $i1 = $results["view_we"]["image_1"];
        $i2 = $results["view_we"]["image_2"];
?>
        <div id="we" class="container-fluid no-padding">
            <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/img/contact-background.jpg">
               <!--<canvas id="stars" width="300" height="300" style="position: absolute; z-index: -1; height: 100%;"></canvas>-->
                <div class="jumbotron transparent no-tb-margin no-b-padding no-t-padding jumbotrom-we">
                <div class="jumbotron transparent no-tb-margin">
                    <div class="container">
                            <div class="p-card text-center">
                                <h2>
                                    <?php echo $title ?>
                                </h2>
                            </div>
                    </div>
                </div>
                    <div class="container">
                       <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-6">
                           <div class="p-card text-center">
                                <div class="card">
                                    <h4 style="height: auto; color: #FFF">
                                        <b><?php echo $s1; ?></b>
                                    </h4>
                                </div>
                               </div>
                            <div class="p-card text-center" style="height: auto; min-height: 450px">
                                
                                <img src="<?php echo base_url(); ?>assets/img/svg/circle_process/<?php echo $i1 ?>" alt="approach" style="width: 100%; height: auto; max-height: 550px;">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                           <div class="p-card text-center">
                                <div class="card">
                                    <h4 style="height: auto; color: #FFF">
                                        <b><?php echo $s2 ?></b>
                                    </h4>
                                </div>
                            </div>
                            <div class="p-card text-center" style="height: auto; min-height: 450px">
                                <img src="<?php echo base_url(); ?>assets/img/svg/circle_process/<?php echo $i2 ?>" alt="cet" style="width: 100%; height: auto; max-height: 550px">
                            </div>
                        </div>
                       </div>
                        
                    </div>
                </div>
            </div>
        </div>

<!--clients-->
<!--clients-->
<!--clients-->

<?php
        $title = $results["view_testimonials"]["title"];
        $p1_text = $results["view_testimonials"]["1"]["text"];
        $p1_title = $results["view_testimonials"]["1"]["title"];
?>
<div id="customers" class="container-fluid no-padding">
            <div style="background-color: #FFF">
                <div class="jumbotron transparent no-tb-margin">
                    <div class="container">
                       
                        <div class="p-card">
                            <h2 class="text-center" style="color: #002350">
                                <?php echo $title?>
                            </h2>
                        </div>
                        <div class="row" style="padding: 3em 0 1.2em">

                            <div class="col-xs-12 text-center">
                                <h2 class="text-quotes">
                                    <img class="quotes" src="<?php echo base_url(); ?>assets/img/dos-comillas-1.png" alt="comillas"><?php echo $p1_text ?><img class="quotes" src="<?php echo base_url(); ?>assets/img/dos-comillas.png" alt="comillas">
                                </h2>
                                <img class="testimonial-img" src="<?php echo base_url(); ?>assets/img/matt.jpg" alt="comillas">
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                                        <span class="testimonial-title">
                                            <?php echo $p1_title ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <hr style="width:90%; margin:0 auto" />

<?php
        $title = $results["view_our_clients"]["title"];
?>

<!-- OUR CLIENTS -->
<!-- OUR CLIENTS -->
<!-- OUR CLIENTS -->
<div id="customers" class="container-fluid no-padding" style="padding-bottom: 2em">
            <div style="background-color: #FFF">
                <div class="jumbotron transparent no-tb-margin">
                    <div class="container">
                       
                        <div class="p-card">
                            <h2 class="text-center" style="color: #002350">
                                <?php echo $title?>
                            </h2>
                        </div>
                        <div class="row" style="padding: 3em 0 1.2em">
                            <div class="col-xs-12 col-md-4 text-center custom-padding-2">
                               <a target="_blank" href="http://303software.com/">
                                   <img class="img-customers effect1" src="<?php echo base_url(); ?>assets/img/logos/303software_logo.png" alt="303">
                               </a>
                            </div>
                            <div class="col-xs-12 col-md-4 text-center custom-padding-2">
                               <a target="_blank" href="https://www.proofserve.com/">
                                    <img class="img-customers effect1" src="<?php echo base_url(); ?>assets/img/logos/proof_logo.png" alt="proof">   
                               </a>
                            </div>
                            <div class="col-xs-12 col-md-4 text-center custom-padding-2">
                               <a target="_blank" href="http://gazu.mx/">
                                   <img class="img-customers effect1" src="<?php echo base_url(); ?>assets/img/logos/gazu_logo2.png" alt="gazu">
                               </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

