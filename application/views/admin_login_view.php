<?php include 'admin_header.php' ?>
<script>
    function validate_login_from(){
        var email=$('#email');
        var password=$('#password');
        
        if(email.val()==""){
            email.css("background","red").focus();
            return false;
        }else{
            email.css("background","white");
        }
        if(password.val()==""){
             password.css("background","red").focus();
             return false;
        }else{
            password.css("background","white");
        }
        return true;
    }
</script>
<div style="width:965px;height:auto;overflow:hidden;margin:0 auto;">
<div class="admin_panel">
    <?php include 'top_container.php' ?>
    
    <div class="admin_container">
        <div class="head_div" style="margin:0 auto;"><p>Login</p></div>
        <div class="admin_div">
            <div style="width:800px;height:175px;margin:10px auto;border:1px solid #111;border-radius:10px;background:#fff;">
	
            <form class="center_form" id='admin_login' action='<?php echo base_url();?>authentication/authenticate' method='post' onsubmit="return validate_login_from()">
               
               <label for='username'>Email:</label><input type='text' name='email' id='email'  maxlength="50" /><br>
               <label for='password'>Password:</label><input type='password' name='password' id='password' maxlength="50" />
                
                <input type='submit' name='Submit' class="btn_search" value='Submit' />
                <div id="login_error" style="color:red;">
                    <?php echo $this->session->flashdata('loginError'); ?>
                </div>
            </form>
            </div>
        </div>
    </div>
   </div>
   </div> 

    <?php include 'footer.php' ?>