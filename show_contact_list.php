<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Contact Book</title>
</head>
<body>
    <div class="main" style="position: relative;">
        <div class="header">
            <span>rm-phonebook</span>
        </div>


        <?php $list_of_contacts = Ruser::get_contacts();
                    if($list_of_contacts){
                        while($rows = mysqli_fetch_assoc($list_of_contacts)){
                            $posts[] = $rows;
                        }
                        // usort($posts, fn($a, $b) => strcmp($a->name, $b->name));
                        // $posts = asort($posts);
                        $count = 0;
                        foreach($posts as $rows){
                            $count++;
                        }
                        $i = 0;
        ?>


        <input type="text" name="search" onkeyup="search_fun(<?php echo $count  ?>);" id="search_box" class="search" placeholder="&#x1F50D;" />
        <div class="content">
            <?php
                        foreach($posts as $rows){
                            ?>
                            <div id="<?php echo "_".$i ?>" class="outer_info">
                                <div class="info">
                                    <span id="<?php echo "__".$i ?>"><?php echo $rows['name']."  <br/>"; ?></span>
                                    <i id="<?php echo "down_".$i ?>" style="cursor: pointer;" onclick="show(<?php echo 'down_'.$i ?>);" class="fa fa-caret-down fa-2x" aria-hidden="true"></i>
                                    <i id="<?php echo "up_".$i ?>" onclick="hide(<?php echo 'up_'.$i ?>);" style="display: none; cursor: pointer;" class="fa fa-caret-up fa-2x" aria-hidden="true"></i>
                                </div>
                                <div class="extendable" style="display: none;" id="<?php echo 'extend_'.$i ?>">
                                    <div class="info">
                                        <span> <?php
                                            if($rows['dob'] == '0000-00-00');
                                            else echo $rows['dob']."  <br/>"; ?></span>
                                        <div>
                                            <a href="update_contact.php?name=<?php echo $rows['name']; ?>&contact_number=<?php echo $rows['contact_number']; ?>&dob=<?php echo $rows['dob']; ?>&email=<?php echo $rows['email']; ?>" class="button edit">Edit</a>
                                            <a href="remove_contact.php?details=<?php echo $rows['contact_number']; ?>" class="button remove">Remove</a>
                                        </div>
                                    </div>
                                    <div class="contact_details">
                                        <span style="margin-right: 30px;">&#9742;<?php echo $rows['contact_number']."  <br/>"; ?></span>
                                        <span><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $rows['email']."  <br/>"; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                    }
                
                ?>
        </div>
        <i class="fa fa-plus-circle fa-3x" style="cursor: pointer; display: block; position: absolute; bottom: 5px; right: 10px;" aria-hidden="true" id="add_contact"></i>
    </div>

    <script src="js.js"></script>
    <script>
        var btn = document.getElementById('add_contact');
        btn.addEventListener('click', function() {
            document.location.href = 'add_contact.php';
        });
    </script>
</body>
</html>