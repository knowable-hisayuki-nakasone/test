<?php
/**
 * Created by PhpStorm.
 * User: hsyknksn
 * Date: 2017/09/19
 * Time: 14:46
 */
require_once('BaseController.php');
require_once(__DIR__ . '/../logic/IndexLogic.php');

class IndexController extends BaseController
{

    private $index_logic;


    public function indexAction()
    {
        $this->initialize();



        $remote_addr = $_SERVER["REMOTE_ADDR"];

        $user_data = $this->index_logic->getData($remote_addr);

        if(!empty($user_data)){
            header('Location: http://192.168.33.10/centos73/mvctest/battle/index');
            return;
        }

        if(!empty($_POST['remote_addr']) && !empty($_POST['name'])){
            $getRemote_addr = $_POST['remote_addr'];
            $user_name      = $_POST['name'];

            $this->index_logic->setUserData($user_name, $getRemote_addr);
            header('Location: http://192.168.33.10/centos73/mvctest/battle/index');
            return;
        }



        $this->view->assign("remote_addr", $remote_addr);
        $this->view->assign("systemRoot", $this->systemRoot);
        $this->view->assign("mtRand", mt_rand());
    }

    private  function initialize(){
        $this->index_logic = new IndexLogic();

    }

}
