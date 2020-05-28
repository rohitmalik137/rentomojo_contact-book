<?php require_once "r_init.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles.css">
    <title></title>
</head>
<body>
    <div class="main">
        <div class="header">
            rm-phonebook
        </div>
        <input type="search" name="search" class="search" />
        <div class="content">
            <?php $list_of_contacts = Ruser::get_contacts();
                    if($list_of_contacts){
                        while($rows = mysqli_fetch_assoc($list_of_contacts)){
                            $posts[] = $rows;
                        }
                        // usort($posts, fn($a, $b) => strcmp($a->name, $b->name));
                        // $posts = asort($posts);
                        foreach($posts as $rows){
                            ?>
                            <div class="info">
                                <span> <?php echo $rows['name']."  <br/>"; ?></span>
                                <i class="fa fa-caret-down fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="info">
                                <span> <?php echo $rows['dob']."  <br/>"; ?></span>
                                <div>
                                    <input type="submit" name="edit" value="Edit" />
                                    <input type="submit" name="edit" value="Remove" />
                                </div>
                            </div>
                            <?php
                        }
                    }
                
                
                ?>
        </div>
    </div>



    <i class="fa fa-plus-circle fa-3x" aria-hidden="true" id="add_contact"></i>
    <script>
        var btn = document.getElementById('add_contact');
        btn.addEventListener('click', function() {
            document.location.href = 'add_contact.php';
        });
    </script>
</body>
</html>