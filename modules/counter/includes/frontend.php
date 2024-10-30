<?php
$node_id = "ba-node-$id";
?>

<div class="ba-module__counter <?php echo $node_id; ?>">
	<div class="counter__content">
		<span class="counter__pre"><?php echo esc_html($settings->prefix_text) ?></span>
		<span class="counter__increment">0</span>
		<span class="counter__pos"><?php echo esc_html($settings->sufix_text) ?></span>
	</div>
</div>