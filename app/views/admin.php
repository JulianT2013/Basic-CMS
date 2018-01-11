<?php require VIEW_ROOT . '/templates/header.php'; ?>

<?php if ( empty($pages) ): ?>
	<p>No pages at  the moment</p>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<th>Label</th>
				<th>Title</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	</table>

	</table>
<?php endif; ?>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>