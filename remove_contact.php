<?php require_once "r_init.php"; ?>

<?php
    $contact = $_REQUEST['details'];
    Ruser::remove_contact($contact);
    header("Location: index.php");
?>