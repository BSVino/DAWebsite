<?php
        define('WP_USE_THEMES', false);
        require('wp/wp-blog-header.php');

        if (is_feed())
            exit;

        get_header(); ?>

        <? if (is_front_page()) { ?>

			<iframe id="frontvideo" width="640" height="360" style="margin-top: 30px;" src="//www.youtube.com/embed/btzVypzt5nI" frameborder="0" allowfullscreen></iframe>

			<div id="download_outer"><a id="download_inner" class="whitelink" href="http://store.steampowered.com/app/317360">Completely Free!<br /><span id="download_now">DOWNLOAD NOW</span></a><center>Requires Steam</center></div>

			<br clear="both" />

        <? } ?>

        <div id="content" role="main"><div id="content_inner">

		    <? if (is_front_page()) { ?>

				<div id="blogbox">
			                <?
			                global $post;
			                $args = array(
			                        'numberposts'     => 3,
			                        'offset'          => 0,
			                        'category'        => '',
			                        'orderby'         => 'post_date',
			                        'order'           => 'DESC',
			                        'include'         => '',
			                        'exclude'         => '',
			                        'meta_key'        => '',
			                        'meta_value'      => '',
			                        'post_type'       => 'post',
			                        'post_mime_type'  => '',
			                        'post_parent'     => '',
			                        'post_status'     => 'publish' );

			                $posts = get_posts($args);

			                foreach ($posts as $post) : setup_postdata($post); ?>
			                    <p><a class="blogtitle" href="<? the_permalink(); ?>"><? the_title(); ?></a><br /><span class="blogbyline"><? the_date(); ?> - by <? the_author(); ?></span></p>
			                    <p><? the_content(); ?></p>

								<div class="share-post"><ul><li>
									<div id="fb-root"></div>
									<script>(function(d, s, id) {
										var js, fjs = d.getElementsByTagName(s)[0];
										if (d.getElementById(id)) return;
										js = d.createElement(s); js.id = id;
										js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
										fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));</script>
									<div class="fb-like" data-href="<? the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
								</li></ul></div>

								<div style="height: 1px; background-color: black; margin-top: 60px;"></div>
			                <? endforeach; ?>
					<a href="/blog/page/2/" style="font-size: large; padding: 10px;">&laquo; More posts</a>
				</div>

	        <? } else { ?>

				<?php if (have_posts()) : ?>

					<div id="blogbox">
				    <?php
				    	$more = 1;
				    	while (have_posts()) : the_post(); ?>

				        <div id="post-<?php the_ID(); ?>">
				            <? if (!is_page()) { ?>
				                <a class="blogtitle" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				                <span class="blogbyline"><? the_date(); ?> - by <? the_author(); ?></span>
				            <? } ?>

			                <?php
								global $more;    // Declare global $more (before the loop).
								$more = 1;       // Set (inside the loop) to display all content, including text below more.
								the_content();
							?>
				        </div>

						<? if (!is_page()) { ?>
							<div class="share-post"><ul><li>
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
									var js, fjs = d.getElementsByTagName(s)[0];
									if (d.getElementById(id)) return;
									js = d.createElement(s); js.id = id;
									js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
									fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
								<div class="fb-like" data-href="<? the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
							</li></ul></div>
						<? } ?>

						<div style="height: 1px; background-color: black; margin-top: 60px;"></div>

				    <?php endwhile; ?>
				    </div></div>

				    <div class="navigation">
				        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
				        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				    </div>

				<?php else : ?>

				    <h2 class="center">Existential Crisis</h2>
				    <p class="center">There's nothing here.</p>
				    <?php get_search_form(); ?>

				<?php endif; ?>

	        <? } ?>

		</div></div>

		<div id="rightbar">
			<div class="rightbarsection">
				<a class="socialbutton" href="https://www.facebook.com/2xaction"><img src="/wp/wp-content/themes/doubleaction/images/social-facebook.png" /></a>
				<a class="socialbutton" href="http://steamcommunity.com/groups/2x_action"><img src="/wp/wp-content/themes/doubleaction/images/social-steamgroup.png" /></a>
				<a class="socialbutton" href="http://www.doubleactiongame.com/rss"><img src="/wp/wp-content/themes/doubleaction/images/social-subscribe.png" /></a>
				<a class="socialbutton" href="https://www.twitter.com/vinobs"><img src="/wp/wp-content/themes/doubleaction/images/social-twitter.png" /></a>
				<a class="donatebutton" href="http://www.doubleactiongame.com/double-action-development-fund/">Support Double Action!</a>
				<br clear="both" />
			</div>

			<div class="rightbarsection">
				<h3>Double Action Style Leaders</h3>
				<? require '/srv/www/doubleaction.data/htdocs/leaderboard/short.html'; ?>
			</div>

