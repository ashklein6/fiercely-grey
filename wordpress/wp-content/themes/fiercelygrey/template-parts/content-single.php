<?php
/**
 * Template part for displaying posts - single post page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fiercelyGrey
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="fullpage-single" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
    <div class="fullpage-header">
      <?php fiercelygrey_posted_on(); ?>
      <?php
        if ( is_singular() ) :
          the_title( '<h1 class="single-title">', '</h1>' );
        else :
          the_title( '<h2 class="single-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
      ?>
    </div>
  </div>

	<div class="entry-content-single">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'luna' ), 
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->