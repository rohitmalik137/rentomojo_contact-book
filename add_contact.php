<?php require_once "r_init.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Rentomojo Assignment</title>
</head>
<body>
    <div class="main">
        <header class="header">
            rm-phonebook
        </header>
        <form action="add_contact.php" method="POST" class="form">
            <!-- <div style="font-size: larger;"><i class="fa fa-arrow-left" aria-hidden="true"></i><strong style="padding-left: 10px;;">Add New Contact</strong></div> -->
            <div style='font-size: larger;'>
                <i style='padding-right:10px;' class="fa fa-arrow-left" aria-hidden="true"></i>
                <span>Add New Contact</span>
            </div>
            <hr>
            <label>Name:</label><br><input type="text" name="name" required/><br><br>
            <label>DOB</label><br><input type="date" name="dob" /><br><br>
            <label>Mobile Number:</label><input type="tel" name="contact" required /><br><br>
            <label>Email:</label><input type="email" name="email" required /><br><br>
            <div class="submit_tag"><input type="submit" name="save" value="Save" /></div>
        </form>
    </div>
</body>
</html>


<?php

    if(isset($_POST['save'])){
        $name = trim($_POST['name']);
        if(trim($_POST['dob']) != "") $dob = trim($_POST['dob']);
        $contact = trim($_POST['contact']);
        $email = trim($_POST['email']);

        $is_success = Ruser::add_contact($name,$contact, $email, $dob);
        if($is_success){
            header("Location: index.php");
        }
    }

?>