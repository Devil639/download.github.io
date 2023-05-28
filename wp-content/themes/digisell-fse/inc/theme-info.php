<?php
/**
 * Add Theme info Page
 */

function digisell_fse_menu() {
	add_theme_page( esc_html__( 'DigiSell FSE', 'digisell-fse' ), esc_html__( 'About DigiSell FSE', 'digisell-fse' ), 'edit_theme_options', 'about-digisell-fse', 'digisell_fse_theme_page_display' );
}
add_action( 'admin_menu', 'digisell_fse_menu' );

function digisell_fse_admin_theme_style() {
	wp_enqueue_style('digisell-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'digisell_fse_admin_theme_style');

/**
 * Display About page
 */
function digisell_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'digisell-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'DigiSell FSE is a elegant, highly attractive, sofisticated, responsive and the best free marketing agency WordPress theme. DigiSell FSE is one such option for website owners who are into eCommerce, auto dealerships, bars and restaurants, hotels or hospitality, law firms, the medical sector, construction industries, or marketing. This theme is the best option in every aspect and can fulfil your needs to make a fully functional digital marketing website for your business.', 'digisell-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'digisell-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'digisell-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'digisell-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'digisell-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'digisell-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'digisell-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'digisell-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'digisell-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'digisell-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get Carnival PRO', 'digisell-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'digisell-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/digital-marketing-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'digisell-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'digisell-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/demo/digisell/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'digisell-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/documentation/digisell/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'digisell-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'digisell-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'digisell-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with DigiSell FSE, please give your feedback.', 'digisell-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/digisell-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'digisell-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>