	<?php get_header(); ?>
	<div class="main container">
		<div class="sideleft">
			<?php single_cat_title('#正在查看 分类标签 ： <b> '); ?> </b>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<p class="time">
				<?php the_time('Y-m-d') ?>
			</p>
			<div class="post indexpost">
			    <!-- Post Content -->
			    <div class="content">
				    <a class="posttitle" href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?></a>
				    <div class="passage preview">
				    	<?php the_content(''); ?>
				    </div>
				    <div class="clear"></div>
				</div>
				<div class="sub">
			    	<div class="l">
				    	
				    	<?php the_tags('', ', ', ''); ?>
				    	 · 
				    	<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
				    	<?php edit_post_link('编辑', ' &bull; ', ''); ?>
				    </div>
				    <a class="r" href="<?php the_permalink(); ?>">
					    	阅读全文
					</a>
				    <div class="clear"></div>
			    </div>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
	        <p>没有找到任何文章！</p>
	        <?php endif; ?>
			<div class="page">
				<span class="left">
					<?php previous_posts_link('&lt;&lt; 查看新文章', 0); ?> 
				</span>
				<span class="right">
					<?php next_posts_link('查看旧文章 &gt;&gt;', 0); ?>
				</span>
				<div class="clear"></div>
			</div>
		</div>
		<div class="sideright sidebarindex">
			<?php get_sidebar(); ?>
		</div>
		<div class="clear"></div>
	</div>
	<?php get_footer(); ?>
