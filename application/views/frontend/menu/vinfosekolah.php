
<div class="panel_menu">
    <div class="panel_menu_header_right">
        <h2><i class="icon-leaf"></i>info sekolah</h2>
        <?php $no = 1;
        foreach($infosekolah_row as $row)
        {?>



        <ul>

            <li><a href="<?php echo base_url(); ?>index.php/readmore/cread_info"><?php echo $row->title_info; ?></a></li>
            
        </ul>

            <?php
            $no++;
        }

        ?>

    </div>


</div>