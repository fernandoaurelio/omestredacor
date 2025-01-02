
<?php 
	// Template Name: LP Curso

get_header();
?>


<section id="banner">

	<div class="banner-container">
		<div class="banner-aula" style="background-image: url('<?php echo get_field('banner_aula') ?>');background-position: center; background-repeat: no-repeat;">
			<div class="aula-video-conteudo">					
				<h5><?php echo the_title() ?></h5>
				<div class="aula-video">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/nKvXxqfd90M?si=<?php echo get_field('link_do_video') ?>" title="<?php echo the_title(); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="conteudo-extra">
	<div class="extra-content-section">

		<div class="extra-content-downloads">
			<h3>Downloads</h3>
			<a href="#">Nome do Ebook</a>
		</div>

		<div class="extra-content-text">
			<h2>Conteúdo Extra</h2>
			<p>
				<?php 
				echo the_content();
				?>
			</p>
		</div>
	</div>

</section>
<section id="aula">
	<div class="trilha-conteudos-total">
		<h5>Trilha do Conhecimento</h5>
		<div class="cards-trilha-secao">
			<div class="card-trilha-container">
		<?php 
$related_posts = get_field('cursos_relacionados'); // Nome do seu campo ACF

if ($related_posts) :
	foreach ($related_posts as $post_id) :
		?><a href="<?php echo get_permalink($post_id); ?>">
				<div class="card-trilha" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id); ?>');">
					<div class="card-trilha-badge">Aula Liberada</div>
					<div class="card-trilha-overlay">
						<div class="card-trilha-title"><?php echo get_the_title($post_id); ?></div>
						<div class="card-trilha-summary"><?php echo get_the_excerpt($post_id); ?></div>
					</div>
				</div>
				</a>
		<?php
	endforeach;
endif;
?>			

			</div>
		</div>
</div>
</section>
<?php




get_footer();
?>