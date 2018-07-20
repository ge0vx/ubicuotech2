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

<!-- ADVANTAGES -->
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