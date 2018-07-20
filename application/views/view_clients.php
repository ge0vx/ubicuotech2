<?php
        $title = $results["view_testimonials"]["title"];
        $p1_text = $results["view_testimonials"]["1"]["text"];
        $p1_title = $results["view_testimonials"]["1"]["title"];
?>
<!-- TESTIMONIALS -->
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