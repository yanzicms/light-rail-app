<?php
/**
 * Project: lightRail.
 * Author: A.J <804644245@qq.com>
 * Copyright: A.J <804644245@qq.com> All rights reserved.
 * Licensed: Apache-2.0
 * GitHub: https://github.com/yanzicms/light-rail-app
 */
namespace lightRail;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', __DIR__ . DS);
define('APP_PATH', ROOT_PATH . 'app' . DS);
require ROOT_PATH . 'vendor/autoload.php';
(new LightRail())->run();