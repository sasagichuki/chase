<div class="sidebar-footer">
	<!-- Footer Sidebar Widgets Area -->
	<?php if ( is_active_sidebar( 'footer' ) ) : ?>
		<?php dynamic_sidebar( 'footer' ); ?>
	<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->
	<?php endif; ?>
	<!-- END Footer Sidebar Widgets Area -->
</div> <!-- Footer Sidebar -->