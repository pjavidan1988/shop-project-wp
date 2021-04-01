<!-- Services Start -->
<?php
$doorsun_services = doorSun_get_option( "doorsun_service_group" );
if ( is_array( $doorsun_services ) ) :
	?>
    <section id="services">
        <div class="services shadow-bottom">
            <div class="container">
                <div class="row">
					<?php
					foreach ( $doorsun_services as $i => $service_item ) {
						?>
                        <div class="col-md-3">
                            <i class="fa <?php echo $service_item['fa_icon']; ?>"></i>
                            <div class="content">
                                <h4><?php echo $service_item['title']; ?></h4>
                                <p><?php echo $service_item['subtitle']; ?></p>
                            </div>
                        </div>
						<?php
					}
					?>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
<?php
endif;
?>
<!-- Services End -->
