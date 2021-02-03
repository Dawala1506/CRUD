<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Database - Update User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">EMPLOYEE DATABASE</a>
    </div>
    </div>
     <div class="container" style="padding-top: 10px: ">
            <h3>Update User</h3>
            <hr>
            <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit'.$user['id'];?>">
     <div class="row">
                
        <div class="col-md-6">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo set_value('name',$user['name']);?>" class="form-control">
            <?php echo form_error('name');?>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo set_value('email',$user['email']);?>" class="form-control">
            <?php echo form_error('email');?>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Update </button>
            <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
        
        </div>
        </div>
        
        </div>
        </form>
     </div>   


</body>
</html>