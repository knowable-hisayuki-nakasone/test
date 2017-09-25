/**
 * Created by hsyknksn on 2017/09/23.
 */


/*
*
* 共通ポップアップ
*
* **/
var commonPopUp = function(objectName,isOpen) {


    if(!isOpen){
        $(objectName).hide();
        return true;
    }
    $(objectName).show();


    $(".clouse").on("click",function () {
        $(objectName).hide();
    });
    return true;
};
