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
// <h4><a href="<?php echo rss_item_url(); ?>" class="item_url"><?php echo rss_item_title(); ?></a></h4>
	<div id="sad<?php echo rss_item_id(); ?>" style="display:none"></div>
	<h5><?php echo rss_item_date(); ?><?php echo rss_item_author(); ?></h5>
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
	<h5>
		<a href="<?php echo rss_item_tagslink(); ?>"><?php echo __('Tags'); ?></a>:&nbsp;
		<span id="t<?php echo rss_item_id(); ?>"><?php echo rss_item_tags(); ?></span>&nbsp;
		<?php if (rss_item_can_edit_tags()) { ?>
		[<span id="ta<?php echo rss_item_id(); ?>"><a href="#" onclick="_et(<?php echo rss_item_id(); ?>); return false;"><?php echo __('edit'); ?></a></span>]
		<?php } ?>
	</h5>
	<?php } ?>
	<div class="content" id="c<?php echo rss_item_id(); ?>">
		<?php echo rss_item_content(); ?>
	</div>
</li>
