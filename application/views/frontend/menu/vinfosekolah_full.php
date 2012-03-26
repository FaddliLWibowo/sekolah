<div class="content">
    <?php $this->load->view('frontend/element/vcontentleft'); ?>

    <div class="center">
        <div class="content_center"></div>
        <h6 style="margin-bottom: 20px">INFO SEKOLAH</h6>
        <?php $no = 1;
        foreach($infosekolah_row as $row)
        {?>
            <h4>
                <?php echo $row->title_info; ?>
            </h4>
            <p style="text-indent: 20px">
                <?php echo $row->note_info; ?>
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

