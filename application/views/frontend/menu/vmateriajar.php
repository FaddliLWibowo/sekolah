
<div class="panel_menu">
    <div class="panel_menu_header_right">
        <h2><i class="icon-leaf"></i>materi ajar</h2>

        <ul>

        <?php
        $no = 1;
        foreach ($materiajar_row as $row) {
            ?>

            <li><a href="<?php echo base_url(); ?>index.php/readmore/cread_materi"><?php echo $row->title_materiajar;?></a></li>
            
            <?php
            $no++;
        }
            ?>
        </ul>

    </div>
</div>