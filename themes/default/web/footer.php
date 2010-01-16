	<span><a href="#top">TOP</a></span>
	<?php echo rss_plugin_hook("rss.plugins.footer.span",null); ?>
	<span>
		<!-- Comment Out
		<?php echo __(' powered by ') ?> <a href="http://php.net">PHP</a>, 
		<a href="http://magpierss.sourceforge.net/">MagpieRSS</a>, 
		<a href="http://sourceforge.net/projects/kses">kses</a>,
		<a href="http://www.modernmethod.com/sajax/">SAJAX</a>
		-->
	</span>
	<span>
		Haiti Tracker is valid <a title="Valid XHTML."  href="http://validator.w3.org/check/referer">XHTML1.0</a>. Powered by <a href="http://gregarius.net/">Gregarius</a> <?php echo _VERSION_; ?><?php echo rss_svn_rev('.'); ?>. <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS2.0</a> &copy 2010 SwiftRiver + Ushahidi
	</span>
	<span style="border-right:none">
		<?php echo __('Last Update') ?>:&nbsp;<?php echo rss_footer_last_modif(); ?>
	</span>
