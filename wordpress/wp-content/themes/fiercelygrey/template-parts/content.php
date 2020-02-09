<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fiercelyGrey
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php fiercelygrey_post_thumbnail(); ?>
    <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
    ?>
  </header><!-- .entry-header -->

	<div class="entry-content">
    <?php if ( 'option2' == fiercelygrey_sanitize_index_content( get_theme_mod( 'fiercelygrey_post_content' ) ) ) :
						the_content(); 
					else :
						the_excerpt();
					endif; ?> 

  </div><!-- .entry-content -->
  
  <a href="<?php the_permalink(); ?>">
    <button>
      <?php echo esc_html( get_theme_mod( 'fiercelygrey_blog_view_more', esc_html__( 'VIEW POST', 'fiercelygrey' ) )) ?>
    </button>
  </a>
</article><!-- #post-<?php the_ID(); ?> -->
