<?php require VIEW_ROOT . '/templates/header.php'; ?>

<?php if ( ! $page ): ?>
	<p>No page found, sorry.</p>

	<?php else: ?>

	<h2><?php echo escape( $page['Title'] ); ?></h2>

	<?php echo escape( $page['Body'] ); ?>

	<p class="faded">Created on <?php echo $page['Created']->format('jS M Y'); ?>

	<?php if ( $page['Updated'] ): ?>
		Last updated <?php echo $page['Updated']->format('jS M Y'); ?>
	<?php endif; ?>

	</p>

<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>