$(document).ready(function(){

    $(".back_image").css("background-image" , "url(" + image_bg + ")");

    if(character_status !== undefined){
        SetStatus(character_status);

        $(".buttons").on("click",function(){
            commonPopUp(".popup1", true);
        });
    }

    // 攻撃ボタン
    $("input:button").click(function(){
        commonPopUp(".popup1", false);
        ActionAttack(this.name);

    });

});

function ActionAttack(attack_id) {

}

function SetStatus(status) {

    $.each(status,function( index, val ) {
        if(index !== 0){
            var status_object = $(".status_area").clone(true);
            status_object.find(".detail").text(val.attack_detail);
            status_object.find(".btn_attack").attr("name",val.attack_id);
            status_object.appendTo("#status_content");
        }else{
            $(".status_area .detail").text(val.attack_detail);
            $(".btn_attack").attr("name",val.attack_id);
        }


    });

}







