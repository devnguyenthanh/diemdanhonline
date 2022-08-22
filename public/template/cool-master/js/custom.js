
$(document).ready(function($target){
    $(".add-user-custom").click(function(){
        $(".popup-add-user-custom").addClass("popup-add-open");
        $(".popup-background").addClass("popup-add-open");
    });

    $("#create-button-popup-add").click(function(){
        console.log("123")
            $("#pop-up-create-new-user").addClass("popup-add-open");
    });


    $("#create-button-popup-x").click(function(){
        $(".popup-add-user-custom").removeClass("popup-add-open");
        $(".popup-background").removeClass("popup-add-open");
    });

    $(".popup-background").click(function(){
        $(".popup-add-user-custom").removeClass("popup-add-open");
        $(".popup-background").removeClass("popup-add-open");
    });

    $("#create-button-popup-x-usernew").click(function(){
        $("#pop-up-create-new-user").removeClass("popup-add-open");
        $("#pop-up-create-new-user").addClass("popup-add-hidden");
    });


    // $('body').dblclick(function(e) {
    //     if(($("#popup-add-user-custom").hasClass('popup-add-open')) && $(e.target).closest('#popup-add-user-custom').length === 0){
    //         console.log(123);
    //         $(".popup-add-user-custom").addClass("popup-add-hidden-2");
    //         $(".popup-add-user-custom").removeClass("popup-add-open");
    //     }
    // });
});

