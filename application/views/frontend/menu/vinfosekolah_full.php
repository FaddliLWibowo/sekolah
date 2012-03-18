<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>

    <div class="center">
        <div class="content_center"></div>
        <h6>ARTIKEL TERBARU</h6>
        <?php $no = 1;
        foreach($infosekolah_row as $row)
        {?>
            <p>
                <?php echo $row->note_info; ?>
            </p>
            <?php
            $no++;
        }
        ?>
        <div class="ajaxurl"></div>
    </div>

    <?php $this->load->view('frontend/element/vcontentright'); ?>
</div>

