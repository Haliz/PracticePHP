<?php

//use core\classes\Db;
require_once __DIR__."/../vendor/autoload.php";

require_once dirname(__DIR__) . '/config/config.php';

require_once CORE . '/funcs.php';
//require_once CORE . '/classes/Db.php';

$db_config = require_once CONFIG . '/db.php';
$db = \myfrm\Db::getInstance()->getConnection($db_config);

require_once CORE . '/router.php';
