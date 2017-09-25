/**
 * Created by hsyknksn on 2017/09/23.
 */



var commonPopUp = function(objectName) {


    $(objectName).show();


    $(".clouse").on("click",function () {
        $(objectName).hide();
    });
    return true;
};

function StatusContent() {


}