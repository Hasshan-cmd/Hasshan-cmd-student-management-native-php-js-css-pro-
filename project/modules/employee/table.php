<?php
require_once __DIR__.'/../../autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Student</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/tablestyle.css">
</head>
<body>
    <h1>All Student</h1>
    <table border="0" cellspacing="0" cellpadding="5">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>GENDER</th>
            <th>NIC_NUMBER</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php
                $students = Student::getAll();

                foreach ($students as $student){
                    echo'<tr>';
                        echo '<td>'.$student->id.'</td>';
                        echo '<td>'.$student->name.'</td>';
                        echo '<td>'.$student->age.'</td>';
                        echo '<td>'.$student->gender.'</td>';
                        echo '<td>'.$student->nic.'</td>';
                        echo '<td><a class="my-detail-btn" href="detail.php?id='.$student->id.'">More_Detail</a></td>';
                        echo '<td><a class="my-delete-btn" href="delete.php?id='.$student->id.'">Delete</a></td>';
                        echo '<td><a class="my-update-btn" href="update-form.php?id='.$student->id.'">Update</a></td>';
                    echo'</tr>';
                }
            ?>
        </tbody>
    </table>
    <br/>
    <a class="my-table-btn" href="form.html">Add New Student</a>
</body>
</html>