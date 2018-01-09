<?php

require 'app/start.php';

$pages = $db->query("
	SELECT field, label, slug
	FROM pages
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/home.php';