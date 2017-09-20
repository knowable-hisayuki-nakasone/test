<?php
require_once ('../libs/Smarty.class.php');
require_once ('./app/controllers/BaseController.php');
class Dispatcher
{
    private $sysRoot;
    private $paramLevel = 3;
    private $action;
    /**
     * システムのルートディレクトリを設定
     */
    public function setSystemRoot($path)
    {
        $this->sysRoot = rtrim($path, '/');
    }

    /**
     * 振分け処理実行
     */
    public function dispatch()
    {

        $params_tmp = array();
        //?で分割。GETパラータを無視するため
        $params_tmp = explode('?', $_SERVER['REQUEST_URI']);
//        var_dump($params_tmp);
        // パラメーター取得（末尾,先頭の / は削除）
        $params_tmp[0] = preg_replace('/\?$/', '', $params_tmp[0]);
        $params_tmp[0] = preg_replace('/\*/', '', $params_tmp[0]);
        $params = array();

        if ('' != $params_tmp[0]) {
            // パラメーターを / で分割
            $params = explode('/', $params_tmp[0]);
        }

        // １番目のパラメーターをコントローラーとして取得
        $controller = "index";

        if ($this->paramLevel < count($params)) {
            $controller = $params[$this->paramLevel];
        }

        // パラメータより取得したコントローラー名によりクラス振分け
        $className = ucfirst(strtolower($controller)) . 'Controller';

        // クラスファイル読込
        require_once $this->sysRoot . '/controllers/' . $className . '.php';

        $url ="/";
        for ($i = 0; $i < $this->paramLevel; $i++) {
            $url = $url . $params[$i] . "/";
        }

        // クラスインスタンス生成
        $controllerInstance = new $className($url);

        // 2番目のパラメーターをコントローラーとして取得
        $this->action= 'index';

        if (($this->paramLevel + 1) < count($params)) {
            $this->action= $params[($this->paramLevel + 1)];
        }
        $controllerInstance->setSystemRoot($this->sysRoot);
        $controllerInstance->setControllerAction($controller, $this->action);
        // 処理実行
        $controllerInstance->run();
        // アクションメソッドを実行
//        $actionMethod = $this->action . 'Action';
//        $controllerInstance->$actionMethod();

    }

}

