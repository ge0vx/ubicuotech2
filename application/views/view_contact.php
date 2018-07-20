<?php
        $title = $results["view_contact"]["title"];
        $cou = $results["view_contact"]["country"];
        $f1 = $results["view_contact"]["form_data_1"];
        $f2 = $results["view_contact"]["form_data_2"];
        $f3 = $results["view_contact"]["form_data_3"];
        $se = $results["view_contact"]["send"];

        $form = $results["form"]["title"];
        $link = $results["form"]["link"];
?>

        <!-- CONTACT -->
        <div id="contact" class="container-fluid no-padding">
            <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/img/our-approach-back.jpg">
                <div id="radar">
                    <img class="mapa" src="<?php echo base_url(); ?>assets/img/our-approach-front.png">
                </div>
                <div class="jumbotron transparent no-tb-margin" style="z-index: 9999">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="p-card">
                                    <h2 class="text-left">
                                        <?php echo $title ?>
                                        <a class="sendbutton1" href="<?php echo (base_url() . $link); ?>"><?php echo $form; ?></a>
                                    </h2>
                                    <h2 class="text-left">
                                        <span style="color:transparent;">-</span>
                                        <a class="social-link" href="https://twitter.com/UbicuoTech" target="_blank" title="twitter">
                                            <img class="social-item" src="<?php echo base_url(); ?>assets/img/social_icons/twitter.svg" alt="twitter">
                                        </a>
                                        <a class="social-link" href="https://www.linkedin.com/company/28166950/" target="_blank" title="linkedin">
                                            <img class="social-item" src="<?php echo base_url(); ?>assets/img/social_icons/linkedin.svg" alt="linkedin">
                                        </a>
                                        <a class="social-link" href="https://www.facebook.com/ubicuotech/" target="_blank" title="facebook">
                                            <img class="social-item" src="<?php echo base_url(); ?>assets/img/social_icons/facebook.svg" alt="facebook" title="facebook">
                                        </a>
                                        <a class="social-link" href="https://www.instagram.com/ubicuotech/" target="_blank" title="instagram">
                                            <img class="social-item" src="<?php echo base_url(); ?>assets/img/social_icons/instagram.svg" alt="instagram" title="instagram">
                                        </a>
                                    </h2>
                                    <br>
                                    
                                </div>
                                <div class="p-card margin-t-1em">
                                    <form>
                                      <div class="form-group">
                                        <label for="exampleName"><?php echo $f1 ?></label>
                                        <input type="text" class="form-control" id="exampleName">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $f2 ?></label>
                                        <input type="email" class="form-control" id="exampleInputEmail1">
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleMsg"><?php echo $f3 ?></label>
                                          <textarea id="exampleMsg" class="form-control" rows="3"></textarea>
                                      </div>
                                      <input type="submit" value="<?php echo $se ?>" class="wpcf7-form-control wpcf7-submit">
                                    </form>
                                    <p style="padding-top: 20px; font-size:16px !important">
                                        Ubicuo Tech<br/>
                                        Buenos Aires #2770 1-B, Col. Providencia <br/>
                                        Guadalajara, Jal 44630. <?php echo $cou ?>
                                    </p>
                                </div>
                            </div>
                            <!--<div class="col-xs-12 col-md-6">
                                
                            </div>-->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>