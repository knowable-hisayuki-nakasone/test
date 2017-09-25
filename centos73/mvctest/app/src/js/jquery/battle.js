$(document).ready(function(){

    $(".back_image").css("background-image" , "url(" + image_bg + ")");

    if(character_status !== undefined){
        SetStatus(character_status);

        $(".buttons").on("click",function(){
            commonPopUp(".popup1");
        });
    }


});

function SetStatus(status) {

    $.each(status,function( index, val ) {
        if(index !== 0){
            var status_object = $(".status_area").clone(true);
            status_object.children("p").text(val.attack_detail);
            status_object.
            status_object.appendTo("#status_content");
        }else{
            $(".status_area p").text(val.attack_detail);
        }


    });

}







