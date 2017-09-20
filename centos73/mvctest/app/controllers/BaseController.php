<?php
/**
 * Created by PhpStorm.
 * User: hsyknksn
 * Date: 2017/09/19
 * Time: 14:40
 */
//require_once ('Smarty.class.php');

class BaseController
{

    protected $systemRoot;
    protected $controller = 'index';
    protected $action = 'index';
    protected $view;
    protected $request;
    protected $templatePath;

    // コンストラクタ
    //ビューインスタンス化
    public function __construct(){


    }

    // システムのルートディレクトリパスを設定
    public function setSystemRoot($path)
    {
        $this->systemRoot = $path;
    }

    // コントローラーとアクションの文字列設定
    public function setControllerAction($controller, $action)
    {
        $this->controller = $controller;
        $this->action = $action;
    }

    // 処理実行
    public function run()
    {
        try {

            // ビューの初期化
            $this->initializeView();

            // 共通前処理
            $this->preAction();

            // アクションメソッド
            $methodName = sprintf('%sAction', $this->action);
            $this->$methodName();

            // 表示
            $this->view->display($this->templatePath);

        } catch (Exception $e) {
            // ログ出力等の処理を記述
        }
    }

    // ビューの初期化
    protected function initializeView()
    {
        $this->view = new Smarty();
        $this->view->template_dir = sprintf('%s/view/templates/', $this->systemRoot);
        $this->view->compile_dir = sprintf('%s/view/templates_c', $this->systemRoot);
        $this->view->cache_dir = sprintf('%s/cache', $this->systemRoot);
        $this->templatePath = sprintf('%s/%s.tpl', $this->controller, $this->action);
    }

    // 共通前処理（オーバーライド前提）
    protected function preAction(){

    }

}

