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


    public function indexAction()
    {
        // 初期化
        if($this->initialize()){

            $this->view->assign("bg_image", $this->src_path . "images/background/bg1.png");
        }else{
            // NotData Redirect

        }

    }
    private function initialize(){
        $this->view->assign("src_path", $this->src_path);
        $this->view->assign("systemRoot", $this->systemRoot);
        $this->view->assign("mtRand", mt_rand());

        return true;
    }



}