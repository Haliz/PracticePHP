<?php

define("ROOT", dirname(__DIR__)); // dirname поднимает выше на один уровень.
define("PUBLIC_DIR", __DIR__);
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("PATH", 'http://practicephp');



require_once CORE.'/funcs.php';


require CONTROLLERS . '/index.php';