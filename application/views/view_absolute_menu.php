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
<!-- absolute menu -->
<div class="container-full-coninter absolute-menu container-custom-navbar-nav" style="border: 1px, dashed, red">
           <nav class="navbar navbar-default vertical-alingn width-100 custom-navbar">
            <!-- Brand and toggle get grouped for better mobile display -->
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