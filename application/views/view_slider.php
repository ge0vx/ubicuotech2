        <?php
            $weo = $results["view_slider"]["text1"];
            $cus = $results["view_slider"]["text1a"];
            $off = $results["view_slider"]["text1b"];
            $nea = $results["view_slider"]["text1c"];
            $ons = $results["view_slider"]["text1d"];
            $let = $results["view_slider"]["text2"];
            $and = $results["view_slider"]["text2b"];
            $our = $results["view_slider"]["text3"];
            $isy = $results["view_slider"]["text3b"];
       ?>
       <!-- SLIDER -->
       <div id="slider" class="container-fluid">
            
            <div id="foreground">
                
                <div 
                id="mySlides" 
                style="background-image:url('<?php echo base_url(); ?>assets/img/our-approach-back.jpg')">
                
                    <div class="mySlides vertical-alingn2" style="top:34%" >
                        <div class="revealing">
                                <div class="text-revealing2"><?php echo $let ?></div>
                                <div class="text-revealing2">
                                    <span><b><?php echo $and ?></b></span>
                                </div>
                            </div>
                            <div class="revealing">
                                <div class="text-revealing3"><?php echo $our ?></div>
                                <div class="text-revealing3">
                                    <span><b><?php echo $isy ?></b></span>
                                </div>
                            </div>
                    </div>
                
            </div>
        </div>
    </div>