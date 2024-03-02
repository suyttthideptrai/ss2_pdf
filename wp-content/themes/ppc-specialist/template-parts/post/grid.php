<?php
/**
 * Template part for displaying posts
 *
 * @subpackage PPC Specialist
 * @since 1.0
 */
?>

<?php $ppc_specialist_post_option = get_theme_mod( 'ppc_specialist_grid_column','3_column');
    if($ppc_specialist_post_option == '1_column'){ ?>
    <div class="col-lg-12 col-md-12">
<?php }else if($ppc_specialist_post_option == '2_column'){ ?>
    <div class="col-lg-6 col-md-6">
<?php }else if($ppc_specialist_post_option == '3_column'){ ?>
    <div class="col-lg-4 col-md-4">
<?php }else if($ppc_specialist_post_option == '4_column'){ ?>
    <div class="col-lg-3 col-md-3">
<?php }?>
	<div id="Category-section" class="entry-content w-100">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="postbox smallpostimage p-3">
				<?php $blog_archive_ordering = get_theme_mod('archieve_post_order', array('title', 'image', 'meta','excerpt','btn'));
				foreach ($blog_archive_ordering as $post_data_order) :
					if ('title' === $post_data_order) :?>
					    <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					<?php elseif ('image' === $post_data_order) :?>
				        <?php
				            if(has_post_thumbnail()) { ?>
					        <div class="box-content-post text-center">
				            	<?php the_post_thumbnail(); ?>
				            </div>
				        <?php }?>
					<?php elseif ('meta' === $post_data_order) :?>
					    <div class="date-box mb-2 text-center">
							<?php if( get_option('ppc_specialist_date',false) != 'off'){ ?>
								<span class="mr-2"><i class="<?php echo esc_attr(get_theme_mod('ppc_specialist_date_icon','far fa-calendar-alt')); ?> mr-2"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
							<?php } ?>
							<?php if( get_option('ppc_specialist_admin',false) != 'off'){ ?>
								<span class="entry-author mr-2"><i class="<?php echo esc_attr(get_theme_mod('ppc_specialist_author_icon','fas fa-user')); ?> mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
							<?php }?>
							<?php if( get_option('ppc_specialist_comment',false) != 'off'){ ?>
								<span class="entry-comments mr-2"><i class="<?php echo esc_attr(get_theme_mod('ppc_specialist_comment_icon','fas fa-comments')); ?> mr-2"></i> <?php comments_number( __('0 Comments','ppc-specialist'), __('0 Comments','ppc-specialist'), __('% Comments','ppc-specialist')); ?></span>
							<?php }?>
							<?php if( get_option('ppc_specialist_tag',false) != 'off'){ ?>
								<span class="tags"><i class="<?php echo esc_attr(get_theme_mod('ppc_specialist_tag_icon','fas fa-tags')); ?> mr-2"></i> <?php display_post_tag_count(); ?></span>
							<?php }?>
						</div>
					<?php elseif ('excerpt' === $post_data_order) :?>
					    <p class="text-center"><?php ppc_specialist_custom_excerpt(); ?></p>
					<?php elseif ('btn' === $post_data_order) :?>
					    <div class="link-more mb-2 text-center">
							<a class="more-link" href="<?php echo esc_url( get_permalink() );?>"><?php echo esc_html(get_theme_mod('ppc_specialist_read_more_text',__('Read More','ppc-specialist'))); ?><i class="<?php echo esc_attr(get_theme_mod('ppc_specialist_read_more_icon','fas fa-arrow-right')); ?> ml-2"></i></a>
				  		</div>
					<?php endif;
				endforeach;
				?>       
	      		<div class="clearfix"></div>
	  		</div>
		</div>
	</div>
</div>