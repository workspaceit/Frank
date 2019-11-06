/**
 * Created by User on 13-Jul-15.
 */
function loadMoreSearchUser(){
    var userList = JSON.parse($("#groupUserList").val());
    var frm = $('form#group_form');
    var formData = frm.serializeArray();
    for(var i=0;i<userList.length;i++){
        var user = {name: "user_id[]", value:userList[i]};
        formData.push(user);
    }
    var offset = {name: "offset", value:offSet};
    formData.push(offset);
//            $('.middle_left').find('input[name=user_id]').each(function (i) {
//
//                user = {name: "user_id[]", value: $(this).val()};
//
//                $formData.push(user);
//
//            });
    $.ajax({

        url: BASE + 'search/get_memberinfo_by_trait',
        type: 'POST',
        data: formData,
        success: function (replyData) {
            $('.middle_left').fadeOut('slow', function () {
                $(this).html("").html(replyData).fadeIn();
                offSet++;
            });
        }
    });

    getHighestTraitUserByTraitId();
}