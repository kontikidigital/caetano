<?php

function caetano_car_logos() { ?>
	<?php if ( have_rows( 'car_logos' ) ) : ?>

	<ul class="logos">

		<?php
		while ( have_rows( 'car_logos' ) ) :
			the_row();

			// vars
			$image = get_sub_field( 'logo' );
			$size  = 'full';
			?>

		<li class="logo">

			<?php
			if ( $image ) :
				echo wp_get_attachment_image( $image, $size );
				?>

			<?php endif; ?>

		</li>

		<?php endwhile; ?>

	</ul>

		<?php
endif;

}

function caetano_form_busqueda() {
	if ( have_rows( 'formulario_busqueda' ) ) :

		while ( have_rows( 'formulario_busqueda' ) ) :
			the_row();

			// vars
			$form_title     = get_sub_field( 'form_titulo' );
			$form_intro     = get_sub_field( 'form_intro' );
			$form_shortcode = get_sub_field( 'form_shortcode' );

			?>
		<div class="home-form">
			<h2><?php echo $form_title; ?></h2>
			<p><?php echo $form_intro; ?></p>
			<?php echo do_shortcode( $form_shortcode ); ?>
		</div>

		<?php endwhile; ?>

		<?php
	endif;
}

function caetano_cars_carousel() {

	$args = array(
		'post_type'      => 'cars',
		'posts_per_page' => -1,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	);

	$cars_slider_query = new wp_query( $args );
	if ( $cars_slider_query->have_posts() ) {
		?>
		<h2><?php echo the_field( 'titulo_sec_coches' ); ?></h2>
		<div class="owl-cars owl-carousel owl-theme">
		<?php
		while ( $cars_slider_query->have_posts() ) {
			$cars_slider_query->the_post();

			$cars_image    = get_field( 'imagen_coche' );
			$cars_intro    = get_field( 'entradilla_coche' );
			$cars_price    = get_field( 'preciomes_coche' );
			$cars_btn_text = get_field( 'texto_boton_coche' );
			$cars_btn_link = get_field( 'texto_boton_coche' );
			$size          = 'full';
			?>
			<div class="item">
				<?php echo wp_get_attachment_image( $cars_image, $size ); ?>
				<h3><?php echo the_title(); ?></h3>
				<p class="cars-intro"><?php echo $cars_intro; ?></p>
				<div class="cars-price">desde <span class="price-amount"><?php echo $cars_price; ?>/mes</span> iva incl.</div>
				<a class="button-carousel" href="<?php echo $cars_btn_link; ?>"><?php echo $cars_btn_text; ?></a>
			</div> <!--item-->
			<?php
		} //endwhile
		?>
		</div><!--owl-cars-->
		<?php
	} //endif
	wp_reset_query();
}

function caetano_cta1() {
	if ( have_rows( 'cta_1' ) ) :
		while ( have_rows( 'cta_1' ) ) :
			the_row();
			// vars
			$cta1_image       = get_sub_field( 'cta1_imagen' );
			$cta1_title       = get_sub_field( 'cta1_titulo' );
			$cta1_intro       = get_sub_field( 'cta1_intro' );
			$cta1_button_text = get_sub_field( 'cta1_texto_boton' );
			$cta1_button_link = get_sub_field( 'cta1_enlace_boton' );
			$size             = 'full';
			?>
			<div class="cta1-container wrap">
				<div class="cta1-left">
				<?php echo wp_get_attachment_image( $cta1_image, $size ); ?>
				</div><!--cta1-left-->
				<div class="cta1-right">
					<h2><?php echo $cta1_title; ?></h2>
					<div class="cta1-intro"><?php echo $cta1_intro; ?></div>
					<a class="button-cta1" href="<?php echo $cta1_button_link; ?>"><?php echo $cta1_button_text; ?></a>
				</div><!--cta1-right-->
			</div><!--cta1-container-->
			<?php
		endwhile;
	endif;
}


function caetano_tagline() {
	if ( have_rows( 'tagline' ) ) :
		while ( have_rows( 'tagline' ) ) :
			the_row();
			// vars
			$tagline_left_image  = get_sub_field( 'tagline_imagen_izq' );
			$tagline_right_image = get_sub_field( 'tagline_imagen_der' );
			$tagline_text        = get_sub_field( 'tagline_texto' );
			$size                = 'full';
			?>
		<div class="tagline-container wrap">
			<div class="tagline-left">
				<?php echo wp_get_attachment_image( $tagline_left_image, $size ); ?>
			</div><!--tagline-left-->
			<div class="tagline-middle">
				<h2><?php echo $tagline_text; ?></h2>
			</div><!--tagline-middle-->
			<div class="tagline-right">
				<?php echo wp_get_attachment_image( $tagline_right_image, $size ); ?>
			</div><!--tagline-right-->
		</div>
			<?php
			endwhile;
	endif;
}

