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
        if(self::see_if_contact_exists($contact)){
            ?>
            <script>alert('contact number already exists;')</script>
            <?php
            return;
        }else{
            if(is_null($dob) != 1)
            $sql = "INSERT INTO `contact_details`(`name`, `contact_number`, `email`, `dob`) VALUES ('{$name}','{$contact}','{$email}','{$dob}')";
            else $sql = "INSERT INTO `contact_details`(`name`, `contact_number`, `email`) VALUES ('{$name}','{$contact}','{$email}')";
            $result = $database->query($sql);
            return $result;  
        }
    }

    public static function see_if_contact_exists($contact){
        global $database;
        $contact = $database->escape_string($contact);
        $sql = "SELECT * FROM `contact_details` WHERE `contact_number`='$contact'";
        $result = $database->query($sql);
        if(mysqli_num_rows($result) >= 1) return true;
        return false;
    }

    public static function get_contacts($start_from, $contacts_per_page){
        global $database;
        $start_from = $database->escape_string($start_from);
        $contacts_per_page = $database->escape_string($contacts_per_page);
        $sql = "SELECT * FROM `contact_details` LIMIT $start_from, $contacts_per_page";
        $result = $database->query($sql);
        if (mysqli_num_rows($result) >= 1) return $result;
        return false;
    }

    // public static function get_all_contacts(){
    //     global $database;
    //     $sql = "SELECT * FROM `contact_details`";
    //     $result = $database->query($sql);
    //     if (mysqli_num_rows($result) >= 1) return $result;
    //     return false;
    // }

    // public static function sort_data(){
    //     global $database;
    //     self::get_contacts();
    // }

    public static function remove_contact($contact){
        global $database;
        $sql = "DELETE FROM `contact_details` WHERE `contact_number`='{$contact}'";
        $result = $database->query($sql);
    }

    public static function update_contact($old_name, $old_contact_number, $name, $contact, $email, $dob){
        global $database;
        $old_name = $database->escape_string($old_name);
        $old_contact_number = $database->escape_string($old_contact_number);
        $name = $database->escape_string($name);
        $dob = $database->escape_string($dob);
        $contact = $database->escape_string($contact);
        $email = $database->escape_string($email);
        
        $sql = "UPDATE `contact_details` SET `name`='$name', `dob`='$dob', `contact_number`='$contact',`email`='$email' WHERE `name`='$old_name' AND `contact_number`='$old_contact_number';";
        $result = $database->query($sql);
        return $result;
    }

    // public static function get_id($old_name, $old_contact_number){
    //     global $database;
    //     $old_name = $database->escape_string($old_name);
    //     $old_contact_number = $database->escape_string($old_contact_number);
    //     $sql = "SELECT `id` FROM `contact_details` WHERE";
    // }

    public static function get_total_lines(){
        global $database;
        $sql = "SELECT * FROM `contact_details`";
        $result = $database->query($sql);
        if (mysqli_num_rows($result) >= 1) return mysqli_num_rows($result);
        return 0;
    }

    public static function array_msort($array, $cols){
        $colarr = array();
        foreach ($cols as $col => $order) {
            $colarr[$col] = array();
            foreach ($array as $k => $row) { $colarr[$col]['_'.$k] = strtolower($row[$col]); }
        }
        $eval = 'array_multisort(';
        foreach ($cols as $col => $order) {
            $eval .= '$colarr[\''.$col.'\'],'.$order.',';
        }
        $eval = substr($eval,0,-1).');';
        eval($eval);
        $ret = array();
        foreach ($colarr as $col => $arr) {
            foreach ($arr as $k => $v) {
                $k = substr($k,1);
                if (!isset($ret[$k])) $ret[$k] = $array[$k];
                $ret[$k][$col] = $array[$k][$col];
            }
        }
        return $ret;
    
    }
}

?>