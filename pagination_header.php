<?php
    if(isset($_GET['idx_of_page'])) $idx_of_page = $_GET['idx_of_page'];
    else $idx_of_page = 1;
    $contacts_per_page = 4;
    $start_from = ($idx_of_page-1)*$contacts_per_page;

?>