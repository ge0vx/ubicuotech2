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
<!-- OUR OFFER -->
<div id="weoffer" class="container-fluid white-section" style="padding-bottom: 4em">
            <div class="jumbotron text-center">
              <h2><?php echo $tit?></h2>
              <!--<p>
              A pesar de ser una empresa con un enfoque hacia proyectos de impacto socio-ambiental, nos adaptamos a las necesidades que nuestros clientes requieran
              </p>-->
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