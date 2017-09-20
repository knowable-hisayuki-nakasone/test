<?php
/**
 * Created by PhpStorm.
 * User: hsyknksn
 * Date: 2017/09/20
 * Time: 16:14
 */

require_once('BaseController.php');
require_once ('Smarty.class.php');
class BattleController extends BaseController
{
//リクエスト
//    private $request;
//    //モデルs
//    private $model;
//    //ビュー(Smartyのインスタンス)
//    private $view;
//    //ビューで表示するURL
//    private $url;

    // コンストラクタ
    protected function construct()
    {
//        $this->__construct();


    }

    public function indexAction()
    {
        $mtRand = mt_rand();

        $this->view->assign("systemRoot", $this->systemRoot);
        $this->view->assign("mtRand", $mtRand);
    }



}