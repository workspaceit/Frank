var offSet=1;

function getUserTraitByUserList(elem){
    offSet = 1;

    var userList = JSON.parse($("#groupUserList").val());
    var formData = $(elem).serializeArray();

    for (var i = 0; i < userList.length; i++) {
        var user = {name: "user_id[]", value: userList[i]};
        formData.push(user);
    }

    var offset = {name: "offset", value: offSet};
    formData.push(offset);
    $.ajax({
        url: BASE + 'search/get_memberinfo_by_trait',
        type: 'POST',
        data: formData,
        success: function (replyData) {
            $('.middle_left').fadeOut('slow', function () {
                $(this).html("").html(replyData).fadeIn();
               // resizeBackground(20);
                offSet++;
            });
        }
    });

    getHighestTraitUserByTraitId();
    return false;

}
function getHighestTraitUserByTraitId() {

    var formData = $('form#group_form').serializeArray();
    var userList = JSON.parse($("#groupUserList").val());
    for(var i=0;i<userList.length;i++){
        user = {name: "user_id[]", value:userList[i]};
        formData.push(user);
    }

    $.ajax({
        url: BASE + 'search/get_group_highest_traituser/',
        type: 'POST',
        data: formData,
        success: function (reply) {
            $('.highest_traited').fadeOut().html("");
            $('.highest_traited').html(reply).fadeIn();
        }
    });

}
function getLatestGossipByUserList(){
    var url=$('#site_url').attr("value")+"gossip/get_group_gossip_view";
    var userList = JSON.parse($("#groupUserList").val());
   // resizeBackground(20);
    $.ajax({
        url:url,
        type:"post",
        data:{g_id:-1,userList:userList},
        success:function(data){
            var resp=JSON.parse(data);
            $('#gossip_container').html(resp.content);
            $('#gossip_container').fadeIn(500);
            $('.scrollbar_large').tinyscrollbar();
            $('.scrollbar_small').tinyscrollbar();
            $('.scrollbar1').tinyscrollbar();
           // resizeBackground(-220);

        }

    });

}