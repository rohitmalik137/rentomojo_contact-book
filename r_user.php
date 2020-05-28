<?php
class Ruser{
    public $id;
    public $name;
    public $dob;
    public $contact;
    public $email;

    public static function add_contact($name, $contact, $email, $dob){
        global $database;
        $name = $database->escape_string($name);
        $dob = $database->escape_string($dob);
        $contact = $database->escape_string($contact);
        $email = $database->escape_string($email);
        if(is_null($dob) != 1)
            $sql = "INSERT INTO `contact_details`(`name`, `contact_number`, `email`, `dob`) VALUES ('{$name}','{$contact}','{$email}','{$dob}')";
        else $sql = "INSERT INTO `contact_details`(`name`, `contact_number`, `email`) VALUES ('{$name}','{$contact}','{$email}')";
        $result = $database->query($sql);       
    }

    public static function get_contacts(){
        global $database;
        $sql = "SELECT * FROM `contact_details`";
        $result = $database->query($sql);
        if (mysqli_num_rows($result) >= 1) return $result;
        return false;
    }
}

?>