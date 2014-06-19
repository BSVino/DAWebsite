<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

</div>

<hr />
<div id="footer" role="contentinfo">
<div class="sitemap"><a class="whitelink" href="/blog">NEWS</a> <?/*| <a class="whitelink" href="/press">PRESS</a> | <a class="whitelink" href="/about">ABOUT</a> | <a class="whitelink" href="/contact">CONTACT</a>*/?></div><br />
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
        <p>
                <?php bloginfo('name'); ?> is proudly powered by <a class="whitelink" href="http://wordpress.org/">WordPress</a>
                <br />All content Copyright &copy; <? echo date("Y"); ?> Double Action Factory
        </p>
</div>

<?php wp_footer(); ?>
</body>
</html>

<? if (is_front_page()) { ?>
        <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
        <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/VinoBS.json?callback=twitterCallback2&amp;count=4"></script>
<? } ?>

