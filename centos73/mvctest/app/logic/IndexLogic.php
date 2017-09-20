<?php

require_once( __DIR__ . '/../model/UserDataModel.php' );

class IndexLogic{

    private $user_data;

    public function __construct(){
        $this->user_data = new UserDataModel();

    }

    public function getData($pc_ip){

        $user_data = $this->user_data->getIpData($pc_ip);
        return $user_data;

    }

    public function setUserData($user_name, $getRemote_addr){
        $this->user_data->crateDate($user_name, $getRemote_addr);

    }

    public function getUserName($api_uuid , $api_user_name){
//        $api_uuid_date = $this->api_model->getUuid($api_uuid);
//
//        if(!empty($api_uuid_date)){
//            $this->user_data->crateDate($api_uuid_date[0]['id'] , $api_user_name);
//        }

    }

    public function getUsers($user_id, $user_pwd){

//        $this->users->crateDate($user_id, $user_pwd);
    }


}
?>
