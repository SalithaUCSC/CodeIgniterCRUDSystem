<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>

<div class='container'>

<h1 class="heading" style="margin-top: 50px;">Welcome to CodeIgniter CRUD System</h1>

<div class="col-md-6" style="margin-top: 30px; ">

    <?php echo form_open('Crud/addStudent'); ?>
        <div class="form-group">
            <label for="regno">Student RegNo</label>
            <input type="text" class="form-control" id="sregno" name="stu_reg" placeholder="Type Student Registration number here...">
        </div>

        <div class="form-group">
            <label for="sname">Student Name</label>
            <input type="text" class="form-control" id="sname" name="stu_name" placeholder="Type Student Name here...">
        </div>
        <div class="form-group">
            <label for="suni">University</label>
            <input type="text" class="form-control" id="suni" name="stu_uni" placeholder="Type University here...">
        </div>
        <button type="submit" class="btn btn-primary">ADD STUDENT</button>
    <?php echo form_close(); ?>

    <?php echo form_open('Crud/viewUsers'); ?>
    <button type="submit" class="btn btn-info" style='margin-top: 20px;'>VIEW</button>
    <?php echo form_close(); ?>
</div>

<div class="col-md-6" style="margin-top: 60px; ">
    <!-- validation message for a successful submission -->
    <?php if ($this->session->flashdata('success')) {?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php  } ?>

    <!-- validation messages for taking inputs -->
    <?php

    echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>','</div>');
    ?>

</div>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
