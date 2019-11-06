<script type="text/javascript" src="<?php echo base_url(); ?>jQuery/jquery-1.8.2.js"></script>
<script>
$(document).ready(function(){
    
    $.ajax({
        type:"get",
        url:"welcome/get_main_content",
        success:function(data,status){
            $('#main_content_div').html(data);
            $("#main_content_div").fadeIn(500,function(){
                  $(document).ready(function(){
                    $('body').hide();
                       load_css_file();
                       
                       //$('body').css("background","linear-gradient(to bottom, #3D5399 0%, #81B8E6 32%, #81B8E6 36%, #81B8E6 39%, #81B8E6 42%, #81B8E6 45%, #81B8E6 47%, #81B8E6 50%, #81B8E6 53%, #81B8E6 56%, #81B8E6 60%, #3B5198 100%) repeat scroll 0 0 transparent")
                   });
           });
           
            console.log("Status : " +status);
        }
    });
});
function load_css_file(){

  $.ajax({
        type:"get",
        url:$('#base_url').val()+"css/style.css",
        success:function(data,status){
             $("<style></style>").appendTo("head").html(data);
              $('html').fadeIn(1000,function(){
                    $('body').fadeIn(500,function(){});
                    //$('body').css("background","linear-gradient(to bottom, #3D5399 0%, #81B8E6 32%, #81B8E6 36%, #81B8E6 39%, #81B8E6 42%, #81B8E6 45%, #81B8E6 47%, #81B8E6 50%, #81B8E6 53%, #81B8E6 56%, #81B8E6 60%, #3B5198 100%) repeat scroll 0 0 transparent")
                });
        }
    });
}
function load_dot(){
    var i=parseInt($('#dot_loader').val());
    $('#dot_loader').val(++i);
    if(i<5){
        $('#dot_loader').append(".");
    }else{
        $('#dot_loader').html("");
        $('#dot_loader').val(0);
    }
}

</script>
    <div id="loading_div" style="
                         background: none repeat scroll 0 0 #455FA2;
                        height: 30px;
                        left: 600px;
                        padding-left: 22px;
                        position: fixed;
                        top: 0;
                        width: 9%;
                        z-index: 1147483647;
                             ">
        <div style="float:left;color:black;z-index: 1147483647;" >Loading</div>
        <div id="dot_loader" style="float:left;color:black;z-index: 1147483647;"></div>
    </div>
<input type="hidden" id="base_url" value="<?php echo base_url();?>"/>
<input type="hidden" id="dot_size" value="0"/>
<div id="main_content_div" style="display:none; ">
</div>
<script>
    var count=self.setInterval(function(){load_dot()},1000);
</script>