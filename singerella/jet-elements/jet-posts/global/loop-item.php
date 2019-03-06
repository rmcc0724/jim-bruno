<?php
/**
 * Posts loop start template
 */
?>
<div class="jet-posts__item <?php echo jet_elements_tools()->col_classes( array(
	'desk' => $this->get_attr( 'columns' ),
	'tab'  => $this->get_attr( 'columns_tablet' ),
	'mob'  => $this->get_attr( 'columns_mobile' ),
) ); ?>">
	<div class="jet-posts__inner-box"><?php

		include $this->get_template( 'item-thumb' );
		include $this->get_template( 'item-meta' );
		include $this->get_template( 'item-title' );
		include $this->get_template( 'item-content' );
		include $this->get_template( 'item-more' );

	?></div>
</div>