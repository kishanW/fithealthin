<?php
	/* @var stdClass $post */
	/* @var mixed    $more */
 ?>

<div>
	<a class="btn btn-primary excerpt-read-more"
	   href="<?php echo get_permalink(wpgrade::lang_post_id($post->ID)) ?>"
	   title="<?php echo __('Read more about', wpgrade::textdomain()).' '.get_the_title(wpgrade::lang_post_id($post->ID)) ?>">

		<?php echo __('Read more', wpgrade::textdomain()) ?>

	</a>
</div>