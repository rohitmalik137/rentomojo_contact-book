<?php require_once 'pagination_header.php' ?>
<?php

            $total_lines_of_data = Ruser::get_total_lines();
            $total_page = ceil($total_lines_of_data/$contacts_per_page);
            if($idx_of_page > $total_page){
                header("location: 404.php");
            }

            ?>
            <div class="pagination">
                <?php
                if($idx_of_page > 1){
                    echo "<a class='active_class' href='index.php?idx_of_page=".($idx_of_page-1)."'>&laquo;</a>";
                }
                ?><div id='for_pagination'><?php
                for($j=1; $j<$total_page; $j++){
                    ?>
                        <a class="<?php echo ($j == $idx_of_page) ? 'active active_class' : 'active_class' ?>" id="<?php echo "for_active_".$j ?>" href="index.php?idx_of_page=<?php echo $j; ?>"><?php echo $j; ?></a>
                    <?php
                }
                ?></div><?php
                if($j > $idx_of_page){
                    echo "<a class='active_class' href='index.php?idx_of_page=".($idx_of_page+1)."'>&raquo;</a>";
                }
                ?>
            </div>
            <?php
        ?>