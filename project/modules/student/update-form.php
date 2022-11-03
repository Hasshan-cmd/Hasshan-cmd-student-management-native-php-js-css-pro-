<?php
    require_once __DIR__.'/../../autoload.php';
    $id = $_GET['id'];

    $student =  Student::get($id);

    if ($student == null) exit("Student not found");
?>
<html>
    <head>
        <title>Update details of <?=$student->name?></title>
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>
    <body>
        <h1>Update details of <?=$student->name?></h1>
        <form action="update.php" method="post" id="form">
            <input type="hidden" name="id" value="<?=$student->id?>">
            <table cellspacing="5">
                <tr valign="top">
                    <td>
                        <label>Full Name:</label>
                    </td>
                    <td>
                        <input value="<?=$student->name?>" type="text" name="name" id="nameField" placeholder="Type your name here" required pattern="([a-zA-Z\s]{3,})"><br>
                        <span class="error-msg" id="nameFieldMsg"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <td>
                        <label>Calling Name:</label>
                    </td>
                    <td>
                        <input value="<?=$student->sname?>" type="text" name="sname" id="snameField" placeholder="Type calling name here" required pattern="([a-zA-Z\s]{3,})"><br>
                        <span class="error-msg" id="snameFieldMsg"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <td>
                        <label>Age:</label>
                    </td>
                    <td>
                        <input value="<?=$student->age?>" type="text" name="age" id="ageField" placeholder="Type your age here"><br>
                        <span class="error-msg" id="ageFieldMsg"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <td>
                        <label>NIC Number:</label>
                    </td>
                    <td>
                        <input value="<?=$student->nic?>" type="text" name="nic" id="nicField" placeholder="Type NIC number here" required pattern="^\s*([\d]{9}[v]v|x|X])|([\d]{12})\s*$"><br>
                        <span class="error-msg" id="nicFieldMsg"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <td>
                        <label>Address</label>
                    </td>
                    <td>
                        <textarea type="text" name="address" id="addressField" placeholder="Type your address here" required><?=$student->address?></textarea><br>
                        <span class="error-msg" id="addressFieldMsg"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender:</label><br>
                    </td>
                    <td>
                        <input type="radio" id="male" name="gender" value="Male" checked>Male
                        <input type="radio" id="female" name="gender" value="Female">Female
                    </td>
                </tr>
                <tr valign="top">
                    <td>
                        <label>Mobile:</label>
                    </td>
                    <td>
                        <input value="<?=$student->mobile?>" type="text" name="mobile" id="mobileField" placeholder="Type mobile number here" required pattern="^([\d]{10})$"><br>
                        <span class="error-msg" id="mobileFieldMsg"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <td>
                        <label>E-mail:</label>
                    </td>
                    <td>
                        <input value="<?=$student->email?>" type="text" name="email" id="emailField" placeholder="Type your E-mail here" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$"><br>
                        <span class="error-msg" id="emailFieldMsg"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right">
                        <button class="my-submit-btn" type="submit">Save Changes</button>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <a class="my-btn" href="table.php">All Student</a>
    </body>
</html>
