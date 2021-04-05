<!-- Sale timeout Start -->
<?php
$doorsun_order = doorSun_get_option( "doorsun_offer_group" );
$doorsun_order = $doorsun_order[0];


$timer      = 0;
$now        = current_time( 'timestamp' );
$start_time = $doorsun_order['start_timestamp'];
$duration   = $doorsun_order['duration'] * 60;
if ( ( $now > $start_time ) && ( ( $now - $start_time ) < $duration ) ) {
	$timer = $duration - ( $now - $start_time );
	$timer = $timer / 60;
}
if ( $timer > 0 ) {
	?>
    <div class="container">
        <section class="sale-timeout">
            <div class="sale-inner">
                <div class="sale-timeout-content">
                    <h2><?php echo $doorsun_order['title']; ?></h2>
                    <span><?php echo $doorsun_order['subtitle']; ?></span>
                    <div class="sale-timeout-counter" data-minutes-left="<?php echo $timer; ?>">

                    </div>
                    <a href="<?php echo $doorsun_order['button_link']; ?>"><?php echo $doorsun_order['button_text']; ?></a>
                </div>
                <figure>
                    <img src="<?php echo $doorsun_order['image']; ?>" alt="">
                </figure>
            </div>
        </section>
    </div>
    <div class="clearfix"></div>
	<?php
}
?>
<!-- Sale timeout End -->
