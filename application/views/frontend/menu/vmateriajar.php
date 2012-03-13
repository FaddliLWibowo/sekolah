
<div class="panel_menu">
    <div class="panel_menu_header_right">
        <h2><i class="icon-leaf"></i>materi ajar</h2>

        <ul>
<!--            --><?php
//            if (empty($materiajar_row)) {
//                $materiajar_row->id_materi = '';
//                $materiajar_row->title_materiajar = '';
//                $materiajar_row->note_materiajar = '';
//
//                $type = 'create';
//            } else {
//                $type = 'update';
//            }
//            ?>
        <?php
        $no = 1;
        foreach ($materiajar_row as $row) {
            ?>
            <li><?php echo $no;?></li>
            <li><?php echo $row->title_materiajar;?></li>
            <li><?php echo $row->note_materiajar;?></li>
            <?php
            $no++;
        }
            ?>
        </ul>

    </div>
</div>