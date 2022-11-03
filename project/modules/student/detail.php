<?php
require_once __DIR__.'/../../autoload.php';
    $id = $_GET['id'];

    $student =  student::get($id);

    if($student == null)exit("Student not found");
?>
<html>
    <head>
        <title>More details of <?=$student->name?></title>
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>
    <body>
        <h1>More details of <?=$student->name?></h1>
        <table border="0" cellspacing="0" cellpadding="5">
            <tr>
                <td>ID</td>
                <td><?=$student->id?></td>
            </tr>
            <tr>
                <td>FULL NAME</td>
                <td><?=$student->name?></td>
            </tr>
            <tr>
                <td>CALLING NAME</td>
                <td><?=$student->sname?></td>
            </tr>
            <tr>
                <td>AGE</td>
                <td><?=$student->age?></td>
            </tr>
            <tr>
                <td>NIC NUMBER</td>
                <td><?=$student->nic?></td>
            </tr>
            <tr>
                <td>ADDRESS</td>
                <td><?=$student->address?></td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td><?=$student->gender?></td>
            </tr>
            <tr>
                <td>MOBILE</td>
                <td><?=$student->mobile?></td>
            </tr>
            <tr>
                <td>E-MAIL</td>
                <td><?=$student->email?></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right">
                    <a class="my-delete-btn" href="delete.php?id=<?=$student->id?>">Delete</a>
                    <a class="my-update-btn" href="update-form.php?id=<?=$student->id?>">Update</a>
                </td>
            </tr>
        </table>
        <br>
        <a class="my-btn" href="table.php">All Student</a>
    </body>
</html>
