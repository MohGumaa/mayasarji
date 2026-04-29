<?php
/**
 * Template part for displaying post archives and search results
 *
 * @package mayasarji
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$ms_post_id   = get_the_ID();
$ms_title     = get_the_title();
$ms_permalink = get_permalink();
$default_img  = get_theme_file_uri( 'assets/images/banner-1.webp' );
?>

<article 
	id="post-<?php the_ID(); ?>" 
	<?php post_class('border border-white/7 bg-white/[0.02] transition-colors duration-300 overflow-hidden group rounded-md article-card'); ?>
	aria-labelledby="post-title-<?php echo esc_attr($ms_post_id); ?>"
>

	<figure class="overflow-hidden relative">
		<a 
			href="<?php echo esc_url($ms_permalink); ?>" 
			class="block w-full h-52 md:h-56 lg:h-48 xl:h-56"
			aria-hidden="true" 
			tabindex="-1"
		>
			<?php
			if ( has_post_thumbnail() ) {
				echo get_the_post_thumbnail(
					$ms_post_id,
					'ms-blog-featured',
					['class' => 'object-cover w-full h-full rounded']
				);
			} else {
				?>
				<img 
					src="<?php echo esc_url($default_img); ?>" 
					alt="<?php echo esc_attr($ms_title); ?>" 
					class="w-full h-full object-cover rounded"
					width="300"
					height="180"
				>
				<?php
			}
			?>
		</a>
	</figure>

	<div class="space-y-2 px-3 py-4">
		
		<h2 id="post-title-<?php echo esc_attr($ms_post_id); ?>" class="lg:text-lg line-clamp-2 article-title">
			<a href="<?php echo esc_url($ms_permalink); ?>" rel="bookmark">
				<?php echo esc_html($ms_title); ?>
			</a>
		</h2>

		<?php the_excerpt(); ?>

		<time 
			datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>" 
			class="text-xs text-tertiary"
		>
			<?php echo esc_html( get_the_date() ); ?>
		</time>

	</div>
</article>
