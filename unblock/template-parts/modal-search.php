<?php
/**
 * Displays the search in a modal
 * @package UnBlock
 * @since 1.0.4
 */

?>


<div id="dialog_layer" class="dialogs">
<div class="dialog-backdrop">
  <div role="dialog" id="dialog1" aria-labelledby="dialog1_label" aria-modal="true" class="hidden">
     
	<div class="dialog_form">
      <div class="dialog_form_item">
			<?php get_search_form(); ?>
      </div>
	  <button type="button" class="search-modal-close" onclick="closeDialog(this)"><i class="bi bi-x-circle"></i>&nbsp;<?php esc_html_e( 'Cancel', 'unblock'); ?></button>
    </div>
	
  </div>

</div>
</div>