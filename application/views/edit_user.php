<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD | CodeIgniter</title>
<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<style type="text/css">
    body{
        font-family: 'Lato', sans-serif;
        margin: 0;
        font-size: 18px;
    }
</style>
<body>

<div class='container'>

<h1 class="heading" style="margin-top: 50px;">Edit user</h1>

<div class="col-md-6" style="margin-top: 30px; ">

    <?php echo form_open('Crud/editUser/'.$row->stu_id); ?>

            <div class="form-group">
            <label for="sid">Student ID</label>
            <input type="text" class="form-control" id="sid" name="stu_reg" value="<?php echo $row->stu_id ?>" readonly>
            </div>
            <div class="form-group">
            <label for="regno">Student RegNo</label>
            <input type="text" class="form-control" id="sregno" name="stu_reg" value="<?php echo $row->stu_reg ?>">
            </div>
            <div class="form-group">
                <label for="sname">Student Name</label>
                <input type="text" class="form-control" id="sname" name="stu_name" value="<?php echo $row->stu_name ?>">
            </div>
            <div class="form-group">
                <label for="suni">University</label>
                <input type="text" class="form-control" id="suni" name="stu_uni" value="<?php echo $row->stu_uni ?>">
            </div>


    <button class='btn btn-success' name='update' style='margin-bottom: 10px;'>Update</button>
    <?php echo form_close(); ?>

    <a href="<?php echo base_url('Crud/viewUsers') ?>"><button type='submit' class='btn btn-danger'>Back</button></a>

</div>

<div class="col-md-6" style="margin-top: 60px; ">

<?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php elseif ($this->session->flashdata('error')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('error'); ?>
        </div>

    <?php else: ?>
<?php endif; ?>

</div>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
