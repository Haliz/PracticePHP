<?php

/**
 * @var Db $db
 */

use core\classes\Db;

$id = (int)$_GET['id'] ?? 0;
$post = $db->query("select * from posts where id = ? limit 1", [$id])->findOrFail();

$title = "My Blog :: {$post['title']}";

require_once VIEWS . '/post.tpl.php';
