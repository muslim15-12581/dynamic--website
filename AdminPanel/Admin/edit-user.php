<?php
    require_once('functions/function.php');
    needLogged();
    get_header();
    get_sidebar();
    $id=$_GET['e'];
    $sel="SELECT * FROM cs_user WHERE user_id=$id";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_array($Q);

    if(isset($_POST['submit'])){
        $eid=$_POST['eid'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $role=$_POST['role'];

        $update="UPDATE cs_user SET user_name='$name', user_phone='$phone', user_email='$email', role_id='$role' WHERE user_id='$eid'";
        if(!empty($name)){
            if(mysqli_query($con,$update)){
                header('Location:view-user.php?v='.$eid);
                //echo "Successfully updated user information.";
            }else{
                echo "Update failed!";
            }
        }else{
            echo "Please enter your name!";
        }
    }
?>
  <div class="col-md-12 main_content">
      <form method="post" action="">
        <div class="card">
          <div class="card-header">
              <div class="row">
                  <div class="col-md-8">
                        <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Edit User Information</h4>
                  </div>
                  <div class="col-md-4 text-right">
                      <a class="btn btn-sm btn-dark card_top_btn" href="all-user.php"><i class="fa fa-th"></i> All User</a>
                  </div>
                  <div class="clearfix"></div>
              </div>
          </div>
          <div class="card-body">
               <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Name:</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="eid" value="<?= $data['user_id']; ?>"/>
                    <input type="text" class="form-control" name="name" value="<?= $data['user_name']; ?>">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                   <label class="col-sm-3 col-form-label">Phone:</label>
                   <div class="col-sm-7">
                     <input type="text" class="form-control" name="phone" value="<?= $data['user_phone']; ?>">
                   </div>
                 </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Email:</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" name="email" value="<?= $data['user_email']; ?>">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                   <label class="col-sm-3 col-form-label">User Role:</label>
                   <div class="col-sm-7">
                     <select class="form-control" name="role">
                          <?php
                              $selr="SELECT * FROM cs_role ORDER BY role_id ASC";
                              $Qr=mysqli_query($con,$selr);
                              while($urole=mysqli_fetch_assoc($Qr)){
                          ?>
                          <option value="<?= $urole['role_id']; ?>" <?php if($data['role_id']==$urole['role_id']){ echo 'selected';}?>><?= $urole['role_name']; ?></option>
                          <?php } ?>
                     </select>
                   </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Username:</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" name="username" value="<?= $data['user_username']; ?>" disabled>
                  </div>
                </div>
          </div>
          <div class="card-footer text-center">
              <button type="submit" name="submit" class="btn btn-sm btn-dark submit_btn">UPDATE</button>
          </div>
        </div>
    </form>
  </div>
<?php
    get_footer();
?>
