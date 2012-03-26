<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>

    <div class="center">
        <div class="content_center"></div>
        <h6 style="margin-bottom: 20px">MATERI AJAR</h6>
        <?php $no = 1;
        foreach($materiajar_row as $row)
        {?>
            <h4>
                <?php echo $row->title_materiajar;?>
            </h4>
            <p style="text-indent: 20px">
                <?php echo $row->note_materiajar;?>
            </p>
            <br/>
            <hr/>
            <?php
            $no++;
        }
        ?>
        <div class="ajaxurl"></div>
    </div>

    <?php $this->load->view('frontend/element/vcontentright'); ?>
</div>

