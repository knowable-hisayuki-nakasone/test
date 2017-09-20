<?php
/**
 * Created by PhpStorm.
 * User: hsyknksn
 * Date: 2017/09/20
 * Time: 18:31
 */
require_once('DbManagerPdo.php');
class UserDataModel
{

    private $table = "user_data";
    private $db;

    function __construct(){
        $this->db = connectDbforPdo();
    }

    public function getIpData($pc_ip){

        $sql = 'select * from ' . $this->table . ' where pc_ip = ' . '"' . $pc_ip . '"';

        $stt = $this->db->query($sql);

        if(!$stt->execute()){
            return false;
        }

        return $stt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function crateDate($user_name, $getRemote_addr){

        $sql = 'INSERT INTO ' . $this->table . '(id, pc_ip, name) VALUES(null ,' . '"' . $getRemote_addr . '"' . ',"' . $user_name . '"'  . ')';

        $stmt = $this->db->prepare($sql);

        return $stmt->execute();
    }

}

?>