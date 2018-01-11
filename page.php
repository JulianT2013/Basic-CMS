<?php

require 'app/start.php';

if ( empty( $_GET['page'] ) ) {
	$page = false;
} else {
	$slug = $_GET['page'];

	$page = $db->prepare('
		SELECT *
		FROM pages
		WHERE slug = :slug
		LIMIT 1
		');

	$page->execute( ['slug' => $slug] );

	$page = $page->fetch( PDO::FETCH_ASSOC );

	if ( $page ) {
		$page['Created'] = new DateTime($page['Created']);

		if ( $page['Updated'] ) {
			$page['Updated'] = new DateTime($page['Updated']);
		}
	}
}

require VIEW_ROOT . '/page/show.php';