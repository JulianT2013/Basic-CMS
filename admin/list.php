<?php

require '../app/start.php';

$pages = $db->query("
	SELECT Field, Label, Title, Slug
	FROM pages
	ORDER BY Created DESC
	")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/list.php';