<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<h2> <?php echo $attributes['title'] ?></h2>
	<p> <?php echo $attributes['description'] ?></p>
</div>
