<?php
$session_id=$this->db->get_where("login_validate",array('session_id'=>$this->session->userdata("session_id")))->row();
if($this->session->userdata("session_id")==$session_id->session_id && $this->session->userdata("IsLogin")==true)
    {


?>
 
<?=form_open("admin/create_consinement","id='consinement'");?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>Consinement Entry Form</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label>Consinement Name :</label></td>
                    <td> <?=form_input('name','','class="form-control"');?>
                    <span class="err"><?=form_error("name")?></span></td>
                  </tr>
                    <tr>
                 <td align="right" width="20%"><label>Location :</label></td>
                    <td> <?=form_input('location','','class="form-control"');?>
                    <span class="err"><?=form_error("location")?></span></td>
                  </tr>
                   
                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'consinement\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
  <?php
}
else
{
  redirect("site");
  exit;
}

?>