<?/*!-- Fast Flickr start -->
				<div id="fastflickrwidget-2" class="widget widget_fastflickrwidget">					<div class="widget-top"><h4>Latest Killcams</h4><div class="stripe-line"></div></div>
						<div class="widget-container">					<a  target="_blank" href="http://www.flickr.com/photos/103635579@N03/14416190236/"><img vspace="2" hspace="5" class="flickr_photo" alt="			doubleactiongame posted a photo:	" title="			doubleactiongame posted a photo:	" src="http://farm4.staticflickr.com/3884/14416190236_26227283c7_s.jpg" /></a><a  target="_blank" href="http://www.flickr.com/photos/103635579@N03/9996336153/"><img vspace="2" hspace="5" class="flickr_photo" alt="			doubleactiongame posted a photo:	" title="			doubleactiongame posted a photo:	" src="http://farm3.staticflickr.com/2848/9996336153_3b1d2a1b75_s.jpg" /></a><a  target="_blank" href="http://www.flickr.com/photos/103635579@N03/9996337273/"><img vspace="2" hspace="5" class="flickr_photo" alt="			doubleactiongame posted a photo:	" title="			doubleactiongame posted a photo:	" src="http://farm6.staticflickr.com/5455/9996337273_8eab1861e4_s.jpg" /></a><a  target="_blank" href="http://www.flickr.com/photos/103635579@N03/14437985572/"><img vspace="2" hspace="5" class="flickr_photo" alt="			doubleactiongame posted a photo:	" title="			doubleactiongame posted a photo:	" src="http://farm6.staticflickr.com/5546/14437985572_1904075a3b_s.jpg" /></a><a  target="_blank" href="http://www.flickr.com/photos/103635579@N03/9996337623/"><img vspace="2" hspace="5" class="flickr_photo" alt="			doubleactiongame posted a photo:	" title="			doubleactiongame posted a photo:	" src="http://farm4.staticflickr.com/3798/9996337623_164c075574_s.jpg" /></a><a  target="_blank" href="http://www.flickr.com/photos/103635579@N03/14252886617/"><img vspace="2" hspace="5" class="flickr_photo" alt="			doubleactiongame posted a photo:	" title="			doubleactiongame posted a photo:	" src="http://farm3.staticflickr.com/2929/14252886617_49bb97bae7_s.jpg" /></a><a  target="_blank" href="http://www.flickr.com/photos/103635579@N03/14252886447/"><img vspace="2" hspace="5" class="flickr_photo" alt="			doubleactiongame posted a photo:	" title="			doubleactiongame posted a photo:	" src="http://farm4.staticflickr.com/3895/14252886447_799ea1ab37_s.jpg" /></a><a  target="_blank" href="http://www.flickr.com/photos/103635579@N03/10739889676/"><img vspace="2" hspace="5" class="flickr_photo" alt="			doubleactiongame posted a photo:	" title="			doubleactiongame posted a photo:	" src="http://farm3.staticflickr.com/2865/10739889676_c2b938b908_s.jpg" /></a><a  target="_blank" href="http://www.flickr.com/photos/103635579@N03/9996339403/"><img vspace="2" hspace="5" class="flickr_photo" alt="			doubleactiongame posted a photo:	" title="			doubleactiongame posted a photo:	" src="http://farm4.staticflickr.com/3731/9996339403_f9f6bb26f4_s.jpg" /></a><a  target="_blank" href="http://www.flickr.com/photos/103635579@N03/9996335843/"><img vspace="2" hspace="5" class="flickr_photo" alt="			doubleactiongame posted a photo:	" title="			doubleactiongame posted a photo:	" src="http://farm8.staticflickr.com/7289/9996335843_8661a5bbea_s.jpg" /></a>									</div></div><!-- .widget /-->			<!-- Fast Flickr end --*/?>
			
		</div>
<?php get_footer(); ?>

