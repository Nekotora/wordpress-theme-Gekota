
	<?php get_header(); ?>
	<div class="main container">
		<div class="sideleft">
			<div class="single post">
				<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			    <!-- Post Content -->
			    <div class="content">
			    	<p class="sub">
				    		<?php the_time('Y-m-d H:i') ?> &bull; 
				    	<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?> &bull; 
				    	<?php the_tags('标签：', ', ', ''); ?>
				    	<?php edit_post_link('编辑', ' &bull; ', ''); ?>
				    </p>
				    <div class="passage">
				    	<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
						<?php the_content(''); ?>
						<?php else : ?>
					        <h3>没有文章！</h3>
					    <?php endif; ?>
					</div>
				    <div class="clear"></div>
				</div>
			</div>
			<div class="reply post">
				<h3 class="title">发表评论</h3>
				<?php comments_template(); ?>
			</div>
		</div>
		<div class="sideright">
			<?php get_sidebar(); ?>
		</div>
		<div class="clear"></div>
	</div>

	<?php get_footer(); ?>