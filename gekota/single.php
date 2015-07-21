
	<?php get_header(); ?>
	<div class="main container">
		<div class="sideleft">
			<div class="single post">
			    <!-- Post Content -->
			    <div class="content">
				    <div class="passage">
				    	<a class="posttitle"><?php the_title(); ?></a>
				    	<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
						<?php the_content(''); ?>
						<?php else : ?>
					        <h3>没有文章！</h3>
					    <?php endif; ?>
					</div>
					<div class="singlesub">
				    	<p>作者 <?php the_author(); ?> 发表于 <?php the_time('Y-m-d H:i') ?></p>
				    	<p>评论 <?php comments_popup_link('╯﹏╰ 还没有评论呜......', '1 条评论', '% 条评论', '', '评论已关闭'); ?></p>
				    	<p>这篇文章被添加了标签 <?php the_tags('', ', ', ''); ?></p>
				    	<p><?php edit_post_link('编辑文章', '', ''); ?></p>
				    	<p><a href="http://creativecommons.org/licenses/by-nc-sa/2.5/deed.zh">遵循 CC BY-NC-SA 2.5 许可，允许署名-非商业性使用。</a></p>
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