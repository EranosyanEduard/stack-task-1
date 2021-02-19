<?php
ini_set('display_errors', '1');
require_once './vendor/autoload.php';

use Jenssegers\Blade\Blade;

define('FILE_PATH', './utils/data.json');
if (file_exists(FILE_PATH)):
    $file_content = json_decode(file_get_contents(FILE_PATH));

    $blade = new Blade('./resources/views', './resources/cache');
    echo $blade->make('./blocks/list/list', ['items' => $file_content])->render();
endif;
