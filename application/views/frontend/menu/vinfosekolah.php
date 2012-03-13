<?php

?>
<div class="panel_menu">
    <div class="panel_menu_header_right">
        <h2><i class="icon-leaf"></i>info sekolah</h2>
        <?php $no = 1;
        foreach($infosekolah_row as $row)
        {?>



        <ul>
            <li><?php echo $no; ?></li>
            <li><?php echo $row->title_info; ?></li>
            <li><?php echo $row->note_info; ?></li>
        </ul>

            <?php
            $no++;
        }

        ?>

    </div>


</div>