<?php
foreach($casillas_instalando as $cp){
?>
    <div class="col-lg-2 col-sm-12">
        <div class="card ">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="">
                            <div class="text-center"><?=$cp['name']?></div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                        <div class="text-center">
                            <a href="tel:9999999999">
                                <span class="ti-mobile"></span>
                            </a>
                            &nbsp;
                            <a href="<?php echo $this->Url->build('/XmfCasillas/CapturaResultados/'.$cp['id'].'/1'); ?>">
                                <span class="ti-package"></span>
                            </a>
                            &nbsp;
                            <?php

                            ?>

                        </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
