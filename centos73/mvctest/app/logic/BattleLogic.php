<?php
/**
 * Created by PhpStorm.
 * User: hsyknksn
 * Date: 2017/09/24
 * Time: 14:47
 */

class BattleLogic{


    public function getStatus(){

        $status[] =
            array("player_id" => "1",
            "attack_id" => "1",
            "attack_detail" => "攻撃1");
        $status[] =
            array("player_id" => "2",
                "attack_id" => "2",
                "attack_detail" => "攻撃2");

        return $status;
    }
}
