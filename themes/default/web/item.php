<li class="<?php echo rss_item_css_class(); ?>" id="item_<?php echo rss_item_id(); ?>">
	<?php if(rss_item_permalink()) { ?>
	<a class="plink" title="<?php echo rss_item_pl_title(); ?>" href="<?php echo rss_item_pl_url(); ?>">
		<img src="<?php echo getExternalThemeFile('media/pl.gif'); ?>" alt="<?php echo rss_item_pl_title(); ?>" />
	</a>
	<?php } ?>
	<?php if(!hidePrivate()) { ?>
	<a title="<?php echo __('Edit Item Properties'); ?>" id="sa<?php echo rss_item_id(); ?>" href="#" onclick="_es(<?php echo rss_item_id(); ?>,<?php echo rss_item_flags(); ?>,<?php echo rss_item_cid(); ?>); return false;">
		<img src="<?php echo getExternalThemeFile('media/edit.gif'); ?>" alt="<?php echo __('Edit Item Properties'); ?>" />
	</a>
	<?php } ?>
	<?php rss_plugin_hook("rss.plugins.items.beforetitle", rss_item_id()); ?>
	<h4><?php echo rss_item_content(); ?></h4>
	<br />
	<div id="sad<?php echo rss_item_id(); ?>" style="display:none"></div>

	<h5><?php echo rss_item_date(); ?><?php echo rss_item_author(); ?>&nbsp;</h5>
	<?php if (rss_item_do_rating()) { ?>
	<div class="rating">
		<h5><?php echo __('Rating:'); ?></h5>
		<?php echo rss_item_rating(); ?>
		<?php rss_item_rating(); ?>
	</div>
	<?php } ?>
	<?php if (rss_item_has_enclosure()) { ?>
      <h5><?php echo __('Enclosure:'); ?>&nbsp;[<a href="<?php echo rss_item_enclosure(); ?>"><?php echo __('download'); ?></a><?php rss_plugin_hook("rss.plugins.items.enclosure", null); ?>]</h5>
	<?php } ?>
	<?php	if (rss_item_display_tags()) { ?>
	<p></p>
	<div id="hiddenDiv" style="display:none;visible:hidden;">
	<iframe src="send.html" height="1" width="1" border="0" scrolling="no" name="hiddenFrame" id="hiddenFrame"></iframe>	
	<form method="post" action="http://haiti.ushahidi.com/api" target="hiddenFrame">
	<input type="hidden" name="task" id='task' value="report" />
	<input type="hidden" name="incident_title" id="incident_title" value="<?php print rss_item_title(); ?>" />
	<input type="hidden" name="incident_description" id="incident_description" value="<?php print rss_item_content(); ?>" />
	<input type="hidden" name="incident_date" id="incident_date" value="<?php print date("m/d/Y"); ?>" />
	<input type="hidden" name="incident_hour" id="incident_hour" value="<?php print date("g"); ?>" />
	<input type="hidden" name="incident_minute" id="incident_minute" value="<?php print date("i"); ?>" />
	<input type="hidden" name="incident_ampm" id="incident_ampm" value="pm" />
	<input type="hidden" name="incident_category" id="incident_category" value="2,4,5,7" />
	<input type="hidden" name="latitude" id="latitude" value="-0.00" />
	<input type="hidden" name="longitude" id="longitude" value="0.00" />
	<input type="hidden" name="location_name" id="location_name" value="unknown" /></div>	
	<input type="submit" value="Send to Ushahidi" />
	</form>&nbsp;
	<h6>
		<?php echo __('Tags'); ?>:&nbsp;
		<span id="t<?php echo rss_item_id(); ?>"><?php echo rss_item_tags(); ?></span>&nbsp;
		<?php if (rss_item_can_edit_tags()) { ?>
		[<span class="tag" id="ta<?php echo rss_item_id(); ?>"><a href="#"onclick="_et(<?php echo rss_item_id(); ?>); return false;"><?php echo __('Add Tags'); ?></a></span>]
		<?php } ?>
	</h6>
	<?php } ?>
</li>
