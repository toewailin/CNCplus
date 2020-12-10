
 <div style="width:50%;margin:10% auto">
<h1>Account Setting Form</h1>

<?php
echo get_cookie("cookie_name");
echo form_open_multipart("admin/account_setting",'class="contact-form" id="account_setting"');
/*echo "<h3>".$errmessage."</h3>"; "admin/account_setting"*/

?>
<div class="form-group">
                <label><?=$oldpassword?></label>
                <?=form_password('opassword','','placeholder="Old Password" class="form-control"');?>
</div>



<div class="form-group">
                <label><?=$newpassword?></label>
                <?=form_password('password','','placeholder="New Password" class="form-control"');?>
</div>

<div class="form-group">
                <label><?=$cnewpassword?></label>
                <?=form_password('cpassword','','placeholder="Confirm New Password" class="form-control"');?>
</div>

<?php 
echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_account(\'account_setting\')"');
echo form_close();
?>
 </div>
