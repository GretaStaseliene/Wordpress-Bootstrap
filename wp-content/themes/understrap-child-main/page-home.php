<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$params = array('posts_per_page' => 4, 'post_type' => 'product');
$products = new WP_Query($params);

// $price = get_post_meta( get_the_ID(), '_regular_price', true);
// $sale = get_post_meta( get_the_ID(), '_sale_price', true);

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper px-3" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">
				<div class="row d-flex banner">
					<div class="col-md-6 col-sm-12 banner-content">
						<div>
							<h4 class="banner-itallic">
								Discover Your Style
							</h4>
						</div>
						<div>
							<h2 class="banner-heading text-uppercase">
								unleash your fashion statement
							</h2>
						</div>
						<div>
							<p class="banner-description col-md-12 col-sm-12 col-lg-12 text-uppercase lh-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur nemo quod, ex, eveniet possimus soluta doloremque dolorem incidun.</p>
						</div>
						<div class="buttons d-flex gap-4">
							<button class="btn btn-warning text-white rounded-0 fw-semibold text-uppercase">shop now</button>
							<a href="#" class="text-decoration-none text-uppercase text-dark fw-bold lh-lg">learn more</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 position-relative image-area">
						<img src="../Wordpress+Bootstrap/wp-content/uploads/2023/07/image26-free.png" alt="banner logo">
						<div class="banner-gradient">
							<h2 class="text-uppercase text-dark"><span class="gradient-1">disco</span>ver</h2>
							<h2 class="text-uppercase text-dark"><span class="gradient-2">radia</span>nce</h2>
							<h2 class="text-uppercase text-dark"><span class="gradient-3">fash</span>ion</h2>
							<h2 class="text-uppercase text-dark"><span class="gradient-4">stor</span>es</h2>
							<h2 class="text-uppercase text-dark"><span class="gradient-5">fash</span>ion's</h2>
							<h2 class="text-uppercase text-dark"><span class="gradient-6">risin</span>g</h2>
							<h2 class="text-uppercase text-dark"><span class="gradient-7">star</span></h2>
						</div>
					</div>
				</div>

				<section class="container section-2">
					<div class="row cs-category-row d-flex justify-content-around border mt-4">
						<div class="col-2 stulpelis">
							<a href="#" class="text-decoration-none text-dark fw-bold text-uppercase">
								<img src="../Wordpress+Bootstrap/wp-content/uploads/2023/07/laptop.png" alt="laptop" class="img-fluid">
								<h6>laptops</h6>
							</a>
						</div>
						<div class="col-2 stulpelis">
							<a href="#" class="text-decoration-none text-dark fw-bold text-uppercase">
								<img src="../Wordpress+Bootstrap/wp-content/uploads/2023/07/laptop.png" alt="laptop" class="img-fluid">
								<h6>phones</h6>
							</a>
						</div>
						<div class="col-2 stulpelis">
							<a href="#" class="text-decoration-none text-dark fw-bold text-uppercase">
								<img src="../Wordpress+Bootstrap/wp-content/uploads/2023/07/laptop.png" alt="laptop" class="img-fluid">
								<h6>mugs</h6>
							</a>
						</div>
						<div class="col-2 stulpelis">
							<a href="#" class="text-decoration-none text-dark fw-bold text-uppercase">
								<img src="../Wordpress+Bootstrap/wp-content/uploads/2023/07/laptop.png" alt="laptop" class="img-fluid">
								<h6>beauty</h6>
							</a>
						</div>
						<div class="col-2 stulpelis">
							<a href="#" class="text-decoration-none text-dark fw-bold text-uppercase">
								<img src="../Wordpress+Bootstrap/wp-content/uploads/2023/07/laptop.png" alt="laptop" class="img-fluid">
								<h6>clothes</h6>
							</a>
						</div>
						<div class="col-2 stulpelis">
							<a href="#" class="text-decoration-none text-dark fw-bold text-uppercase">
								<img src="../Wordpress+Bootstrap/wp-content/uploads/2023/07/laptop.png" alt="laptop" class="img-fluid">
								<h6>shoes</h6>
							</a>
						</div>
					</div>
				</section>

				<div class="section-2-responsive">
						<select class="form-select" aria-label="Default select example">
							<option selected>Select category</option>
							<option value="1">Laptops</option>
							<option value="2">Phones</option>
							<option value="3">Mugs</option>
							<option value="4">Beauty</option>
							<option value="5">Clothes</option>
							<option value="6">Shoes</option>
						</select>
					</div>

				<h2 class="our-products">our product</h2>

				<!-- ok ??????? nesvarbu, šitoj vietoj, reiktu išsitraukti pradžiai 4 produktus random iš pvž 40 sukurtų, ir čia atsivaizduot.
			tai tokiu atveju jau ir funkcija bus, foreach loop, kuris atvaizduoja šitą kiekvienam produktui,
		    ir išsitrauki $product->get_attachment, reikia pažiet woocommerce kaip rašosi, nepamenu db. tada  -->

				<section class="container section-3">
					<div class="products d-flex flex-md-row flex-wrap align-items-center justify-content-center mt-5">
						
						<?php while($products->have_posts()) {
							$products->the_post();

						?>
						
						<div class="product col-md-5 col-lg-2 p-4 border m-3">
							<div class="product-image">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="product-title">
								<h6 class="text-uppercase mt-2"><?php the_title(); ?></h6>
							</div>
							<div class="product-price mb-2">
								<span class="text-decoration-line-through text-secondary">$<?php echo $product->get_regular_price(); ?></span>
								<span class="text-secondary">$<?php echo $product->get_sale_price(); ?></span>
							</div>
							<button class="btn btn-outline-warning rounded-0 w-100 text-uppercase"><a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">shop now →</a></button>
						</div>

						<?php
							} 
						?>

					</div>
				</section>

				<section class="container section-4">
					<div class="row banner d-flex mt-5">
						<div class="col-md-7 col-sm-12 image-area-2">
							<img src="../Wordpress+Bootstrap/wp-content/uploads/2023/07/Mental-Strong-Women-min.jpg" alt="wommen">
						</div>
						<div class="banner-content col-md-5 col-sm-12">
							<h4 class="banner-itallic">
								About Us
							</h4>
							<h2 class="banner-heading text-uppercase col-md-10 col-sm-12 col-lg-12">
								our fashion story style
							</h2>
							<p class="banner-description col-md-12 col-sm-12 col-lg-12 text-uppercase lh-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur nemo quod, ex, eveniet possimus soluta doloremque dolorem incidun.</p>
							<div class="buttons d-flex gap-4">
								<button class="btn btn-warning text-white rounded-0 fw-semibold text-uppercase">shop now</button>
								<a href="#" class="text-decoration-none text-uppercase text-dark fw-bold lh-lg">learn more</a>
							</div>
						</div>
					</div>
				</section>

				<section class="container section-5">
					<div class="newsletter col-md-6 col-sm-12">
						<h2 class="text-uppercase fs-2 fw-bold">subscribe to the news letter</h2>
						<p class="text-uppercase newsletter-p">sign up for promotions, tailored new arrivals, stock updates and more straight to your inbox</p>
						<form>
							<div class="mb-3">
								<label class="form-label"></label>
								<input type="email" class="form-control rounded-0" placeholder="ENTER YOUR EMAIL">
							</div>
							<div class="mb-3">
								<label class="form-label"></label>
								<input type="number" class="form-control rounded-0" placeholder="ENTER YOUR PHONE">
							</div>
							<div class="mb-3">
								<button class="btn btn-warning rounded-0 text-uppercase text-white fw-semibold w-100 p-2 signup mt-2">sign up</button>
							</div>
							<div class="form-check mt-2 d-flex">
								<input class="form-check-input p-2 mx-2" type="checkbox" id="flexCheckDefault">
								<label class="form-check-label text-uppercase" for="flexCheckDefault">
									by signing up, you agree to our privacy
								</label>
							</div>
						</form>
					</div>
				</section>

			</main>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
