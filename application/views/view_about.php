<?php
        $title = $results["view_about"]["title"];
        $t1 = $results["view_about"]["1"];
        $t2 = $results["view_about"]["2"];
        $t3 = $results["view_about"]["3"];
        $t4 = $results["view_about"]["4"];
?>

<!-- ABOUT -->
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