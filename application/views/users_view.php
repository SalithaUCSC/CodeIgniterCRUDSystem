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

<div class="col-md-12">

<h1 class="heading" style="margin-bottom: 50px;">Stored users in Databse</h1>

<a href="<?php echo base_url('Crud') ?>"><button  class='btn btn-danger' style="margin-bottom: 50px;">Back</button></a>

    <table class="table table-striped">

        <tr>
            <th>Reg No</th>
            <th>Name</th>
            <th>University</th>
            <th>Edit</th>
            <th>Remove</th>
        </tr>

        <?php if (count($records)): ?>

            <?php foreach ($records as $row): ?>

            <tr>
                <td><?php echo $row->stu_reg; ?></td>
                <td><?php echo $row->stu_name; ?></td>
                <td><?php echo $row->stu_uni; ?></td>
                <th><a href="<?php echo base_url('Crud/editUser/'.$row->stu_id) ?>"><button type='submit' class='btn btn-warning'>Update</button></th></a>
                <th><a href="<?php echo base_url('Crud/deleteUser/'.$row->stu_id) ?>"><button type='submit' class='btn btn-danger'>Delete</button></th></a>
            </tr>

            <?php endforeach; ?>

        <?php else: ?>
            <p style="margin-bottom: 50px;">No users in the database</p>
        <?php endif ?>

    </table>

</div>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
