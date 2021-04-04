<!--Newsletter Start-->
<?php
$doorsun_footer = doorSun_get_option( "doorsun_footer_group" );
$doorsun_footer = $doorsun_footer[0];
?>
<div class="newsletter text-center">
	<?php dynamic_sidebar( 'wg_news' ); ?>
    <p>با عضـویت در خبرنامه هـــیچ یک از مطالـب سایت را از دست نخواهیـد داد و همیـــشه بروز خواهــید بود</p>
</div>
<div class="clearfix"></div>
<!--Newsletter End-->

<!--Footer Start-->

<footer>
    <div class="footer-content">
        <div class="container">
            <div class="row">
				<?php dynamic_sidebar( 'wg_footer' ); ?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p><?php echo $doorsun_footer['copy']; ?></p>
    </div>
</footer>

<!--Footer End-->


<?php wp_footer(); ?>

