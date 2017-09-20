<?php
function IncludePathSetting($dispatcher){
//    var_dump($dispatcher);

    $path = '/vagrant/centos73/libs/';
    //$path .= PATH_SEPARATOR . '/vagrant/smarty/libs/ とは別にインクルードするディレクトリあれば指定/';
    $dispatcher->setSystemRoot('/vagrant/centos73/mvctest/app/');
    set_include_path(get_include_path() . PATH_SEPARATOR . $path);
}
?>