/**
 * Profesionales y empresas
 */
function caetano_tipo_cliente() {
	if ( have_rows( 'autonomos_y_empresas' ) ) :
		while ( have_rows( 'autonomos_y_empresas' ) ) :
			the_row();
			// vars
			$section_title    = get_sub_field( 'titulo_seccion' );
			$pro_icon         = get_sub_field( 'icono_profesional' );
			$pro_title        = get_sub_field( 'titulo_profesional' );
			$pro_intro        = get_sub_field( 'intro_profesional' );
			$pro_btn_text     = get_sub_field( 'texto_boton_profesional' );
			$pro_btn_link     = get_sub_field( 'enlace_boton_profesional' );
			$company_icon     = get_sub_field( 'icono_empresa' );
			$company_title    = get_sub_field( 'titulo_empresa' );
			$company_intro    = get_sub_field( 'intro_empresa' );
			$company_btn_text = get_sub_field( 'texto_boton_empresa' );
			$company_btn_link = get_sub_field( 'enlace_boton_empresa' );
			$size             = 'full';
			?>
		<div class="customer-container">
			<h2><?php echo $section_title; ?></h2>
			<div class="customer-columns">
			<div class="customer-left">
				<div class="customer-title">
					<?php echo wp_get_attachment_image( $pro_icon, $size ); ?>
					<h3><?php echo $pro_title; ?></h3>
				</div><!--customer-title-->
				<div class="customer-intro">
					<?php echo $pro_intro; ?>
				</div><!--customer-intro-->
				<a class="button-customer" href="<?php echo $pro_btn_link; ?>"><?php echo $pro_btn_text; ?></a>
			</div><!--customer-left-->
			<!--Right Column-->
			<div class="customer-right">
				<div class="customer-title">
					<?php echo wp_get_attachment_image( $company_icon, $size ); ?>
					<h3><?php echo $company_title; ?></h3>
				</div><!--customer-title-->
				<div class="customer-intro">
					<?php echo $company_intro; ?>
				</div><!--customer-intro-->
				<a class="button-customer" href="<?php echo $company_btn_link; ?>"><?php echo $company_btn_text; ?></a>
			</div><!--customer-right-->
			</div><!--customer-columns-->
		</div><!--customer-container-->
			<?php
		endwhile;
	endif;
}

/**
 * Quienes somos
 */

function caetano_about_us() {
	if ( have_rows( 'quienes_somos' ) ) :
		while ( have_rows( 'quienes_somos' ) ) :
			the_row();

			// vars
			$featured_image = get_sub_field( 'imagen_aboutus' );
			$text_feat_img  = get_sub_field( 'texto_img_aboutus' );
			$section_title  = get_sub_field( 'titulo_aboutus' );
			$icon_1         = get_sub_field( 'icono_1_aboutus' );
			$icon_1_text    = get_sub_field( 'texto_1_aboutus' );
			$icon_2         = get_sub_field( 'icono_2_aboutus' );
			$icon_2_text    = get_sub_field( 'texto_2_aboutus' );
			$icon_3         = get_sub_field( 'icono_3_aboutus' );
			$icon_3_text    = get_sub_field( 'texto_3_aboutus' );
			$icon_4         = get_sub_field( 'icono_4_aboutus' );
			$icon_4_text    = get_sub_field( 'texto_4_aboutus' );
			$size           = 'full';
			?>
			<div class="aboutus-container wrap">
				<?php echo wp_get_attachment_image( $featured_image, $size ); ?>
				<span class="aboutus-img-text"><?php echo $text_feat_img; ?></span>

				<h2><?php echo $section_title; ?></h2>
				<div class="aboutus-col-container">
					<div class="aboutus-col">
						<?php echo wp_get_attachment_image( $icon_1, $size ); ?>
						<p class="aboutus-col-text"><?php echo $icon_1_text; ?></p>
					</div><!--aboutus-col-->
					<div class="aboutus-col">
						<?php echo wp_get_attachment_image( $icon_2, $size ); ?>
						<p class="aboutus-col-text"><?php echo $icon_2_text; ?></p>
					</div><!--aboutus-col-->
					<div class="aboutus-col">
						<?php echo wp_get_attachment_image( $icon_3, $size ); ?>
						<p class="aboutus-col-text"><?php echo $icon_3_text; ?></p>
					</div><!--aboutus-col-->
					<div class="aboutus-col">
						<?php echo wp_get_attachment_image( $icon_4, $size ); ?>
						<p class="aboutus-col-text"><?php echo $icon_4_text; ?></p>
					</div><!--aboutus-col-->
				</div><!--aboutus-columns-->

			</div><!--aboutus-container-->
			<?php
			endwhile;
	endif;
}

/**
 * CTA 2
 */

