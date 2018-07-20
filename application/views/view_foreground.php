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