<!--Order Start-->
<?php
$doorsun_preorder = doorSun_get_option("doorsun_preorder_group");
$doorsun_preorder=$doorsun_preorder[0];
?>
<section id="pre-order">
    <div class="container">
        <div class="row">
            <div class="pre-order">
                <div class="col-md-6">
                    <img src="<?php echo $doorsun_preorder['image']; ?>" alt="">
                </div>
                <div class="col-md-6">
                    <div class="pre-order-content">
                        <div class="col-md-12">
                            <div class="pre-order-title">
	                            <?php echo $doorsun_preorder['title']; ?>
                            </div>
                            <p>
	                            <?php echo $doorsun_preorder['desc']; ?>
                            </p>
	                        <?php echo do_shortcode($doorsun_preorder['contact_form']);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<!--Order End-->