function caetano_cta2() {
	if ( have_rows( 'cta_2' ) ) :
		while ( have_rows( 'cta_2' ) ) :
			the_row();

			// vars
			$cta2_section_title    = get_sub_field( 'titulo_cta2' );
			$cta2_left_col_title   = get_sub_field( 'titulo_col_izq_cta2' );
			$cta2_left_col_text    = get_sub_field( 'texto_col_izq_cta2' );
			$cta2_center_col_title = get_sub_field( 'titulo_col_cen_cta2' );
			$cta2_center_col_text  = get_sub_field( 'texto_col_cen_cta2' );
			$cta2_right_col_title  = get_sub_field( 'titulo_col_der_cta2' );
			$cta2_right_col_text   = get_sub_field( 'texto_col_der_cta2' );
			$cta2_btn_text         = get_sub_field( 'texto_boton_cta2' );
			$cta2_btn_link         = get_sub_field( 'enlace_boton_cta2' );
			?>
			<div class="cta2-container wrap">
				<h2><?php echo $cta2_section_title; ?></h2>
				<div class="cta2-col-container">
					<div class="cta2-col">
						<h3><?php echo $cta2_left_col_title; ?></h3>
						<?php echo $cta2_left_col_text; ?>
					</div><!--cta2-col-->
					<div class="cta2-col">
						<h3><?php echo $cta2_center_col_title; ?></h3>
						<?php echo $cta2_center_col_text; ?>
					</div><!--cta2-col-->
					<div class="cta2-col">
						<h3><?php echo $cta2_right_col_title; ?></h3>
						<?php echo $cta2_right_col_text; ?>
					</div><!--cta2-col-->
				</div><!--cta2-col-container-->
				<a class="button-cta2" href="<?php echo $cta2_btn_link; ?>"><?php echo $cta2_btn_text; ?></a>
			</div><!--cta2-container-->
			<?php
		endwhile;
	endif;
}

/**
 * Concesionarios
 */
function caetano_concesionarios() {
	if ( have_rows( 'concesionarios' ) ) :
		while ( have_rows( 'concesionarios' ) ) :
			the_row();

			// vars
			$conc_title     = get_sub_field( 'titulo_conc' );
			$conc_intro     = get_sub_field( 'intro_conc' );
			$conc_loc_left  = get_sub_field( 'localidades_izq' );
			$conc_loc_right = get_sub_field( 'localidades_der' );
			$conc_map       = get_sub_field( 'mapa_conc' );
			$conc_btn_text  = get_sub_field( 'texto_boton_conc' );
			$conc_btn_link  = get_sub_field( 'enlace_boton_conc' );
			$size           = 'full';
			?>
			<div class="conc-container"><div class="wrap">
				<h2><?php echo $conc_title; ?></h2>
				<?php echo $conc_intro; ?>
				<div class="conc-col-container">
					<div class="conc-col-left">
						<?php echo $conc_loc_left; ?>
					</div><!--conc-col-left-->
					<div class="conc-col-map">
						<?php echo wp_get_attachment_image( $conc_map, $size ); ?>
					</div><!--conc-col-map-->
					<div class="conc-col-right">
						<?php echo $conc_loc_right; ?>
					</div><!--conc-col-right-->
				</div><!--conc-col-container-->
				<a class="button-conc" href="<?php echo $conc_btn_link; ?>"><?php echo $conc_btn_text; ?></a>
			<!--Carousel Start-->
			<?php
			$images = get_field( 'carousel_concesionarios' );
			$size   = 'full'; // (thumbnail, medium, large, full or custom size)

			if ( $images ) :
				?>
				<div class="conc-carousel-container">
				<div class="owl-concesionarios owl-carousel owl-theme">
					<?php foreach ( $images as $image ) : ?>
						<div class="item">
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endif; ?>
			<!--Carousel End-->
			</div></div><!--conc-container-->
			<?php
		endwhile;
	endif;
}

/**
 * Dudas
 */

function caetano_dudas() {
	if ( have_rows( 'dudas' ) ) :
		while ( have_rows( 'dudas' ) ) :
			the_row();

			// vars
			$dudas_title    = get_sub_field( 'titulo_dudas' );
			$dudas_tagline  = get_sub_field( 'tagline_dudas' );
			$dudas_btn_text = get_sub_field( 'texto_boton_dudas' );
			$dudas_btn_link = get_sub_field( 'enlace_boton_dudas' );
			?>
			<div class="dudas-container"><div class="wrap">
			<h2><?php echo $dudas_title; ?></h2>
			<a class="button-dudas" href="<?php echo $dudas_btn_link; ?>"><span><?php echo $dudas_btn_text; ?></span><span class="icon"></span></a>
			<div class="dudas-tagline"><?php echo $dudas_tagline; ?></div>
			</div></div><!--dudas-container-->

			<?php
		endwhile;
	endif;
}
