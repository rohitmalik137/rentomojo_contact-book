<?php require_once "r_init.php"; ?>

<?php
    if((isset($_REQUEST['name']) && isset($_REQUEST['contact_number']) && isset($_REQUEST['dob']) && isset($_REQUEST['email']))){
        $name = $_REQUEST['name'];
        $contact_no = $_REQUEST['contact_number'];
        $dob = $_REQUEST['dob'];
        $email = $_REQUEST['email'];
    }
?>

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
        <form action="update_contact.php" method="POST" class="form">
            <!-- <div style="font-size: larger;"><i class="fa fa-arrow-left" aria-hidden="true"></i><strong style="padding-left: 10px;;">Add New Contact</strong></div> -->
            <label>Name:</label><input type="text" name="name" value="<?php echo (isset($_REQUEST['name'])) ? ($name) : (''); ?>" required/><br><br>
            <label>DOB:</label><input type="date" name="dob" value="<?php echo (isset($_REQUEST['dob']) && $dob !='0000-00-00') ? ($dob) : (''); ?>" /><br><br>
            <label>Mobile Number:</label><input type="tel" name="contact" value="<?php echo (isset($_REQUEST['contact_number'])) ? ($contact_no) : (''); ?>" required /><br><br>
            <label>Email:</label><input type="email" name="email" value="<?php echo (isset($_REQUEST['email'])) ? ($email) : (''); ?>" required /><br><br>
            <input type="hidden" name="nm" value="<?php echo (isset($_REQUEST['name'])) ? ($name) : (''); ?>" />
            <input type="hidden" name="cntct" value="<?php echo (isset($_REQUEST['contact_number'])) ? ($contact_no) : (''); ?>" />
            <input type="submit" name="save" value="Save" />
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['save']) && isset($_REQUEST['name'])){
        $cntct = $_POST['cntct'];
        $nm = $_POST['nm'];
        $name = trim($_POST['name']);
        if(trim($_POST['dob']) != "") $dob = trim($_POST['dob']);
        $contact = trim($_POST['contact']);
        $email = trim($_POST['email']);
        $is_success = Ruser::update_contact($nm,$cntct,$name,$contact, $email, $dob);
        if($is_success){
            header("Location: index.php");
        }
    }
?>