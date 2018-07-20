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
       <!-- sticky menu -->
       <!-- sticky menu -->
       <!-- sticky menu -->
       <div class="container-fluid stcky-menu" id="stcky-menu">
           <nav class="navbar navbar-default sticky-nav">
            <!-- Brand and toggle get grouped for better mobile display -->
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
            <!-- Collection of nav links and other content for toggling -->
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