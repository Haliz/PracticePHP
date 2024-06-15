<?php
/**  This is done to display the editor's hint when hovering the mouse cursor over "findAll".
 * @var Db $db
 */

use core\classes\Db;

$title = 'My Blog :: Home';
$posts = $db ->query("select * from posts order by id desc ")->findAll();
$recent_posts = $db ->query("select * from posts order by id desc limit 3")->findAll();

require_once VIEWS.'/index.tpl.php';


