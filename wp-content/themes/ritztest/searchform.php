<div class="modal fade" id="search-modal" tabindex="-1" aria-labelledby="search-modal-Label"
     aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Search form</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal"
				        aria-label="Close"></button>
			</div>
			<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
				<div class="modal-body">
					<?php //echo get_search_query(); ?>
					<label for="inputSearch" class="form-label w-100">
						<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
						<input
							type="search"
							id="inputSearch"
							class="form-control"
							aria-describedby="searchBlock"
							placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
							value="<?php echo get_search_query() ?>"
							name="s"
							title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"
						>
					</label>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary"
					        data-bs-dismiss="modal">Close
					</button>
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>