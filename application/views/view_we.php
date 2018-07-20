<?php
        $title = $results["view_we"]["title"];
        $s1 = $results["view_we"]["subtitle_1"];
        $s2 = $results["view_we"]["subtitle_2"];
        $i1 = $results["view_we"]["image_1"];
        $i2 = $results["view_we"]["image_2"];
?>
        <!-- WE -->
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
                                <dic class="card">
                                    <h4 style="height: auto; color: #FFF">
                                        <b><?php echo $s1; ?></b>
                                    </h4>
                                </dic>
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