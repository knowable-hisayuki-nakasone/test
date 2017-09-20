<?php
mb_internal_encoding("UTF-8");
ini_set('display_errors', 1);
require_once './Dispatcher.php';
require_once './util.php';

$dispatcher = new Dispatcher();
IncludePathSetting($dispatcher);

////apacheのドキュメントルートから何階層目のディレクトリにMVCアプリを配備するか。
////ルートを0とすると、mvctest/ 配下は1階層目に当たるので、1とする。
//$dispatcher->setPramLevel(2);
$dispatcher->dispatch();

phpversion();
