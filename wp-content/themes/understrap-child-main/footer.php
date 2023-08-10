<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bg-dark px-3" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		

		

				<footer class="site-footer" id="colophon">

					<div class="site-info d-flex">

						<div class="row">
							<div class="socials col-md-3 col-sm-6 mt-4">
								<h2 class="text-white text-uppercase">Logo</h2>
								<div class="social-icons mt-4">
									<span class="icon"><a href="#"><i class="fa-brands fa-facebook-f" style="color: #fafafa;"></i></a></span>
									<span class="icon"><a href="#"><i class="fa-brands fa-instagram" style="color: #fafafa;"></i></a></span>
									<span class="icon"><a href="#"><i class="fa-brands fa-twitter" style="color: #fafafa;"></i></a></span>
									<span class="icon"><a href="#"><i class="fa-brands fa-youtube" style="color: #fafafa;"></i></a></span>
								</div>
							</div>
							<div class="quick-links col-md-3 col-sm-6">
								<h4 class="text-white text-uppercase">quick link</h4>
								<div class="links">
									<ul class="list-unstyled lh-lg">
										<li><a href="#" class="text-uppercase text-decoration-none text-white fw-semibold">home</a></li>
										<li><a href="#" class="text-uppercase text-decoration-none text-white fw-semibold">about</a></li>
										<li><a href="#" class="text-uppercase text-decoration-none text-white fw-semibold">categories</a></li>
										<li><a href="#" class="text-uppercase text-decoration-none text-white fw-semibold">contact</a></li>
									</ul>
								</div>
							</div>
							<div class="contact col-md-3 col-sm-6">
								<h4 class="text-white text-uppercase">contacts</h4>
								<ul class="list-unstyled lh-lg">
									<li class="text-uppercase text-decoration-none text-white fw-semibold">239 481 697</li>
									<li class="text-uppercase text-decoration-none text-white fw-semibold">www.fashion.com</li>
									<li class="text-uppercase text-decoration-none text-white fw-semibold">2168 amber lane front myer</li>
									<li class="text-uppercase text-decoration-none text-white fw-semibold">florida 33214</li>
								</ul>
							</div>
							<div class="subscribe col-md-3 col-sm-6">
								<h4 class="text-white text-uppercase">subscribe newsletter</h4>
								<p class="text-white col-md-10 col-sm-12">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, voluptatem.</p>
								<form class="input-group">
									<input type="email" class="form-control rounded-0" placeholder="ENTER YOUR EMAIL"></input>
									<button class="btn btn-warning rounded-0 w-15"><i class="fa-solid fa-magnifying-glass" style="color: #fafafa;"></i></button>
								</form>
							</div>
						</div>

					</div><!-- .site-info -->
					<div class="border-bottomm mt-3"></div>
					<p class="text-center text-white mt-2">Lorem ipsum dolor sit amet.</p>

				</footer><!-- #colophon -->



	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<script src="https://kit.fontawesome.com/7e62185a97.js" crossorigin="anonymous"></script>


<?php wp_footer(); ?>

</body>

</html>

